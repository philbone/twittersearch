<?php

namespace Test;

use Twitter\Base;
use Twitter\Search\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    public function testSearchIsBase()
    {
        $this->assertInstanceOf(Base::class, new Search);
    }

    /**
    * @depends testSearchIsBase
    */
    public function testFailSearch()
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $apiKey = substr(str_shuffle(str_repeat($pool, 5)), 0, 25); // auto consumer Key
        $apiSecret = substr(str_shuffle(str_repeat($pool, 5)), 0, 50); // auto consumer Secret

        $search = new Search();

        $search->setToken($apiKey, $apiSecret);

        $value = ["q" => "#PHP #Composer"];

         $this->assertContains( '"statuscode":400', json_encode( $search->search($value) ) );
    }

    /**
    * @depends testFailSearch
    */
    public function testSuccessSearch()
    {
        $apiKey = "nLl0hRLXY3xEPNGnx6UndxrcB"; // replace with your own api key.
        $apiSecret = "9ebWjpOra7SCGkHOK3YyTcqoKQJBSyKgljgG4MCDZi5cNSb3lv"; // replace with your own api secret.
        $search = new Search();

        $search->setToken($apiKey, $apiSecret);

        $value = ["q" => "#PHP #Composer"];

         $this->assertContains( '"statuses":[{"created_at":', json_encode( $search->search($value) ) );
    }
}

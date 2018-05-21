<?php

namespace Twitter\Search;

use Twitter\Base;

/**
 *  Responsible for perform the search via Twittet Search API.
 */
class Search extends Base
{

    public function search($value)
    {
        try{
            $url = "/search/tweets.json";
            $response = $this->callTwitterAPI("get",$url,$value);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}

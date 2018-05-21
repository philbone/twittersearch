# About Switter 
[![Build Status](https://travis-ci.org/philbone/twittersearch.svg)](https://travis-ci.org/philbone/twittersearch)

Switter is a package for Twitter search API.

## Index 
 1. [Requirements](#requirements)
 1. [Installation](#installation)
 1. [How to use](#how-to-use)
    1. [Example](#example-)
 1. [Running a Test](#how-to-run-test-searchtest-php)

### Requirements 
  * PHP 7.1 or higer.
  * [Guzzle](https://github.com/guzzle/guzzle) PHP HTTP client.
  * Twitter API Keys from [Twitter Apps](https://apps.twitter.com/) 

### Installation 
Clone repository from GitHub

    $ git clone https://github.com/philbone/twittersearch.git switter 

Inside the directory where Switter is installed, open the terminal and run "composer install" to get the dependencies.

    $ composer install

### How to use 
  * Import definition.
  * Make a new object from Search class.
  * Set token with your API keys.
  * Set some value to search.
  * Search the value.

#### Example: 

    use Twitter\Search\Search;

    $apiKey = "jLl8hRLXY3xEPHGnx7UndxrcV"; // replace with your own api key.
    $apiSecret = "8erBjpOra7GCGkHOK3YbTcqoKTQBSyKgljgG4MCDZi5cKRb7op"; // replace with your own api secret.

    $search = new Search();

    $search->setToken($apiKey, $apiSecret);

    $value = ["q" => "#PHP #Composer"];

    $response = $search->search($value);

    var_dump($response);

A detailed test example can be found in test/SearchTest.php. Pay special attention to the sample method "testSuccessSearch".

### How to run Test SearchTest.php 
Assuming that PHPUnit was installed as a dependency, simply open the terminal from the directory where Switter is installed and run it:

    $ phpunit 



<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();

$search->setToken("nLl0hRLXY3xEPNGnx6UndxrcB","9ebWjpOra7SCGkHOK3YyTcqoKQJBSyKgljgG4MCDZi5cNSb3lv");

$value = ["q" => "philbone"];

echo "<pre>";
print_r($search->search($value));
echo "</pre>";

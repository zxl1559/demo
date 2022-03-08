<?php

// use Elasticsearch\ClientBuilder;

// require 'vendor/autoload.php';

// $client = ClientBuilder::create()->build();

// $redis = new Redis();
// $con = $redis->connect('127.0.0.1', 6379);

// if (!$con) {
//     die('');
// }

// $res = $redis->set('key', '123');

// $res = $redis->get('key');

use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$builder = ClientBuilder::create();
var_dump($builder);  

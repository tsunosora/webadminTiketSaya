<?php

// include 'includes/user_token.php'
require __DIR__.'/../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/tiketsaya-83072-7d9b02b9f976.json');

$firebase = (new Factory)
    ->withServiceAccount(__DIR__.'/tiketsaya-83072-0f5459fe8ac3.json')
    ->withDatabaseUri('https://tiketsaya-83072.firebaseio.com/');
    // ->create();
$database = $firebase->createDatabase();



// $newPost = $database
//     ->getReference('test3')
//     ->push([
//         'title' => 'Hello Worl!',
//         'body' =>'Indonesia'
//     ]);

//     echo "pre";
//     print_r($newPost->getValue());
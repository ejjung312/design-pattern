<?php
require_once "./class/SomeClient.php";
require_once "./class/ArrayOutput.php";
require_once "./class/JsonStringOutput.php";
require_once "./class/SerializedArrayOutput.php";

$tempData = [
    'a' => 'abc',
    'b' => [
        'a' => 'apple',
        'b' => 'banana',
    ],
    'c' => 'car'
];


$client = new SomeClient();

// 배열 형태 출력
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput($tempData);
var_dump($data);
echo "<br/>#################################<br/>";

// JSON 형태 출력
$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput($tempData);
echo $data;
echo "<br/>#################################<br/>";

$client->setOutput(new SerializedArrayOutput());
$data = $client->loadOutput($tempData);
var_dump($data);
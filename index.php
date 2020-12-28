<head>
    <link rel="stylesheet" href="static/css/master.css">
</head>


<?php

$apiURL = 'https://fdo.rocketlaunch.live/json/launches/next/5';
$apiRespons = json_decode(file_get_contents($apiURL));

//var_dump($apiRespons);

$respons = $apiRespons->result;

echo("<div class='container'>");

foreach ($respons as $key => $value) {
    var_dump($value);
    echo("<div class='devider'></div>");
}

echo("</div>");
?>
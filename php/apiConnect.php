<?php

//get current weather
$key = 'dd6ccc78d1334bce8efc95b752b2267e';
// $city = 'Vladivostok';
$requestCurrent = "http://api.weatherbit.io/v2.0/current?&city=$city&key=$key";
$requestCurrent = file_get_contents($requestCurrent);
$requestCurrent = json_decode($requestCurrent);
$currentTemp = round($requestCurrent->data[0]->temp, 0);
$currentWeatherName = $requestCurrent->data[0]->weather->description;
$city = $requestCurrent->data[0]->city_name;

?>

<?php
$location = $_GET['location'];
$apiKey = 'c8ed3b12bae746b691a34423240309'; // Replace with your weather API key

$apiUrl = "https://api.weatherapi.com/v1/current.json?key=$apiKey&q=$location";

$weatherData = file_get_contents($apiUrl);
echo $weatherData;
?>

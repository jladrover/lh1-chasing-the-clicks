<?php
$lat = $_GET["lat"] ?? null;
$long = $_GET["long"] ?? null;
$data = array(
	"lat" => $lat,
	"long" => $long
);
$file = "location-data.json";
$currentData = file_get_contents($file);
$currentData = json_decode($currentData, true);
array_push($currentData, $data);
file_put_contents($file, json_encode($currentData));
?>
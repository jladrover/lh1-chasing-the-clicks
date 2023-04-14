<?php
// connect to db and queries
$connect = new mysqli("localhost", "jladr", "password", "lh1");
$result = $connect->query("SELECT lat, long FROM click_locs");

$locationData = array();
while ($row = $result->fetch_assoc()) {
	$

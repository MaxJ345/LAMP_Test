# test.php
<?php

$API_KEY = "ca8275be-cfcf-4499-b9d9-829ba12ca9b3";
$URL = "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/RiotSchmick?api_key=" + $API_KEY;

$ch = curl_init($URL);

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);

echo "<h2>Output:</h2>";
echo "<h1>please work: $output</h1>";

curl_close($ch);

?>

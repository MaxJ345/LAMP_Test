# test.php

<?php

$API_KEY = "ca8275be-cfcf-4499-b9d9-829ba12ca9b3";
$URL = "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/GeneticMaterial?api_key=" + $API_KEY;

$ch = curl_init();
//$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_URL, $URL);
//curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

echo $result;

curl_close($ch);
//fclose($fp);
?>

<?php

$API_KEY = "ca8275be-cfcf-4499-b9d9-829ba12ca9b3";

$URL = "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/MaxJ345?api_key=";

$FULL_URL = $URL . $API_KEY;

$ch = curl_init($FULL_URL);

//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $FULL_URL);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($status_code != 200)
{
	echo "<br />Error<br />HTTP Status Code: " . $status_code;
}
else
{
	echo "<br />" . $result;
	$result = json_decode($result, true);
	echo "<br />" . $result;
	print_r($result);
	echo "<br />HTTP Status Code: " . $status_code;
}

curl_close($ch);

?>

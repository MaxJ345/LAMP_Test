<?php

$ch = curl_init("https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/GeneticMaterial?api_key=ca8275be-cfcf-4499-b9d9-829ba12ca9b3");

//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/GeneticMaterial?api_key=ca8275be-cfcf-4499-b9d9-829ba12ca9b3");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

echo $result;
echo "\n\r";
echo json_decode($result);
echo "\n\r";
print_r(json_decode($result));

curl_close($ch);

?>

<?php
$ch = curl_init('https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json');
$fop = fopen('curl.json', 'w');

curl_setopt($ch, CURLOPT_FILE, $fop);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fop);

$fi = file_get_contents('curl.json');
$json = json_decode($fi, 'true');
echo $json["query"]["pages"][15580374]["pageid"]."<br>";
echo $json["query"]["pages"][15580374]["title"];

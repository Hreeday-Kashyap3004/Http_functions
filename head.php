<?php
$url = "https://www.google.com"; // Requesting Google's headers

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_NOBODY, true); // Only get headers
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "<h3>HTTP Response Code: $http_code</h3>";
echo "<pre>$response</pre>";
?>

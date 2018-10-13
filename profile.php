<?php


$access_token = 'sWFWYEZmlNJIQX+IZrkI3eKsX9fhmnc2mnfEZF2jaoO+KSu68fl+1rYsoic+E2ZWChVgNHvmqzXA3Ioe1VcpoqV0LMHQgfYRXv3HI8A27DRmwSGgtYQVBW9T66BCZSjZCKpIT3HbITjvF8836OGSdgdB04t89/1O/w1cDnyilFU=';

$userId = 'U5ace03d6c9ff4a67a5006b48fc5e2491';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;


<?php



require "vendor/autoload.php";

$access_token = 'sWFWYEZmlNJIQX+IZrkI3eKsX9fhmnc2mnfEZF2jaoO+KSu68fl+1rYsoic+E2ZWChVgNHvmqzXA3Ioe1VcpoqV0LMHQgfYRXv3HI8A27DRmwSGgtYQVBW9T66BCZSjZCKpIT3HbITjvF8836OGSdgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '6ff492dd1e967482a78926a0ec910eaf';

$pushID = 'U5ace03d6c9ff4a67a5006b48fc5e2491';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








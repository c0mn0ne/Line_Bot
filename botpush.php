<?php



require "vendor/autoload.php";

$access_token = 'KuqCiLHf2T7FF+nulj9ojl74DXSZ5t4H4ypbicAOlzNWdFgPp9XQ5iyAix/mkga0IJSe252HpTgoYCYD3qSV6yQEcW4TNlPF4RxnCp1NQW+aHmSlJMuJl4u+N9Osv9isauZ4YGh2QUoO5HVAFiKWAQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'df3e2e132b677685d6529d10e77ea00c';

$pushID = 'Ue1335d363525a2a487a23780a779cce1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








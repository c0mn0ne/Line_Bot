<?php
$access_token = 'KuqCiLHf2T7FF+nulj9ojl74DXSZ5t4H4ypbicAOlzNWdFgPp9XQ5iyAix/mkga0IJSe252HpTgoYCYD3qSV6yQEcW4TNlPF4RxnCp1NQW+aHmSlJMuJl4u+N9Osv9isauZ4YGh2QUoO5HVAFiKWAQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

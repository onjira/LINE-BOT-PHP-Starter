<?php
$access_token = 'w4k0ffeevuYmvURkSYTM6BOsQw0QOUEQgq/3tctF6PDhvQatPa4cJXbi6J5iG75OSjU7i9iqvh1Yy+NRTcAOZdBd8aXwBdTCOAqSBNMR17jCUSzxbOCaE/YZEl4QlsVX56iAHH5DHrMVrQGluxew4QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
<?php
$access_token = 'Zu2Ny3PJg/+o+cppCv21fgBrjRPbBurmopwHqixQuS0F8dzR+87RBF0hRGQrFqWORFBMOY37DozoDrWnaWUqxEgeyc0q0cxGrjiz469P8820Go3RnYcXg2KxEhcc/o1IwNst+Q45O52+pcHJukzPXwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

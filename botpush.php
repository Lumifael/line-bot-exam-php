<?php



require "vendor/autoload.php";

$access_token = 'Zu2Ny3PJg/+o+cppCv21fgBrjRPbBurmopwHqixQuS0F8dzR+87RBF0hRGQrFqWORFBMOY37DozoDrWnaWUqxEgeyc0q0cxGrjiz469P8820Go3RnYcXg2KxEhcc/o1IwNst+Q45O52+pcHJukzPXwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ab2de0e444f6a2ef3b67f5ffa00bdde7';

$pushID = 'U7f660e057003f022d57c1c2fb516b97b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








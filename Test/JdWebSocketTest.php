<?php
include_once("../JdWebSocketSdk.php");
include_once("MessageHandlerDemo.php");

use Jd\WebSocket\Sync\JdMsgClient;


date_default_timezone_set("PRC");
$messageHandler = new MessageHandlerDemo();
while (true) {
    try {
        $client = new JdMsgClient(env("WMS_APP_KEY"), env("WMS_SECRET"), "default", array('timeout' => 10));
        $client->setMessageProcessor($messageHandler);
        $client->connect(env("WMS_CALLBACK_URL"));
        $client->send('{"msgId":"lsb-uat-g1,task,95,eclp,1","msgName":"orderMessage","msgPayload":"{\"orderName\":\"sss\",\"orderId\":\"12\",\"createTime\":\"2017-12-05\"}","pin":"blademirror"}');
        \Log::info('ws start');
        $client->startListening();
    } catch (\Exception $e) {
        continue;
    }
}

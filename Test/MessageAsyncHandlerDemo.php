<?php

use Jd\WebSocket\Async\MessageAsyncProcessor;

class MessageAsyncHandlerDemo implements MessageAsyncProcessor
{
    public function onMessage($msg, $msgStatus)
    {
        echo "msgId: " . $msg->msgId . " msgName: " . $msg->msgName . " msgPayloadRaw: " . $msg->msgPayloadRaw . "\n";
        //$msgStatus->isFail=true;
    }

    public function onOpen($client)
    {
        $msg = array();
        $msg["pin"] = "pinData";
        $msg["msgId"] = "msgIdData";
        $msg["msgName"] = "msgNameData";
        $msg["msgPayload"] = "msgPayloadData";
        $client->send(json_encode($msg));
    }
}
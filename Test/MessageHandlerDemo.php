<?php
/**
 * Created by PhpStorm.
 * User: wanyong
 * Date: 2017/12/1
 * Time: 16:01
 */

use Jd\WebSocket\Sync\MessageSyncProcessor;

class MessageHandlerDemo implements MessageSyncProcessor
{
    private $success = false;

    public function onMessage($msg, $msgStatus)
    {
        echo "msgId: " . $msg->msgId . " msgName: " . $msg->msgName . " msgPayloadRaw: " . $msg->msgPayloadRaw . "\n";
    }

    public function onTick($client)
    {
        echo "onTick\n";

        $client->send('{"msgId":"lsb-uat-g1,task,95,eclp,1","msgName":"orderMessage","msgPayload":"{\"orderName\":\"sss\",\"orderId\":\"12\",\"createTime\":\"2017-12-05\"}","pin":"blademirror"}');
        if ($this->success == true) {
            return false;
        }
    }

    public function onClose()
    {
        echo "onClose\n";
    }

    public function onError()
    {
        echo "onError\n";
    }
}
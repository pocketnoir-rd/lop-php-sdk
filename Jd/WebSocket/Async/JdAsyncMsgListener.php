<?php

namespace Jd\WebSocket\Async;

use Jd\WebSocket\Domain\JdMsg;
use Jd\WebSocket\Domain\JdMsgStatus;

class JdAsyncMsgListener
{

    private $messageProcessor;
    private $stopped = false;

    public function __construct($messageProcessor)
    {
        $this->messageProcessor = $messageProcessor;
    }

    /**
     * 成功建立连接后的回调函数
     * @param $client
     */
    public function onOpen($client)
    {
        if (isset($this->messageProcessor)) {
            $this->messageProcessor->onOpen($client);
        }
    }

    /**
     * 收到服务器消息后的回调函数
     * @param $client
     * @param $frame
     */
    public function onMessage($client, $frame)
    {
        if (!$this->stopped) {
            $data = $frame->data;
            if (is_string($data)) {
               // echo "data: ".$data."\n";
                $msg = new JdMsg();
                try {
                    $msgMap = json_decode($data);
                    if (is_array($msgMap)) {
                        if (isset($msgMap["pin"])) {
                            $msg->pin = $msgMap["pin"];
                        }
                        if (isset($msgMap["msgId"])) {
                            $msg->msgId = $msgMap["msgId"];
                        }
                        if (isset($msgMap["msgName"])) {
                            $msg->msgName = $msgMap["msgName"];
                        }
                        if (isset($msgMap["msgPayload"])) {
                            $msg->msgPayloadRaw = $msgMap["msgPayload"];
                            $msg->msgPayload = json_decode($msg->msgPayloadRaw);
                        }
                    }elseif (is_object($msgMap)){
                        if (isset($msgMap->pin)) {
                            $msg->pin = $msgMap->pin;
                        }
                        if (isset($msgMap->msgId)) {
                            $msg->msgId = $msgMap->msgId;
                        }
                        if (isset($msgMap->msgName)) {
                            $msg->msgName = $msgMap->msgName;
                        }
                        if (isset($msgMap->msgPayload)) {
                            $msg->msgPayloadRaw = $msgMap->msgPayload;
                            $msg->msgPayload = json_decode($msg->msgPayloadRaw);
                        }
                    }else{
                        $msg->msgPayloadRaw =$data;
                    }
                } catch (\Exception $e) {
                    $msg->msgPayloadRaw = $data;
                }
                $msgStatus = new JdMsgStatus($msg->msgId);
                try {
                    //处理消息
                    if (isset($this->messageProcessor)) {
                        $this->messageProcessor->onMessage($msg, $msgStatus);
                        //服务端收不到confirm 消息，会重发。
                        if (!$msgStatus->isFail) {
                            $this->confirm($client, $msgStatus);
                        }
                    }
                } catch (\Exception $e) {

                }
            }
        }
    }

    private function confirm($client, $msgStatus)
    {
        $client->send($this->getConfirmMessage($msgStatus));
    }

    private function getConfirmMessage($msgStatus)
    {
        $content = array();
        if (isset($msgStatus->msgId)) {
            $content["msgId"] = $msgStatus->msgId;
            $content["name"] = "commit";
        }
        if ($msgStatus->isFail && isset($msgStatus->reason)) {
            $content["reason"] = $msgStatus->reason;
        }
        return json_encode($content);
    }

    /**
     * 关闭连接的回调函数
     * @param $client
     */
    public function onClose($client)
    {
        $this->stopped = true;
    }

    public function close()
    {
        $this->stopped = true;
    }
}
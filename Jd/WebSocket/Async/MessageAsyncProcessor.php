<?php
/**
 * Created by PhpStorm.
 * User: wanyong
 * Date: 2017/12/1
 * Time: 14:14
 */

namespace Jd\WebSocket\Async;


use Jd\WebSocket\MessageProcessor;

interface MessageAsyncProcessor extends MessageProcessor
{
    /**
     * 如果需要连接建立后发消息给服务器端，可以实现该接口，调用$client->send发送消息
     * @param $client  type:/Jd/WebSocket/Async/Swoole/WbeSocketClient
     * @return mixed
     */
    public function onOpen($client);
}
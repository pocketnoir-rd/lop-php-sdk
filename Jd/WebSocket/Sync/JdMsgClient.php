<?php
/**
 * Created by PhpStorm.
 * User: wanyong
 * Date: 2017/12/1
 * Time: 12:11
 */

namespace Jd\WebSocket\Sync;

use Jd\WebSocket\BaseJdMsgClient;
use Jd\WebSocket\Sync\Textalk\Client;

class JdMsgClient extends BaseJdMsgClient
{
    private $client;
    private $wsListener;

    public function __construct($appKey, $appSecret, $groupName, $options = array())
    {
        parent::__construct($appKey, $appSecret, $groupName);
        $this->client = new Client($options);
    }

    public function setMessageProcessor($messageProcessor)
    {
        $this->wsListener = new JdMsgListener($messageProcessor);
        //注册监听器
        $this->client->onTick([$this->wsListener, "onTick"]);
        $this->client->onMessage([$this->wsListener, "onMessage"]);
    }

    public function connect($uri)
    {
        $this->client->connect($this->assembleUri($uri));
    }

    public function close()
    {
        return $this->client->close();
    }

    public function send($playload)
    {
        return $this->client->send($playload);
    }

    public function receive()
    {
        return $this->client->receive();
    }

    public function startListening()
    {
        if (isset($this->wsListener)) {
            return $this->client->run();
        }
    }
}
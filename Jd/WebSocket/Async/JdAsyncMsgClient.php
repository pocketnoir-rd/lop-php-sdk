<?php

namespace Jd\WebSocket\Async;

use Jd\WebSocket\Async\Swoole\WebSocketClient;
use Jd\WebSocket\BaseJdMsgClient;

class JdAsyncMsgClient extends BaseJdMsgClient
{
    private $wsListener;
    private $wsClient;
    public $timeout = 0;

    public function __construct($appKey, $appSecret, $groupName, $messageProcessor)
    {
        parent::__construct($appKey, $appSecret, $groupName);
        $this->wsListener = new JdAsyncMsgListener($messageProcessor);
        $this->wsClient = new WebSocketClient();
        //注册监听器
        $this->wsClient->on("open", [$this->wsListener, "onOpen"]);
        $this->wsClient->on("message", [$this->wsListener, "onMessage"]);
        $this->wsClient->on("close", [$this->wsListener, "onClose"]);
    }

    public function connect($uri)
    {
        $url_parts = parse_url($this->assembleUri($uri));
        if ($url_parts === false || !isset($addr['host']) || !isset($addr['port'])) {
            throw new \Exception('Invalid uri');
        }
        $scheme = $url_parts['scheme'];
        $host = $url_parts['host'];
        $port = isset($url_parts['port']) ? $url_parts['port'] : ($scheme === 'wss' ? 443 : 80);
        $path = isset($url_parts['path']) ? $url_parts['path'] : '/';
        $this->wsClient->connect($host, $port, $path, $this->timeout);
    }

    public function close()
    {
        $this->wsClient->disconnect();
        $this->wsListener->close();
    }
}
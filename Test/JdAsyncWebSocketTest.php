<?php
/**
 * 需要安装php swoole扩展支持
 */
include_once("../JdWebSocketSdk.php");
include_once("MessageAsyncHandlerDemo.php");

use Jd\WebSocket\Async\JdAsyncMsgClient;

//测试demo
date_default_timezone_set("PRC");
$messageHandler = new MessageAsyncHandlerDemo();
$client = new JdAsyncMsgClient("app_key", "app_secret", "default", $messageHandler);
$client->connect("ws://echo.websocket.org");



<?php
include_once("../JdSdk.php");
use Jd\Api\JdClient;
use JD\Api\Request\DemoTestEchoLopRequest;
//测试demo
$c = new JdClient();
$c->appKey = "3a3cb493adc44dc78f55f2b2bcb354bd";
$c->appSecret = "26829b26210945528d8d230256ec625e";
$c->accessToken = "f18fe7d98267438bbc319c7164c4823a";
//$c->serverUrl = "http://172.20.168.154/routerjson";
$c->serverUrl = "http://192.168.159.129/routerjson";
$req = new DemoTestEchoLopRequest();
$req->setMsg( "bbbbcc" );
$resp = $c->execute($req, $c->accessToken);
printf(json_encode($resp,JSON_UNESCAPED_UNICODE));
//foreach ($resp as $propKey => $propValue) {
//  echo $propKey." ".$propValue." \n";
//}
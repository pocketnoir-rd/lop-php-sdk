<?php
include_once("../JdSdk.php");
use Jd\Api\JdClient;
use Jd\Api\Request\Test\LopEchoUserArrayLopRequest;
use Jd\Api\Domain\Test\LopService\User;

//测试demo
$c = new JdClient();
$c->appKey = "3a3cb493adc44dc78f55f2b2bcb354bd";
$c->appSecret = "26829b26210945528d8d230256ec625e";
$c->accessToken = "f18fe7d98267438bbc319c7164c4823a";
$c->serverUrl = "http://192.168.159.129/routerjson";
$request = new LopEchoUserArrayLopRequest();
    $userArray = array();
for($i=0;$i<2;$i++){
      $user = new User();
      $user->setUsername("test");
      $user->setPassword("test");
      $userArray[$i]=$user;
  }
$request->setUserArray($userArray);
    //参数校验 
$request->check();
$response = $c->execute($request, $c->accessToken);
printf(json_encode($response, JSON_UNESCAPED_UNICODE));

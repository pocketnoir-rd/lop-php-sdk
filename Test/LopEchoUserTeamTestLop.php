<?php
include_once("../JdSdk.php");
use Jd\Api\JdClient;
use Jd\Api\Request\Test\LopEchoUserTeamLopRequest;
use Jd\Api\Domain\Test\LopService\Dog;
use Jd\Api\Domain\Test\LopService\Team;
use Jd\Api\Domain\Test\LopService\User;

//测试demo
$c = new JdClient();
$c->appKey = "3a3cb493adc44dc78f55f2b2bcb354bd";
$c->appSecret = "26829b26210945528d8d230256ec625e";
$c->accessToken = "f18fe7d98267438bbc319c7164c4823a";
$c->serverUrl = "http://192.168.159.129/routerjson";
$request = new LopEchoUserTeamLopRequest();
    $team = new Team();

$users = array();
$user = new User();
$user->setUsername("name1");
$user->setPassword("pppp");
$users[0] = $user;
$user2 = new User();
$user2->setUsername("name2");
$user2->setPassword("pppp");
$users[1] = $user2;
$team->setUserList($users);
$dogs = array();
$dog = new Dog();
$dog->setName("dog1");
$dog->setPassowrd("pp1");
$dogs[0] = $dog;
$dog2 = new Dog();
$dog2->setName("dog2");
$dog2->setPassowrd("pppp");
$dogs[1] = $dog2;
$team->setDogList($dogs);
$request->setTeam($team);
    //参数校验 
$request->check();
$response = $c->execute($request, $c->accessToken);
printf(json_encode($response, JSON_UNESCAPED_UNICODE));

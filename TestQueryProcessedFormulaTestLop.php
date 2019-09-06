<?php
include_once("JdSdk.php");
use Jd\Api\JdClient;
use Jd\Api\Request\clps\TestQueryProcessedFormulaLopRequest;
use Jd\Api\Domain\clps\ClpsOpenGwService\QueryFormulaResquest;

//测试demo
$c = new JdClient();
$c->appKey = "3a3cb493adc44dc78f55f2b2bcb354bd";
$c->appSecret = "26829b26210945528d8d230256ec625e";
$c->accessToken = "f18fe7d98267438bbc319c7164c4823a";
$c->serverUrl = "http://192.168.159.129/routerjson";
$request = new TestQueryProcessedFormulaLopRequest();
    $request->setPin("test");
      $queryFormulaResquest = new QueryFormulaResquest();
    $queryFormulaResquest->setOwnerNo("test");
      $queryFormulaResquest->setFormulaId("test");
      $queryFormulaResquest->setFormulaCode("test");
      $queryFormulaResquest->setGoodsId("test");
      $queryFormulaResquest->setGoodsCode("test");
      $queryFormulaResquest->setItemId("test");
      $queryFormulaResquest->setItemCode("test");
    $request->setQueryFormulaResquest($queryFormulaResquest);
    //参数校验 
$request->check();
$response = $c->execute($request, $c->accessToken);
printf(json_encode($response, JSON_UNESCAPED_UNICODE));

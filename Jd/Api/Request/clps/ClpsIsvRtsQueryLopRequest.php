<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ骞冲彴閫�渚涘簲鍟嗚鍗曚俊鎭�
*/
class ClpsIsvRtsQueryLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ閫�渚涘簲鍟嗚鍗曟潯浠�
    */
    private $queryRtsOrderRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryRtsOrderRequest($queryRtsOrderRequest){
        $this->queryRtsOrderRequest=$queryRtsOrderRequest;
    }

    public function getQueryRtsOrderRequest(){
         return $this->queryRtsOrderRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.isvRtsQuery";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryRtsOrderRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryRtsOrderRequest,"queryRtsOrderRequest");

       RequestCheckUtil::checkObject($this->queryRtsOrderRequest,"queryRtsOrderRequest");
       if(isset($this->queryRtsOrderRequest) && method_exists($this->queryRtsOrderRequest,"check")) {
           $this->queryRtsOrderRequest->check();
       }        
    }
}
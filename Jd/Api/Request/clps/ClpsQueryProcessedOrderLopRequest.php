<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ缁勫鍔犲伐鍗�
*/
class ClpsQueryProcessedOrderLopRequest {
   /**
    * ISV鎺堟潈鐮� 
    */
    private $pin;
   /**
    * 鏌ヨ鏉′欢
    */
    private $processedQueryRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setProcessedQueryRequest($processedQueryRequest){
        $this->processedQueryRequest=$processedQueryRequest;
    }

    public function getProcessedQueryRequest(){
         return $this->processedQueryRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryProcessedOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->processedQueryRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->processedQueryRequest,"processedQueryRequest");

       RequestCheckUtil::checkObject($this->processedQueryRequest,"processedQueryRequest");
       if(isset($this->processedQueryRequest) && method_exists($this->processedQueryRequest,"check")) {
           $this->processedQueryRequest->check();
       }        
    }
}
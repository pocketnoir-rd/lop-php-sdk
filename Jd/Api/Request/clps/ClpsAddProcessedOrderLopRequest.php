<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍒涘缓缁勫鍔犲伐鍗�
*/
class ClpsAddProcessedOrderLopRequest {
   /**
    * ISV鎺堟潈鐮� 
    */
    private $pin;
   /**
    * 缁勮鍔犲伐鍗曚俊鎭�
    */
    private $processedAddRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setProcessedAddRequest($processedAddRequest){
        $this->processedAddRequest=$processedAddRequest;
    }

    public function getProcessedAddRequest(){
         return $this->processedAddRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.addProcessedOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->processedAddRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->processedAddRequest,"processedAddRequest");

       RequestCheckUtil::checkObject($this->processedAddRequest,"processedAddRequest");
       if(isset($this->processedAddRequest) && method_exists($this->processedAddRequest,"check")) {
           $this->processedAddRequest->check();
       }        
    }
}
<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍒涘缓閫�渚涘簲鍟嗚鍗�
*/
class ClpsAddRtsOrderLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鍒涘缓閫�渚涘簲鍟嗚鍗曞叆鍙�
    */
    private $rtsOrderRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setRtsOrderRequest($rtsOrderRequest){
        $this->rtsOrderRequest=$rtsOrderRequest;
    }

    public function getRtsOrderRequest(){
         return $this->rtsOrderRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.addRtsOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->rtsOrderRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->rtsOrderRequest,"rtsOrderRequest");

       RequestCheckUtil::checkObject($this->rtsOrderRequest,"rtsOrderRequest");
       if(isset($this->rtsOrderRequest) && method_exists($this->rtsOrderRequest,"check")) {
           $this->rtsOrderRequest->check();
       }        
    }
}
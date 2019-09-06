<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍒涘缓閫�璐у叆搴撳崟
*/
class ClpsAddRtwOrderLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 閫�璐у叆搴撳崟鍏ュ弬瀹炰綋
    */
    private $rtwOrderRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setRtwOrderRequest($rtwOrderRequest){
        $this->rtwOrderRequest=$rtwOrderRequest;
    }

    public function getRtwOrderRequest(){
         return $this->rtwOrderRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.addRtwOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->rtwOrderRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->rtwOrderRequest,"rtwOrderRequest");
       if(isset($this->rtwOrderRequest) && method_exists($this->rtwOrderRequest,"check")) {
           $this->rtwOrderRequest->check();
       }        
    }
}
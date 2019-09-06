<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ鍙戣揣璁㈠崟淇℃伅
*/
class ClpsQuerySoOrderLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鍑哄簱鍗曞叆鍙�
    */
    private $soQueryRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setSoQueryRequest($soQueryRequest){
        $this->soQueryRequest=$soQueryRequest;
    }

    public function getSoQueryRequest(){
         return $this->soQueryRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.querySoOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->soQueryRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->soQueryRequest,"soQueryRequest");

       RequestCheckUtil::checkObject($this->soQueryRequest,"soQueryRequest");
       if(isset($this->soQueryRequest) && method_exists($this->soQueryRequest,"check")) {
           $this->soQueryRequest->check();
       }        
    }
}
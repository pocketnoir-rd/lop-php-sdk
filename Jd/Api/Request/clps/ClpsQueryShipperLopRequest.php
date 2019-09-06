<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ骞冲彴鎵胯繍鍟嗘煡璇㈡帴鍙�
*/
class ClpsQueryShipperLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鎵胯繍鍟嗘煡璇㈠弬鏁�
    */
    private $queryShipperRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryShipperRequest($queryShipperRequest){
        $this->queryShipperRequest=$queryShipperRequest;
    }

    public function getQueryShipperRequest(){
         return $this->queryShipperRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryShipper";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryShipperRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryShipperRequest,"queryShipperRequest");

       RequestCheckUtil::checkObject($this->queryShipperRequest,"queryShipperRequest");
       if(isset($this->queryShipperRequest) && method_exists($this->queryShipperRequest,"check")) {
           $this->queryShipperRequest->check();
       }        
    }
}
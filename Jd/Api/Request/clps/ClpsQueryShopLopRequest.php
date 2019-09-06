<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ搴楅摵鎺ュ彛
*/
class ClpsQueryShopLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 搴楅摵鏌ヨ鍙傛暟
    */
    private $queryShopRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryShopRequest($queryShopRequest){
        $this->queryShopRequest=$queryShopRequest;
    }

    public function getQueryShopRequest(){
         return $this->queryShopRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryShop";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryShopRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryShopRequest,"queryShopRequest");

       RequestCheckUtil::checkObject($this->queryShopRequest,"queryShopRequest");
       if(isset($this->queryShopRequest) && method_exists($this->queryShopRequest,"check")) {
           $this->queryShopRequest->check();
       }        
    }
}
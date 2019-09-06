<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍚戝钩鍙板悓姝ュ晢鍝佷俊鎭�
*/
class ClpsTransportSingleItemLopRequest {
   /**
    * pin鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鍟嗗搧鍚屾璇锋眰瀵硅薄
    */
    private $singleItemRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setSingleItemRequest($singleItemRequest){
        $this->singleItemRequest=$singleItemRequest;
    }

    public function getSingleItemRequest(){
         return $this->singleItemRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.transportSingleItem";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->singleItemRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->singleItemRequest,"singleItemRequest");
       if(isset($this->singleItemRequest) && method_exists($this->singleItemRequest,"check")) {
           $this->singleItemRequest->check();
       }        
    }
}
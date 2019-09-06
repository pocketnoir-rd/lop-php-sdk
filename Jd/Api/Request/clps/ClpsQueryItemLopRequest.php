<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP浠庡钩鍙版煡璇㈠晢鍝佷俊鎭�
*/
class ClpsQueryItemLopRequest {
   /**
    * pin
    */
    private $pin;
   /**
    * 鍟嗗搧鏌ヨ璇锋眰
    */
    private $itemQueryRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setItemQueryRequest($itemQueryRequest){
        $this->itemQueryRequest=$itemQueryRequest;
    }

    public function getItemQueryRequest(){
         return $this->itemQueryRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryItem";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->itemQueryRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->itemQueryRequest,"itemQueryRequest");
       if(isset($this->itemQueryRequest) && method_exists($this->itemQueryRequest,"check")) {
           $this->itemQueryRequest->check();
       }        
    }
}
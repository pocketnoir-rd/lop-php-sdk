<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ閿�鍞钩鍙版潵婧�
*/
class ClpsQuerySpSourceLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鏉′欢
    */
    private $spSourceRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setSpSourceRequest($spSourceRequest){
        $this->spSourceRequest=$spSourceRequest;
    }

    public function getSpSourceRequest(){
         return $this->spSourceRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.querySpSource";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->spSourceRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->spSourceRequest,"spSourceRequest");

       RequestCheckUtil::checkObject($this->spSourceRequest,"spSourceRequest");
       if(isset($this->spSourceRequest) && method_exists($this->spSourceRequest,"check")) {
           $this->spSourceRequest->check();
       }        
    }
}
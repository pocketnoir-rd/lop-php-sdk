<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ閫�璐у叆搴撳崟
*/
class ClpsQueryRtwLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ閫�璐у叆搴撴潯浠�
    */
    private $queryRtwOrderRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryRtwOrderRequest($queryRtwOrderRequest){
        $this->queryRtwOrderRequest=$queryRtwOrderRequest;
    }

    public function getQueryRtwOrderRequest(){
         return $this->queryRtwOrderRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryRtw";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryRtwOrderRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryRtwOrderRequest,"queryRtwOrderRequest");

       RequestCheckUtil::checkObject($this->queryRtwOrderRequest,"queryRtwOrderRequest");
       if(isset($this->queryRtwOrderRequest) && method_exists($this->queryRtwOrderRequest,"check")) {
           $this->queryRtwOrderRequest->check();
       }        
    }
}
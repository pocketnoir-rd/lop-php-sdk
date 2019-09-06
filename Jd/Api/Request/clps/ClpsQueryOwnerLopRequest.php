<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ骞冲彴浜嬩笟閮ㄤ俊鎭�
*/
class ClpsQueryOwnerLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ浜嬩笟閮ㄦ潯浠�
    */
    private $queryOwnerRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryOwnerRequest($queryOwnerRequest){
        $this->queryOwnerRequest=$queryOwnerRequest;
    }

    public function getQueryOwnerRequest(){
         return $this->queryOwnerRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryOwner";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryOwnerRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryOwnerRequest,"queryOwnerRequest");

       RequestCheckUtil::checkObject($this->queryOwnerRequest,"queryOwnerRequest");
       if(isset($this->queryOwnerRequest) && method_exists($this->queryOwnerRequest,"check")) {
           $this->queryOwnerRequest->check();
       }        
    }
}
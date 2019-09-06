<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ渚涘簲鍟嗕俊鎭�
*/
class ClpsQuerySupplierLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鏉′欢
    */
    private $querySupplierRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQuerySupplierRequest($querySupplierRequest){
        $this->querySupplierRequest=$querySupplierRequest;
    }

    public function getQuerySupplierRequest(){
         return $this->querySupplierRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.querySupplier";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->querySupplierRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->querySupplierRequest,"querySupplierRequest");

       RequestCheckUtil::checkObject($this->querySupplierRequest,"querySupplierRequest");
       if(isset($this->querySupplierRequest) && method_exists($this->querySupplierRequest,"check")) {
           $this->querySupplierRequest->check();
       }        
    }
}
<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ鐩樼偣(鐩樼泩銆佺洏浜�)鍗曚俊鎭�
*/
class ClpsQueryCheckStockLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鐩樼偣鍗曞弬鏁�
    */
    private $checkStockRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setCheckStockRequest($checkStockRequest){
        $this->checkStockRequest=$checkStockRequest;
    }

    public function getCheckStockRequest(){
         return $this->checkStockRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryCheckStock";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->checkStockRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->checkStockRequest,"checkStockRequest");
       if(isset($this->checkStockRequest) && method_exists($this->checkStockRequest,"check")) {
           $this->checkStockRequest->check();
       }        
    }
}
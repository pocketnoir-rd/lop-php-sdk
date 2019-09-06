<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ鍏ュ簱璁㈠崟淇℃伅
*/
class ClpsQueryPoOrderLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 閲囪喘鍏ュ簱鍗曟煡璇㈠弬鏁�
    */
    private $poQueryRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setPoQueryRequest($poQueryRequest){
        $this->poQueryRequest=$poQueryRequest;
    }

    public function getPoQueryRequest(){
         return $this->poQueryRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryPoOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->poQueryRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->poQueryRequest,"poQueryRequest");
       if(isset($this->poQueryRequest) && method_exists($this->poQueryRequest,"check")) {
           $this->poQueryRequest->check();
       }        
    }
}
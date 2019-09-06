<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍒涘缓鍏ュ簱璁㈠崟
*/
class ClpsAddPoOrderLopRequest {
   /**
    * 浜笢鎺堟潈鐮�
    */
    private $pin;
   /**
    * 娣诲姞鍏ュ簱鍗曞弬鏁�
    */
    private $poAddRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setPoAddRequest($poAddRequest){
        $this->poAddRequest=$poAddRequest;
    }

    public function getPoAddRequest(){
         return $this->poAddRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.addPoOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->poAddRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->poAddRequest,"poAddRequest");
       if(isset($this->poAddRequest) && method_exists($this->poAddRequest,"check")) {
           $this->poAddRequest->check();
       }        
    }
}
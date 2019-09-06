<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍚戝钩鍙板悓姝ュ鎴蜂俊鎭�
*/
class ClpsTransportCustomerInfoLopRequest {
   /**
    * ISV鎺堟潈鐮�,varchar(30)
    */
    private $pin;
   /**
    * 瀹㈡埛涓嬪彂鍙傛暟
    */
    private $customerRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setCustomerRequest($customerRequest){
        $this->customerRequest=$customerRequest;
    }

    public function getCustomerRequest(){
         return $this->customerRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.transportCustomerInfo";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->customerRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->customerRequest,"customerRequest");

       RequestCheckUtil::checkObject($this->customerRequest,"customerRequest");
       if(isset($this->customerRequest) && method_exists($this->customerRequest,"check")) {
           $this->customerRequest->check();
       }        
    }
}
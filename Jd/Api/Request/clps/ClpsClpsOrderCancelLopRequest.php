<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍙栨秷璁㈠崟鎺ュ彛
*/
class ClpsClpsOrderCancelLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鍙栨秷鍙傛暟
    */
    private $orderCancelRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setOrderCancelRequest($orderCancelRequest){
        $this->orderCancelRequest=$orderCancelRequest;
    }

    public function getOrderCancelRequest(){
         return $this->orderCancelRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.clpsOrderCancel";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->orderCancelRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");

       RequestCheckUtil::checkObject($this->orderCancelRequest,"orderCancelRequest");
       if(isset($this->orderCancelRequest) && method_exists($this->orderCancelRequest,"check")) {
           $this->orderCancelRequest->check();
       }        
    }
}
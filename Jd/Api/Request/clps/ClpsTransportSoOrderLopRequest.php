<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍒涘缓鍙戣揣璁㈠崟
*/
class ClpsTransportSoOrderLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鍙戣揣鍗曡姹傚唴瀹�
    */
    private $request;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setRequest($request){
        $this->request=$request;
    }

    public function getRequest(){
         return $this->request;
    }


    public function getApiMethodName(){
        return "jingdong.clps.transportSoOrder";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->request;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->request,"request");

       RequestCheckUtil::checkObject($this->request,"request");
       if(isset($this->request) && method_exists($this->request,"check")) {
           $this->request->check();
       }        
    }
}
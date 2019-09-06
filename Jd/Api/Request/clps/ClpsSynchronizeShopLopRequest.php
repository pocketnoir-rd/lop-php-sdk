<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍚戝钩鍙板悓姝ュ簵閾轰俊鎭�
*/
class ClpsSynchronizeShopLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鍚屾搴楅摵淇℃伅鍏ュ弬
    */
    private $shopIn;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setShopIn($shopIn){
        $this->shopIn=$shopIn;
    }

    public function getShopIn(){
         return $this->shopIn;
    }


    public function getApiMethodName(){
        return "jingdong.clps.synchronizeShop";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->shopIn;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->shopIn,"shopIn");

       RequestCheckUtil::checkObject($this->shopIn,"shopIn");
       if(isset($this->shopIn) && method_exists($this->shopIn,"check")) {
           $this->shopIn->check();
       }        
    }
}
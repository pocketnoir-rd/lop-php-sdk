<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ搴撴埧淇℃伅
*/
class ClpsQueryWarehouseLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鏉′欢
    */
    private $warehouseParam;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setWarehouseParam($warehouseParam){
        $this->warehouseParam=$warehouseParam;
    }

    public function getWarehouseParam(){
         return $this->warehouseParam;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryWarehouse";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->warehouseParam;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->warehouseParam,"warehouseParam");

       RequestCheckUtil::checkObject($this->warehouseParam,"warehouseParam");
       if(isset($this->warehouseParam) && method_exists($this->warehouseParam,"check")) {
           $this->warehouseParam->check();
       }        
    }
}
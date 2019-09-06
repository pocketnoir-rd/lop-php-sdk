<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍚戝钩鍙板悓姝ヤ緵搴斿晢淇℃伅
*/
class ClpsSynchronizeSupplierLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鍚屾渚涘簲鍟嗕俊鎭�
    */
    private $supplierModel;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setSupplierModel($supplierModel){
        $this->supplierModel=$supplierModel;
    }

    public function getSupplierModel(){
         return $this->supplierModel;
    }


    public function getApiMethodName(){
        return "jingdong.clps.synchronizeSupplier";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->supplierModel;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->supplierModel,"supplierModel");

       RequestCheckUtil::checkObject($this->supplierModel,"supplierModel");
       if(isset($this->supplierModel) && method_exists($this->supplierModel,"check")) {
           $this->supplierModel->check();
       }        
    }
}
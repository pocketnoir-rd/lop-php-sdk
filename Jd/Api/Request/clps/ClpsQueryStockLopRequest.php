<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ浠撳簱搴撳瓨淇℃伅
*/
class ClpsQueryStockLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 搴撳瓨鏌ヨ瀹炰綋
    */
    private $queryWarehouseStockRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryWarehouseStockRequest($queryWarehouseStockRequest){
        $this->queryWarehouseStockRequest=$queryWarehouseStockRequest;
    }

    public function getQueryWarehouseStockRequest(){
         return $this->queryWarehouseStockRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.queryStock";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryWarehouseStockRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryWarehouseStockRequest,"queryWarehouseStockRequest");

       RequestCheckUtil::checkObject($this->queryWarehouseStockRequest,"queryWarehouseStockRequest");
       if(isset($this->queryWarehouseStockRequest) && method_exists($this->queryWarehouseStockRequest,"check")) {
           $this->queryWarehouseStockRequest->check();
       }        
    }
}
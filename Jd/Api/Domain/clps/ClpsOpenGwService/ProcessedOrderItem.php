<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProcessedOrderItem implements JsonSerializable {

    /**
     * CLPS鍘熸枡鍟嗗搧缂栧彿(itemId銆乮temCode浜岄�変竴)
     */
    private $itemId;
    /**
     * ISV鍘熸枡鍟嗗搧缂栧彿
     */
    private $itemCode;
    /**
     * 鍔犲伐搴撳瓨璁￠噺鍗曚綅(0锛氫欢锛�1锛氬厠锛�2锛氱背锛�3锛氬崈鍏�)
     */
    private $itemUnit;
    /**
     * 鍔犲伐姣斾緥鏁伴噺(鏃犲姞宸ュ叕寮忔椂蹇呭～,鏁存暟)
     */
    private $itemRatio;
    /**
     * 璁″垝鍘熸枡棰嗘枡鏁伴噺(鍙负灏忔暟)
     */
    private $planQty;

    public function setItemId($itemId){
       $this->itemId = $itemId;
    }
    
    public function getItemId(){
       return $this->itemId;
    }
    public function setItemCode($itemCode){
       $this->itemCode = $itemCode;
    }
    
    public function getItemCode(){
       return $this->itemCode;
    }
    public function setItemUnit($itemUnit){
       $this->itemUnit = $itemUnit;
    }
    
    public function getItemUnit(){
       return $this->itemUnit;
    }
    public function setItemRatio($itemRatio){
       $this->itemRatio = $itemRatio;
    }
    
    public function getItemRatio(){
       return $this->itemRatio;
    }
    public function setPlanQty($planQty){
       $this->planQty = $planQty;
    }
    
    public function getPlanQty(){
       return $this->planQty;
    }

    public function jsonSerialize() {
        return [
            'itemId' => $this->itemId,             
            'itemCode' => $this->itemCode,             
            'itemUnit' => $this->itemUnit,             
            'itemRatio' => $this->itemRatio,             
            'planQty' => $this->planQty             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->itemId,"itemId");

       RequestCheckUtil::checkString($this->itemId,"itemId");
        RequestCheckUtil::checkNotNull($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemUnit,"itemUnit");

       RequestCheckUtil::checkString($this->itemRatio,"itemRatio");
        RequestCheckUtil::checkNotNull($this->planQty,"planQty");

       RequestCheckUtil::checkString($this->planQty,"planQty");
    }
}
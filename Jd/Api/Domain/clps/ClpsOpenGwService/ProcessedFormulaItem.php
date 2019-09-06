<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProcessedFormulaItem implements JsonSerializable {

    /**
     * CLPS鍘熸枡鍟嗗搧缂栫爜(itemId銆乮temCode浜岄�変竴)
     */
    private $itemId;
    /**
     * ISV鍘熸枡鍟嗗搧缂栫爜
     */
    private $itemCode;
    /**
     * 鍘熸枡鍔犲伐姣斾緥鏁伴噺
     */
    private $itemRatio;
    /**
     * 鍔犲伐搴撳瓨璁￠噺鍗曚綅锛堜粎鏀寔鏈�灏忓崟浣嶏級(0锛氫欢锛�1锛氬厠锛�2锛氱背锛�3锛氬崈鍏�)
     */
    private $itemUnit;

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
    public function setItemRatio($itemRatio){
       $this->itemRatio = $itemRatio;
    }
    
    public function getItemRatio(){
       return $this->itemRatio;
    }
    public function setItemUnit($itemUnit){
       $this->itemUnit = $itemUnit;
    }
    
    public function getItemUnit(){
       return $this->itemUnit;
    }

    public function jsonSerialize() {
        return [
            'itemId' => $this->itemId,             
            'itemCode' => $this->itemCode,             
            'itemRatio' => $this->itemRatio,             
            'itemUnit' => $this->itemUnit             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->itemId,"itemId");

       RequestCheckUtil::checkString($this->itemCode,"itemCode");
        RequestCheckUtil::checkNotNull($this->itemRatio,"itemRatio");

       RequestCheckUtil::checkString($this->itemRatio,"itemRatio");

       RequestCheckUtil::checkNumeric($this->itemUnit,"itemUnit");
    }
}
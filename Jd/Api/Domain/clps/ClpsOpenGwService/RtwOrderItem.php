<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class RtwOrderItem implements JsonSerializable {

    /**
     * ERP鍟嗗搧缂栫爜锛堜簩閫変竴锛�
     */
    private $itemCode;
    /**
     * CLPS鍟嗗搧缂栫爜锛堜簩閫変竴锛�
     */
    private $itemId;
    /**
     * 鍟嗗搧鐘舵�� 1鑹搧2娈嬪搧
     */
    private $itemStatus;
    /**
     * 鏁伴噺(鏁存暟)
     */
    private $itemQty;
    /**
     * 鏁伴噺(娴偣)
     */
    private $itemOutQty;
    /**
     * 鎵规鍙�(鏃犱笟鍔�)
     */
    private $batchCode;

    public function setItemCode($itemCode){
       $this->itemCode = $itemCode;
    }
    
    public function getItemCode(){
       return $this->itemCode;
    }
    public function setItemId($itemId){
       $this->itemId = $itemId;
    }
    
    public function getItemId(){
       return $this->itemId;
    }
    public function setItemStatus($itemStatus){
       $this->itemStatus = $itemStatus;
    }
    
    public function getItemStatus(){
       return $this->itemStatus;
    }
    public function setItemQty($itemQty){
       $this->itemQty = $itemQty;
    }
    
    public function getItemQty(){
       return $this->itemQty;
    }
    public function setItemOutQty($itemOutQty){
       $this->itemOutQty = $itemOutQty;
    }
    
    public function getItemOutQty(){
       return $this->itemOutQty;
    }
    public function setBatchCode($batchCode){
       $this->batchCode = $batchCode;
    }
    
    public function getBatchCode(){
       return $this->batchCode;
    }

    public function jsonSerialize() {
        return [
            'itemCode' => $this->itemCode,             
            'itemId' => $this->itemId,             
            'itemStatus' => $this->itemStatus,             
            'itemQty' => $this->itemQty,             
            'itemOutQty' => $this->itemOutQty,             
            'batchCode' => $this->batchCode             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemId,"itemId");
        RequestCheckUtil::checkNotNull($this->itemStatus,"itemStatus");

       RequestCheckUtil::checkObject($this->itemStatus,"itemStatus");
       if(isset($this->itemStatus) && method_exists($this->itemStatus,"check")) {
           $this->itemStatus->check();
       }        
        RequestCheckUtil::checkNotNull($this->itemQty,"itemQty");

       RequestCheckUtil::checkNumeric($this->itemQty,"itemQty");
        RequestCheckUtil::checkNotNull($this->itemOutQty,"itemOutQty");

       RequestCheckUtil::checkString($this->itemOutQty,"itemOutQty");

       RequestCheckUtil::checkString($this->batchCode,"batchCode");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class RtsOrderItem implements JsonSerializable {

    /**
     * ERP鍟嗗搧缂栫爜,浜岄�変竴
     */
    private $itemCode;
    /**
     * CLPS鍟嗗搧缂栫爜,浜岄�変竴
     */
    private $itemId;
    /**
     * 閫�渚涙槑缁嗘暟閲忥紙鏁存暟锛�
     */
    private $itemQty;
    /**
     * 閫�渚涙槑缁嗘暟閲�(娴偣)
     */
    private $itemOutQty;

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

    public function jsonSerialize() {
        return [
            'itemCode' => $this->itemCode,             
            'itemId' => $this->itemId,             
            'itemQty' => $this->itemQty,             
            'itemOutQty' => $this->itemOutQty             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemId,"itemId");
        RequestCheckUtil::checkNotNull($this->itemQty,"itemQty");

       RequestCheckUtil::checkNumeric($this->itemQty,"itemQty");
        RequestCheckUtil::checkNotNull($this->itemOutQty,"itemOutQty");

       RequestCheckUtil::checkString($this->itemOutQty,"itemOutQty");
    }
}
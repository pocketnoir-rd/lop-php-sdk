<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class CheckStockRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerCode;
    /**
     * 搴撴埧缂栫爜
     */
    private $warehouseCode;
    /**
     * ERP鐩樼偣鍗曠紪鐮�
     */
    private $checkOrderCode;
    /**
     * CLPS鐩樼偣鍗曠紪鐮�
     */
    private $checkOrderId;
    /**
     * 褰撳墠椤碉紝浠�1寮�濮嬶紝蹇呭～
     */
    private $pageNo;
    /**
     * 姣忛〉orderLine鏉℃暟锛堟渶澶�50鏉★級锛屽繀濉�
     */
    private $pageSize;

    public function setOwnerCode($ownerCode){
       $this->ownerCode = $ownerCode;
    }
    
    public function getOwnerCode(){
       return $this->ownerCode;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setCheckOrderCode($checkOrderCode){
       $this->checkOrderCode = $checkOrderCode;
    }
    
    public function getCheckOrderCode(){
       return $this->checkOrderCode;
    }
    public function setCheckOrderId($checkOrderId){
       $this->checkOrderId = $checkOrderId;
    }
    
    public function getCheckOrderId(){
       return $this->checkOrderId;
    }
    public function setPageNo($pageNo){
       $this->pageNo = $pageNo;
    }
    
    public function getPageNo(){
       return $this->pageNo;
    }
    public function setPageSize($pageSize){
       $this->pageSize = $pageSize;
    }
    
    public function getPageSize(){
       return $this->pageSize;
    }

    public function jsonSerialize() {
        return [
            'ownerCode' => $this->ownerCode,             
            'warehouseCode' => $this->warehouseCode,             
            'checkOrderCode' => $this->checkOrderCode,             
            'checkOrderId' => $this->checkOrderId,             
            'pageNo' => $this->pageNo,             
            'pageSize' => $this->pageSize             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->checkOrderCode,"checkOrderCode");

       RequestCheckUtil::checkString($this->checkOrderId,"checkOrderId");

       RequestCheckUtil::checkNumeric($this->pageNo,"pageNo");

       RequestCheckUtil::checkNumeric($this->pageSize,"pageSize");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SoQueryRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerCode;
    /**
     * 搴撴埧缂栫爜
     */
    private $warehouseCode;
    /**
     * ERP鍑哄簱鍗曞彿(CLPS鍑哄簱鍗曞彿涓虹┖鏃跺繀濉�)
     */
    private $orderCode;
    /**
     * CLPS鍑哄簱鍗曞彿(ERP鍑哄簱鍗曞彿涓虹┖鏃跺繀濉�)
     */
    private $orderId;
    /**
     * 閿�鍞钩鍙拌鍗曠紪鍙�(鏀寔鏌ヨ浜笢pop鐨勫崟鎹�)
     */
    private $orderSourceCode;
    /**
     * 褰撳墠椤�(鏈惎鐢�)
     */
    private $page;
    /**
     * 姣忛〉orderLine鏉℃暟(鏈惎鐢�)
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
    public function setOrderCode($orderCode){
       $this->orderCode = $orderCode;
    }
    
    public function getOrderCode(){
       return $this->orderCode;
    }
    public function setOrderId($orderId){
       $this->orderId = $orderId;
    }
    
    public function getOrderId(){
       return $this->orderId;
    }
    public function setOrderSourceCode($orderSourceCode){
       $this->orderSourceCode = $orderSourceCode;
    }
    
    public function getOrderSourceCode(){
       return $this->orderSourceCode;
    }
    public function setPage($page){
       $this->page = $page;
    }
    
    public function getPage(){
       return $this->page;
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
            'orderCode' => $this->orderCode,             
            'orderId' => $this->orderId,             
            'orderSourceCode' => $this->orderSourceCode,             
            'page' => $this->page,             
            'pageSize' => $this->pageSize             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->orderCode,"orderCode");

       RequestCheckUtil::checkString($this->orderId,"orderId");

       RequestCheckUtil::checkString($this->orderSourceCode,"orderSourceCode");

       RequestCheckUtil::checkNumeric($this->page,"page");

       RequestCheckUtil::checkNumeric($this->pageSize,"pageSize");
    }
}
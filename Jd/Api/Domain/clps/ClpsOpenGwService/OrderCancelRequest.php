<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class OrderCancelRequest implements JsonSerializable {

    /**
     * 搴撴埧缂栫爜
     */
    private $warehouseCode;
    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerCode;
    /**
     * ERP璁㈠崟缂栫爜(CLPS 璁㈠崟缂栫爜涓虹┖鏃跺繀濉�)
     */
    private $orderCode;
    /**
     * CLPS璁㈠崟缂栫爜(ERP 璁㈠崟缂栫爜涓虹┖鏃跺繀濉�)
     */
    private $orderId;
    /**
     * 璁㈠崟绫诲瀷
     */
    private $orderType;
    /**
     * 鍙栨秷鍘熷洜
     */
    private $cancelReason;

    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setOwnerCode($ownerCode){
       $this->ownerCode = $ownerCode;
    }
    
    public function getOwnerCode(){
       return $this->ownerCode;
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
    public function setOrderType($orderType){
       $this->orderType = $orderType;
    }
    
    public function getOrderType(){
       return $this->orderType;
    }
    public function setCancelReason($cancelReason){
       $this->cancelReason = $cancelReason;
    }
    
    public function getCancelReason(){
       return $this->cancelReason;
    }

    public function jsonSerialize() {
        return [
            'warehouseCode' => $this->warehouseCode,             
            'ownerCode' => $this->ownerCode,             
            'orderCode' => $this->orderCode,             
            'orderId' => $this->orderId,             
            'orderType' => $this->orderType,             
            'cancelReason' => $this->cancelReason             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->orderCode,"orderCode");

       RequestCheckUtil::checkString($this->orderId,"orderId");
        RequestCheckUtil::checkNotNull($this->orderType,"orderType");

       RequestCheckUtil::checkString($this->orderType,"orderType");

       RequestCheckUtil::checkString($this->cancelReason,"cancelReason");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SingleItemRequest implements JsonSerializable {

    /**
     * actionType
     */
    private $actionType;
    /**
     * 浠撳簱缂栫爜锛宻tring (50)
     */
    private $warehouseCode;
    /**
     * 浜嬩笟閮ㄧ紪鐮侊紝string (50)
     */
    private $ownerCode;
    /**
     * 鍟嗗搧瀵硅薄
     */
    private $item;

    public function setActionType($actionType){
       $this->actionType = $actionType;
    }
    
    public function getActionType(){
       return $this->actionType;
    }
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
    public function setItem($item){
       $this->item = $item;
    }
    
    public function getItem(){
       return $this->item;
    }

    public function jsonSerialize() {
        return [
            'actionType' => $this->actionType,             
            'warehouseCode' => $this->warehouseCode,             
            'ownerCode' => $this->ownerCode,             
            'item' => $this->item             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");
        RequestCheckUtil::checkNotNull($this->item,"item");

       RequestCheckUtil::checkObject($this->item,"item");
       if(isset($this->item) && method_exists($this->item,"check")) {
           $this->item->check();
       }        
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryWarehouseRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮佸繀濉紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶达紱姣忔鍙兘鏌ヨ涓�涓簨涓氶儴鐨勪粨搴撲俊鎭�
     */
    private $ownerNo;
    /**
     * 搴撴埧缂栫爜锛屽涓�楀彿鍒嗛殧
     */
    private $warehouseNos;
    /**
     * 搴撴埧鐘舵�侊紝澶氫釜閫楀彿鍒嗛殧
     */
    private $status;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setWarehouseNos($warehouseNos){
       $this->warehouseNos = $warehouseNos;
    }
    
    public function getWarehouseNos(){
       return $this->warehouseNos;
    }
    public function setStatus($status){
       $this->status = $status;
    }
    
    public function getStatus(){
       return $this->status;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'warehouseNos' => $this->warehouseNos,             
            'status' => $this->status             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->warehouseNos,"warehouseNos");

       RequestCheckUtil::checkString($this->status,"status");
    }
}
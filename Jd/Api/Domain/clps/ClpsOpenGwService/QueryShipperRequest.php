<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryShipperRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮佸繀濉紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶�
     */
    private $ownerNo;
    /**
     * CLPS鎵胯繍鍟嗙紪鐮侊紝澶氫釜鐢ㄨ嫳鏂囬�楀彿鍒嗛殧
     */
    private $shipperNos;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setShipperNos($shipperNos){
       $this->shipperNos = $shipperNos;
    }
    
    public function getShipperNos(){
       return $this->shipperNos;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'shipperNos' => $this->shipperNos             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->shipperNos,"shipperNos");
    }
}
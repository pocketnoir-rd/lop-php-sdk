<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryOwnerRequest implements JsonSerializable {

    /**
     * CLPS浜嬩笟閮ㄧ紪鐮侊紝澶氫釜鐢ㄨ嫳鏂囬�楀彿鍒嗛殧
     */
    private $ownerNos;

    public function setOwnerNos($ownerNos){
       $this->ownerNos = $ownerNos;
    }
    
    public function getOwnerNos(){
       return $this->ownerNos;
    }

    public function jsonSerialize() {
        return [
            'ownerNos' => $this->ownerNos             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNos,"ownerNos");

       RequestCheckUtil::checkString($this->ownerNos,"ownerNos");
    }
}
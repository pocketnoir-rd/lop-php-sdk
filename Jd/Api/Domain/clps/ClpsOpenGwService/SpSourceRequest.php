<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SpSourceRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮佸繀濉紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶�
     */
    private $ownerNo;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
    }
}
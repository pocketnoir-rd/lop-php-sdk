<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryRtsOrderRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerNo;
    /**
     * CLPS閫�渚涘簲鍟嗚鍗曞彿锛屽涓敤鑻辨枃閫楀彿鍒嗛殧,鏈�澶氭敮鎸�1000
     */
    private $rtsOrderNos;
    /**
     * ERP閫�渚涘簲鍟嗚鍗曞彿锛屽涓敤鑻辨枃閫楀彿鍒嗛殧,鏈惎鐢�
     */
    private $isvRtsOrderNos;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setRtsOrderNos($rtsOrderNos){
       $this->rtsOrderNos = $rtsOrderNos;
    }
    
    public function getRtsOrderNos(){
       return $this->rtsOrderNos;
    }
    public function setIsvRtsOrderNos($isvRtsOrderNos){
       $this->isvRtsOrderNos = $isvRtsOrderNos;
    }
    
    public function getIsvRtsOrderNos(){
       return $this->isvRtsOrderNos;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'rtsOrderNos' => $this->rtsOrderNos,             
            'isvRtsOrderNos' => $this->isvRtsOrderNos             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
        RequestCheckUtil::checkNotNull($this->rtsOrderNos,"rtsOrderNos");

       RequestCheckUtil::checkString($this->rtsOrderNos,"rtsOrderNos");

       RequestCheckUtil::checkString($this->isvRtsOrderNos,"isvRtsOrderNos");
    }
}
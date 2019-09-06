<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryShopRequest implements JsonSerializable {

    /**
     * CLPS搴楅摵缂栫爜锛屽涓敤鑻辨枃閫楀彿鍒嗛殧
     */
    private $shopNos;
    /**
     * ISV搴楅摵缂栫爜锛屽涓敤鑻辨枃閫楀彿鍒嗛殧
     */
    private $isvShopNos;
    /**
     * 浜嬩笟閮ㄧ紪鐮佸繀濉紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶达紱姣忔鍙兘鏌ヨ涓�涓簨涓氶儴
     */
    private $ownerNo;

    public function setShopNos($shopNos){
       $this->shopNos = $shopNos;
    }
    
    public function getShopNos(){
       return $this->shopNos;
    }
    public function setIsvShopNos($isvShopNos){
       $this->isvShopNos = $isvShopNos;
    }
    
    public function getIsvShopNos(){
       return $this->isvShopNos;
    }
    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }

    public function jsonSerialize() {
        return [
            'shopNos' => $this->shopNos,             
            'isvShopNos' => $this->isvShopNos,             
            'ownerNo' => $this->ownerNo             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->shopNos,"shopNos");

       RequestCheckUtil::checkString($this->isvShopNos,"isvShopNos");
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryRtwOrderRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerNo;
    /**
     * CLPS鍑哄簱鍗曠紪鐮�(闇�瑕侀��鐨勫嚭搴撳崟锛屽涓敤鑻辨枃閫楀彿鍒嗛殧)锛岃鍗曠被鍨嬩负B2C鏃讹紝CLPS鍑哄簱鍗曠紪鐮佸拰閫�璐у叆搴撹鍗曞彿鑷冲皯濉竴涓�
     */
    private $clpsOrderCodes;
    /**
     * 閫�璐у叆搴撹鍗曞彿锛堝涓嫳鏂囬�楀彿鍒嗛殧锛夛紝璁㈠崟绫诲瀷涓築2C鏃讹紝CLPS鍑哄簱鍗曠紪鐮佸拰閫�璐у叆搴撹鍗曞彿鑷冲皯濉竴涓�
     */
    private $clpsRtwOrderCodes;
    /**
     * 澶栭儴閫�璐у叆搴撳崟缂栫爜锛屾潯浠跺繀濉紝璁㈠崟绫诲瀷涓築2B鏃禼lpsRtwOrderCodes鏃跺繀濉�
     */
    private $isvRtwOrderCodes;
    /**
     * 璁㈠崟绫诲瀷 1锛欱2C 2锛欱2B
     */
    private $bizType;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setClpsOrderCodes($clpsOrderCodes){
       $this->clpsOrderCodes = $clpsOrderCodes;
    }
    
    public function getClpsOrderCodes(){
       return $this->clpsOrderCodes;
    }
    public function setClpsRtwOrderCodes($clpsRtwOrderCodes){
       $this->clpsRtwOrderCodes = $clpsRtwOrderCodes;
    }
    
    public function getClpsRtwOrderCodes(){
       return $this->clpsRtwOrderCodes;
    }
    public function setIsvRtwOrderCodes($isvRtwOrderCodes){
       $this->isvRtwOrderCodes = $isvRtwOrderCodes;
    }
    
    public function getIsvRtwOrderCodes(){
       return $this->isvRtwOrderCodes;
    }
    public function setBizType($bizType){
       $this->bizType = $bizType;
    }
    
    public function getBizType(){
       return $this->bizType;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'clpsOrderCodes' => $this->clpsOrderCodes,             
            'clpsRtwOrderCodes' => $this->clpsRtwOrderCodes,             
            'isvRtwOrderCodes' => $this->isvRtwOrderCodes,             
            'bizType' => $this->bizType             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->clpsOrderCodes,"clpsOrderCodes");

       RequestCheckUtil::checkString($this->clpsRtwOrderCodes,"clpsRtwOrderCodes");

       RequestCheckUtil::checkString($this->isvRtwOrderCodes,"isvRtwOrderCodes");
        RequestCheckUtil::checkNotNull($this->bizType,"bizType");

       RequestCheckUtil::checkObject($this->bizType,"bizType");
       if(isset($this->bizType) && method_exists($this->bizType,"check")) {
           $this->bizType->check();
       }        
    }
}
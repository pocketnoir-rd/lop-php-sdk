<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProcessedOrder implements JsonSerializable {

    /**
     * ISV鍔犲伐鍗曞崟鍙�
     */
    private $processedCode;
    /**
     * 浜嬩笟閮ㄧ紪鍙�
     */
    private $ownerNo;
    /**
     * 浠撳簱缂栧彿
     */
    private $warehouseCode;
    /**
     * CLPS缁勮鍏紡缂栧彿锛坒ormulaId銆乫ormulaCode銆乬oodsId銆乬oodsCode鍥涢�変竴锛�
     */
    private $formulaId;
    /**
     * ISV缁勮鍏紡缂栧彿
     */
    private $formulaCode;
    /**
     * CLPS濂楄鍟嗗搧缂栧彿
     */
    private $goodsId;
    /**
     * ISV濂楄鍟嗗搧缂栧彿
     */
    private $goodsCode;
    /**
     * 璁″垝缁勮/鎷嗗垎濂楄鏁伴噺
     */
    private $mixPlanQty;
    /**
     * 鍔犲伐绫诲瀷锛�1锛氱粍鍚堬紱2锛氭媶鍒嗭級
     */
    private $processedType;

    public function setProcessedCode($processedCode){
       $this->processedCode = $processedCode;
    }
    
    public function getProcessedCode(){
       return $this->processedCode;
    }
    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setFormulaId($formulaId){
       $this->formulaId = $formulaId;
    }
    
    public function getFormulaId(){
       return $this->formulaId;
    }
    public function setFormulaCode($formulaCode){
       $this->formulaCode = $formulaCode;
    }
    
    public function getFormulaCode(){
       return $this->formulaCode;
    }
    public function setGoodsId($goodsId){
       $this->goodsId = $goodsId;
    }
    
    public function getGoodsId(){
       return $this->goodsId;
    }
    public function setGoodsCode($goodsCode){
       $this->goodsCode = $goodsCode;
    }
    
    public function getGoodsCode(){
       return $this->goodsCode;
    }
    public function setMixPlanQty($mixPlanQty){
       $this->mixPlanQty = $mixPlanQty;
    }
    
    public function getMixPlanQty(){
       return $this->mixPlanQty;
    }
    public function setProcessedType($processedType){
       $this->processedType = $processedType;
    }
    
    public function getProcessedType(){
       return $this->processedType;
    }

    public function jsonSerialize() {
        return [
            'processedCode' => $this->processedCode,             
            'ownerNo' => $this->ownerNo,             
            'warehouseCode' => $this->warehouseCode,             
            'formulaId' => $this->formulaId,             
            'formulaCode' => $this->formulaCode,             
            'goodsId' => $this->goodsId,             
            'goodsCode' => $this->goodsCode,             
            'mixPlanQty' => $this->mixPlanQty,             
            'processedType' => $this->processedType             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->processedCode,"processedCode");

       RequestCheckUtil::checkString($this->processedCode,"processedCode");
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
        RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->formulaId,"formulaId");

       RequestCheckUtil::checkString($this->formulaCode,"formulaCode");

       RequestCheckUtil::checkString($this->goodsId,"goodsId");

       RequestCheckUtil::checkString($this->goodsCode,"goodsCode");
        RequestCheckUtil::checkNotNull($this->mixPlanQty,"mixPlanQty");

       RequestCheckUtil::checkString($this->mixPlanQty,"mixPlanQty");
        RequestCheckUtil::checkNotNull($this->processedType,"processedType");

       RequestCheckUtil::checkString($this->processedType,"processedType");
    }
}
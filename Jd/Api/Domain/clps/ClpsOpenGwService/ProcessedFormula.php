<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProcessedFormula implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鍙�
     */
    private $ownerNo;
    /**
     * ISV鍔犲伐鍏紡缂栧彿
     */
    private $formulaCode;
    /**
     * CLPS濂楄鍟嗗搧缂栧彿锛坓oodsId銆乬oodsCode浜岄�変竴锛�
     */
    private $goodsId;
    /**
     * ISV濂楄鍟嗗搧缂栧彿
     */
    private $goodsCode;
    /**
     * 鍔犲伐鍏紡鍚嶇О
     */
    private $formulaName;
    /**
     * 鍔犲伐鍏紡鍘熸枡淇℃伅
     */
    private $processedFormulaItems;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
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
    public function setFormulaName($formulaName){
       $this->formulaName = $formulaName;
    }
    
    public function getFormulaName(){
       return $this->formulaName;
    }
    public function setProcessedFormulaItems($processedFormulaItems){
       $this->processedFormulaItems = $processedFormulaItems;
    }
    
    public function getProcessedFormulaItems(){
       return $this->processedFormulaItems;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'formulaCode' => $this->formulaCode,             
            'goodsId' => $this->goodsId,             
            'goodsCode' => $this->goodsCode,             
            'formulaName' => $this->formulaName,             
            'processedFormulaItems' => $this->processedFormulaItems             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
        RequestCheckUtil::checkNotNull($this->formulaCode,"formulaCode");

       RequestCheckUtil::checkString($this->formulaCode,"formulaCode");

       RequestCheckUtil::checkString($this->goodsId,"goodsId");

       RequestCheckUtil::checkString($this->goodsCode,"goodsCode");
        RequestCheckUtil::checkNotNull($this->formulaName,"formulaName");

       RequestCheckUtil::checkString($this->formulaName,"formulaName");
        RequestCheckUtil::checkNotNull($this->processedFormulaItems,"processedFormulaItems");

       RequestCheckUtil::checkArray($this->processedFormulaItems,"processedFormulaItems");
       if(isset($this->processedFormulaItems)) {
           $arrlength=count($this->processedFormulaItems);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->processedFormulaItems[$index]) && method_exists($this->processedFormulaItems[$index],"check")) {
                   $this->processedFormulaItems[$index]->check();
               }
           }
       }
    }
}
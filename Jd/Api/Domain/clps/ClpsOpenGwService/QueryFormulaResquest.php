<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryFormulaResquest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鍙�
     */
    private $ownerNo;
    /**
     * CLPS鍔犲伐鍏紡缂栫爜(formulaId銆乫ormulaCode銆乬oodsId銆乬oodsCode鍥涢�変竴)
     */
    private $formulaId;
    /**
     * ISV鍔犲伐鍏紡缂栫爜
     */
    private $formulaCode;
    /**
     * CLPS濂楄鍟嗗搧缂栫爜
     */
    private $goodsId;
    /**
     * ISV濂楄鍟嗗搧缂栫爜
     */
    private $goodsCode;
    /**
     * CLPS鍘熸枡鍟嗗搧缂栫爜
     */
    private $itemId;
    /**
     * ISV鍘熸枡鍟嗗搧缂栫爜
     */
    private $itemCode;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
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
    public function setItemId($itemId){
       $this->itemId = $itemId;
    }
    
    public function getItemId(){
       return $this->itemId;
    }
    public function setItemCode($itemCode){
       $this->itemCode = $itemCode;
    }
    
    public function getItemCode(){
       return $this->itemCode;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'formulaId' => $this->formulaId,             
            'formulaCode' => $this->formulaCode,             
            'goodsId' => $this->goodsId,             
            'goodsCode' => $this->goodsCode,             
            'itemId' => $this->itemId,             
            'itemCode' => $this->itemCode             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->formulaId,"formulaId");

       RequestCheckUtil::checkString($this->formulaCode,"formulaCode");

       RequestCheckUtil::checkString($this->goodsId,"goodsId");

       RequestCheckUtil::checkString($this->goodsCode,"goodsCode");

       RequestCheckUtil::checkString($this->itemId,"itemId");

       RequestCheckUtil::checkString($this->itemCode,"itemCode");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProcessedQueryRequest implements JsonSerializable {

    /**
     * ISV鍔犲伐鍗曞崟鍙�(processedCode銆乸rocessedId浜岄�変竴)
     */
    private $processedCode;
    /**
     * CLPS鍔犲伐鍗曞崟鍙�
     */
    private $processedId;
    /**
     * 浜嬩笟閮ㄧ紪鍙�
     */
    private $ownerNo;
    /**
     * 浠撳簱缂栧彿
     */
    private $warehouseCode;
    /**
     * CLPS缁勮鏂规缂栧彿
     */
    private $formulaId;
    /**
     * ISV缁勮鏂规缂栧彿
     */
    private $formulaCode;

    public function setProcessedCode($processedCode){
       $this->processedCode = $processedCode;
    }
    
    public function getProcessedCode(){
       return $this->processedCode;
    }
    public function setProcessedId($processedId){
       $this->processedId = $processedId;
    }
    
    public function getProcessedId(){
       return $this->processedId;
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

    public function jsonSerialize() {
        return [
            'processedCode' => $this->processedCode,             
            'processedId' => $this->processedId,             
            'ownerNo' => $this->ownerNo,             
            'warehouseCode' => $this->warehouseCode,             
            'formulaId' => $this->formulaId,             
            'formulaCode' => $this->formulaCode             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->processedCode,"processedCode");

       RequestCheckUtil::checkString($this->processedId,"processedId");
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->formulaId,"formulaId");

       RequestCheckUtil::checkString($this->formulaCode,"formulaCode");
    }
}
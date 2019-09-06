<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鍒涘缓鍔犲伐鍏紡
*/
class ClpsTransProcessedFormulaLopRequest {
   /**
    * ISV鎺堟潈鐮� 
    */
    private $pin;
   /**
    * 鍔犲伐鍏紡
    */
    private $processedFormula;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setProcessedFormula($processedFormula){
        $this->processedFormula=$processedFormula;
    }

    public function getProcessedFormula(){
         return $this->processedFormula;
    }


    public function getApiMethodName(){
        return "jingdong.clps.transProcessedFormula";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->processedFormula;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->processedFormula,"processedFormula");

       RequestCheckUtil::checkObject($this->processedFormula,"processedFormula");
       if(isset($this->processedFormula) && method_exists($this->processedFormula,"check")) {
           $this->processedFormula->check();
       }        
    }
}
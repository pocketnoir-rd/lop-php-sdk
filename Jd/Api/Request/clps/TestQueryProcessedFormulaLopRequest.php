<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ鍔犲伐鍏紡
*/
class TestQueryProcessedFormulaLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鍙傛暟
    */
    private $queryFormulaResquest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryFormulaResquest($queryFormulaResquest){
        $this->queryFormulaResquest=$queryFormulaResquest;
    }

    public function getQueryFormulaResquest(){
         return $this->queryFormulaResquest;
    }


    public function getApiMethodName(){
        return "jingdong.test.queryProcessedFormula";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryFormulaResquest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryFormulaResquest,"queryFormulaResquest");

       RequestCheckUtil::checkObject($this->queryFormulaResquest,"queryFormulaResquest");
       if(isset($this->queryFormulaResquest) && method_exists($this->queryFormulaResquest,"check")) {
           $this->queryFormulaResquest->check();
       }        
    }
}
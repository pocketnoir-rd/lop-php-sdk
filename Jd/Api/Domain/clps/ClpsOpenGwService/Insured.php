<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class Insured implements JsonSerializable {

    /**
     * 鏄惁淇濅环,0=鍚�,1=鏄�
     */
    private $insuredPriceFlag;
    /**
     * 淇濅环澹板悕浠峰��,double(14,2)
     */
    private $insuredValue;
    /**
     * 淇濅环璐圭敤,double(14,2)
     */
    private $insuredFee;

    public function setInsuredPriceFlag($insuredPriceFlag){
       $this->insuredPriceFlag = $insuredPriceFlag;
    }
    
    public function getInsuredPriceFlag(){
       return $this->insuredPriceFlag;
    }
    public function setInsuredValue($insuredValue){
       $this->insuredValue = $insuredValue;
    }
    
    public function getInsuredValue(){
       return $this->insuredValue;
    }
    public function setInsuredFee($insuredFee){
       $this->insuredFee = $insuredFee;
    }
    
    public function getInsuredFee(){
       return $this->insuredFee;
    }

    public function jsonSerialize() {
        return [
            'insuredPriceFlag' => $this->insuredPriceFlag,             
            'insuredValue' => $this->insuredValue,             
            'insuredFee' => $this->insuredFee             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkObject($this->insuredPriceFlag,"insuredPriceFlag");
       if(isset($this->insuredPriceFlag) && method_exists($this->insuredPriceFlag,"check")) {
           $this->insuredPriceFlag->check();
       }        

       RequestCheckUtil::checkNumeric($this->insuredValue,"insuredValue");

       RequestCheckUtil::checkNumeric($this->insuredFee,"insuredFee");
    }
}
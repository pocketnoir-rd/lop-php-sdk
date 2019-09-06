<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class Insurance implements JsonSerializable {

    /**
     * 淇濋櫓绫诲瀷
     */
    private $type;
    /**
     * 淇濋櫓閲戦
     */
    private $amount;

    public function setType($type){
       $this->type = $type;
    }
    
    public function getType(){
       return $this->type;
    }
    public function setAmount($amount){
       $this->amount = $amount;
    }
    
    public function getAmount(){
       return $this->amount;
    }

    public function jsonSerialize() {
        return [
            'type' => $this->type,             
            'amount' => $this->amount             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkObject($this->type,"type");
       if(isset($this->type) && method_exists($this->type,"check")) {
           $this->type->check();
       }        

       RequestCheckUtil::checkNumeric($this->amount,"amount");
    }
}
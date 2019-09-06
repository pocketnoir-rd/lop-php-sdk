<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class RelatedOrder implements JsonSerializable {

    /**
     * 璁㈠崟绫诲瀷
     */
    private $orderType;
    /**
     * 璁㈠崟缂栫爜
     */
    private $orderCode;

    public function setOrderType($orderType){
       $this->orderType = $orderType;
    }
    
    public function getOrderType(){
       return $this->orderType;
    }
    public function setOrderCode($orderCode){
       $this->orderCode = $orderCode;
    }
    
    public function getOrderCode(){
       return $this->orderCode;
    }

    public function jsonSerialize() {
        return [
            'orderType' => $this->orderType,             
            'orderCode' => $this->orderCode             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->orderType,"orderType");

       RequestCheckUtil::checkString($this->orderCode,"orderCode");
    }
}
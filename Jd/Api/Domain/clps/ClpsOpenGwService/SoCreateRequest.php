<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SoCreateRequest implements JsonSerializable {

    /**
     * 鍑哄簱鍗曚俊鎭�
     */
    private $deliveryOrder;
    /**
     * 鍑哄簱鍗曟槑缁�
     */
    private $orderLines;

    public function setDeliveryOrder($deliveryOrder){
       $this->deliveryOrder = $deliveryOrder;
    }
    
    public function getDeliveryOrder(){
       return $this->deliveryOrder;
    }
    public function setOrderLines($orderLines){
       $this->orderLines = $orderLines;
    }
    
    public function getOrderLines(){
       return $this->orderLines;
    }

    public function jsonSerialize() {
        return [
            'deliveryOrder' => $this->deliveryOrder,             
            'orderLines' => $this->orderLines             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->deliveryOrder,"deliveryOrder");

       RequestCheckUtil::checkObject($this->deliveryOrder,"deliveryOrder");
       if(isset($this->deliveryOrder) && method_exists($this->deliveryOrder,"check")) {
           $this->deliveryOrder->check();
       }        
        RequestCheckUtil::checkNotNull($this->orderLines,"orderLines");

       RequestCheckUtil::checkArray($this->orderLines,"orderLines");
       if(isset($this->orderLines)) {
           $arrlength=count($this->orderLines);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->orderLines[$index]) && method_exists($this->orderLines[$index],"check")) {
                   $this->orderLines[$index]->check();
               }
           }
       }
    }
}
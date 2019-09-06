<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class PoAddRequest implements JsonSerializable {

    /**
     * 鍏ュ簱鍗曚富妗�
     */
    private $entryOrder;
    /**
     * 閲囪喘鍗曟槑缁嗗垪琛�
     */
    private $orderLines;

    public function setEntryOrder($entryOrder){
       $this->entryOrder = $entryOrder;
    }
    
    public function getEntryOrder(){
       return $this->entryOrder;
    }
    public function setOrderLines($orderLines){
       $this->orderLines = $orderLines;
    }
    
    public function getOrderLines(){
       return $this->orderLines;
    }

    public function jsonSerialize() {
        return [
            'entryOrder' => $this->entryOrder,             
            'orderLines' => $this->orderLines             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkObject($this->entryOrder,"entryOrder");
       if(isset($this->entryOrder) && method_exists($this->entryOrder,"check")) {
           $this->entryOrder->check();
       }        

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
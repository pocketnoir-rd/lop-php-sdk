<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ProcessedAddRequest implements JsonSerializable {

    /**
     * 缁勮鍔犲伐鍗曚富淇℃伅
     */
    private $processedOrder;
    /**
     * 鍘熸枡棰嗘枡鏄庣粏
     */
    private $processedItems;

    public function setProcessedOrder($processedOrder){
       $this->processedOrder = $processedOrder;
    }
    
    public function getProcessedOrder(){
       return $this->processedOrder;
    }
    public function setProcessedItems($processedItems){
       $this->processedItems = $processedItems;
    }
    
    public function getProcessedItems(){
       return $this->processedItems;
    }

    public function jsonSerialize() {
        return [
            'processedOrder' => $this->processedOrder,             
            'processedItems' => $this->processedItems             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->processedOrder,"processedOrder");

       RequestCheckUtil::checkObject($this->processedOrder,"processedOrder");
       if(isset($this->processedOrder) && method_exists($this->processedOrder,"check")) {
           $this->processedOrder->check();
       }        

       RequestCheckUtil::checkArray($this->processedItems,"processedItems");
       if(isset($this->processedItems)) {
           $arrlength=count($this->processedItems);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->processedItems[$index]) && method_exists($this->processedItems[$index],"check")) {
                   $this->processedItems[$index]->check();
               }
           }
       }
    }
}
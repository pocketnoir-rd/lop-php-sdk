<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class InvoiceItem implements JsonSerializable {

    /**
     * 鍟嗗搧鍚嶇О
     */
    private $itemName;
    /**
     * 鍟嗗搧鍗曚綅
     */
    private $unit;
    /**
     * 鍗曚环
     */
    private $price;
    /**
     * 鏁伴噺
     */
    private $quantity;
    /**
     * 閲戦
     */
    private $amount;

    public function setItemName($itemName){
       $this->itemName = $itemName;
    }
    
    public function getItemName(){
       return $this->itemName;
    }
    public function setUnit($unit){
       $this->unit = $unit;
    }
    
    public function getUnit(){
       return $this->unit;
    }
    public function setPrice($price){
       $this->price = $price;
    }
    
    public function getPrice(){
       return $this->price;
    }
    public function setQuantity($quantity){
       $this->quantity = $quantity;
    }
    
    public function getQuantity(){
       return $this->quantity;
    }
    public function setAmount($amount){
       $this->amount = $amount;
    }
    
    public function getAmount(){
       return $this->amount;
    }

    public function jsonSerialize() {
        return [
            'itemName' => $this->itemName,             
            'unit' => $this->unit,             
            'price' => $this->price,             
            'quantity' => $this->quantity,             
            'amount' => $this->amount             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->itemName,"itemName");

       RequestCheckUtil::checkString($this->unit,"unit");

       RequestCheckUtil::checkString($this->price,"price");

       RequestCheckUtil::checkNumeric($this->quantity,"quantity");

       RequestCheckUtil::checkNumeric($this->amount,"amount");
    }
}
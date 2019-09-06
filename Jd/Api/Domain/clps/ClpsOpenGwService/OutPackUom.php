<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class OutPackUom implements JsonSerializable {

    /**
     * 鍟嗗鍖呰鍗曚綅缂栫爜锛宻tring(20)
     */
    private $outUomNo;
    /**
     * 鍟嗗鍖呰鍗曚綅鎻忚堪锛宻tring(20)
     */
    private $outUomName;
    /**
     * 鍖呰鍐呭晢鍝佹暟閲忥紝Integer
     */
    private $outUomQty;
    /**
     * 鍖呰閲嶉噺锛堟棤瀹為檯涓氬姟锛�
     */
    private $netWeight;
    /**
     * 闀匡紙鏃犲疄闄呬笟鍔★級
     */
    private $length;
    /**
     * 瀹斤紙鏃犲疄闄呬笟鍔★級
     */
    private $width;
    /**
     * 楂橈紙鏃犲疄闄呬笟鍔★級
     */
    private $height;
    /**
     * 浣撶Н锛堟棤瀹為檯涓氬姟锛�
     */
    private $volume;

    public function setOutUomNo($outUomNo){
       $this->outUomNo = $outUomNo;
    }
    
    public function getOutUomNo(){
       return $this->outUomNo;
    }
    public function setOutUomName($outUomName){
       $this->outUomName = $outUomName;
    }
    
    public function getOutUomName(){
       return $this->outUomName;
    }
    public function setOutUomQty($outUomQty){
       $this->outUomQty = $outUomQty;
    }
    
    public function getOutUomQty(){
       return $this->outUomQty;
    }
    public function setNetWeight($netWeight){
       $this->netWeight = $netWeight;
    }
    
    public function getNetWeight(){
       return $this->netWeight;
    }
    public function setLength($length){
       $this->length = $length;
    }
    
    public function getLength(){
       return $this->length;
    }
    public function setWidth($width){
       $this->width = $width;
    }
    
    public function getWidth(){
       return $this->width;
    }
    public function setHeight($height){
       $this->height = $height;
    }
    
    public function getHeight(){
       return $this->height;
    }
    public function setVolume($volume){
       $this->volume = $volume;
    }
    
    public function getVolume(){
       return $this->volume;
    }

    public function jsonSerialize() {
        return [
            'outUomNo' => $this->outUomNo,             
            'outUomName' => $this->outUomName,             
            'outUomQty' => $this->outUomQty,             
            'netWeight' => $this->netWeight,             
            'length' => $this->length,             
            'width' => $this->width,             
            'height' => $this->height,             
            'volume' => $this->volume             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->outUomNo,"outUomNo");

       RequestCheckUtil::checkString($this->outUomName,"outUomName");

       RequestCheckUtil::checkNumeric($this->outUomQty,"outUomQty");

       RequestCheckUtil::checkString($this->netWeight,"netWeight");

       RequestCheckUtil::checkString($this->length,"length");

       RequestCheckUtil::checkString($this->width,"width");

       RequestCheckUtil::checkString($this->height,"height");

       RequestCheckUtil::checkString($this->volume,"volume");
    }
}
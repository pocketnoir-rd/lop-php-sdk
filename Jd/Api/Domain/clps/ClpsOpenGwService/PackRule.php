<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class PackRule implements JsonSerializable {

    /**
     * 澶栭儴鍖呰绛栫暐缂栫爜
     */
    private $packId;
    /**
     * 澶栭儴鍖呰绛栫暐鎻忚堪
     */
    private $packName;
    /**
     * 鍖呰鍗曚綅鏄庣粏鍒楄〃
     */
    private $outPackUoms;

    public function setPackId($packId){
       $this->packId = $packId;
    }
    
    public function getPackId(){
       return $this->packId;
    }
    public function setPackName($packName){
       $this->packName = $packName;
    }
    
    public function getPackName(){
       return $this->packName;
    }
    public function setOutPackUoms($outPackUoms){
       $this->outPackUoms = $outPackUoms;
    }
    
    public function getOutPackUoms(){
       return $this->outPackUoms;
    }

    public function jsonSerialize() {
        return [
            'packId' => $this->packId,             
            'packName' => $this->packName,             
            'outPackUoms' => $this->outPackUoms             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->packId,"packId");

       RequestCheckUtil::checkString($this->packName,"packName");

       RequestCheckUtil::checkArray($this->outPackUoms,"outPackUoms");
       if(isset($this->outPackUoms)) {
           $arrlength=count($this->outPackUoms);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->outPackUoms[$index]) && method_exists($this->outPackUoms[$index],"check")) {
                   $this->outPackUoms[$index]->check();
               }
           }
       }
    }
}
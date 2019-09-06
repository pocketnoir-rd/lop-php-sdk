<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class PoBoxModel implements JsonSerializable {

    /**
     * CLPS鍟嗗搧缂栫爜(浜岄�変竴)
     */
    private $itemNo;
    /**
     * ISV鍟嗗搧缂栫爜(浜岄�変竴)
     */
    private $isvGoodsNo;
    /**
     * 鐢宠鍏ュ簱鏁伴噺
     */
    private $planQty;
    /**
     * 瀹為檯鍏ュ簱鏁伴噺(鏃犱笟鍔�)
     */
    private $realInstoreQty;
    /**
     * 绠卞彿
     */
    private $boxNo;
    /**
     * 搴忓垪鍙锋
     */
    private $serialNo;
    /**
     * 搴忓垪鍙烽泦鍚�
     */
    private $serialNoSet;

    public function setItemNo($itemNo){
       $this->itemNo = $itemNo;
    }
    
    public function getItemNo(){
       return $this->itemNo;
    }
    public function setIsvGoodsNo($isvGoodsNo){
       $this->isvGoodsNo = $isvGoodsNo;
    }
    
    public function getIsvGoodsNo(){
       return $this->isvGoodsNo;
    }
    public function setPlanQty($planQty){
       $this->planQty = $planQty;
    }
    
    public function getPlanQty(){
       return $this->planQty;
    }
    public function setRealInstoreQty($realInstoreQty){
       $this->realInstoreQty = $realInstoreQty;
    }
    
    public function getRealInstoreQty(){
       return $this->realInstoreQty;
    }
    public function setBoxNo($boxNo){
       $this->boxNo = $boxNo;
    }
    
    public function getBoxNo(){
       return $this->boxNo;
    }
    public function setSerialNo($serialNo){
       $this->serialNo = $serialNo;
    }
    
    public function getSerialNo(){
       return $this->serialNo;
    }
    public function setSerialNoSet($serialNoSet){
       $this->serialNoSet = $serialNoSet;
    }
    
    public function getSerialNoSet(){
       return $this->serialNoSet;
    }

    public function jsonSerialize() {
        return [
            'itemNo' => $this->itemNo,             
            'isvGoodsNo' => $this->isvGoodsNo,             
            'planQty' => $this->planQty,             
            'realInstoreQty' => $this->realInstoreQty,             
            'boxNo' => $this->boxNo,             
            'serialNo' => $this->serialNo,             
            'serialNoSet' => $this->serialNoSet             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->itemNo,"itemNo");

       RequestCheckUtil::checkString($this->itemNo,"itemNo");
        RequestCheckUtil::checkNotNull($this->isvGoodsNo,"isvGoodsNo");

       RequestCheckUtil::checkString($this->isvGoodsNo,"isvGoodsNo");
        RequestCheckUtil::checkNotNull($this->planQty,"planQty");

       RequestCheckUtil::checkNumeric($this->planQty,"planQty");

       RequestCheckUtil::checkNumeric($this->realInstoreQty,"realInstoreQty");

       RequestCheckUtil::checkString($this->boxNo,"boxNo");

       RequestCheckUtil::checkString($this->serialNo,"serialNo");

       RequestCheckUtil::checkObject($this->serialNoSet,"serialNoSet");
       if(isset($this->serialNoSet) && method_exists($this->serialNoSet,"check")) {
           $this->serialNoSet->check();
       }        
    }
}
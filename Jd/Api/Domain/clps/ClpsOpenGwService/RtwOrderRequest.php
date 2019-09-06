<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class RtwOrderRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerCode;
    /**
     * CLPS鍘熷璁㈠崟(鍑哄簱鍗�)缂栧彿锛孊2C閫�璐у叆搴撴椂蹇呭～
     */
    private $originOrderCode;
    /**
     * 鍟嗗鍘熷璁㈠崟(鍑哄簱鍗�)缂栧彿锛孊2C閫�璐у叆搴撴椂蹇呭～
     */
    private $originOutOrderCode;
    /**
     * 鍟嗗閫�璐у叆搴撳崟鍙�,闀垮害100鍐�
     */
    private $outRtwCode;
    /**
     * 浠撳簱缂栧彿
     */
    private $warehouseCode;
    /**
     * 閫�璐у叆搴撳師鍥�
     */
    private $rtwReason;
    /**
     * 閫�璐у叆搴撳崟绫诲瀷锛�1 鍞悗閫�璐� 2 鍞悗鎹㈣揣 3 鎷掓敹閫�璐э級
     */
    private $rtwType;
    /**
     * 閫�璐у叆搴撳崟绫诲瀷1:B2C 2:B2B
     */
    private $rtwOrderType;
    /**
     * 杩愬崟鍙�
     */
    private $waybillCode;
    /**
     * 鍙戜欢浜轰俊鎭紙鏃犱笟鍔�)
     */
    private $senderInfo;
    /**
     * 鎵胯繍鍟嗙紪鐮�
     */
    private $logisticsCode;
    /**
     * 鎵胯繍鍟嗗悕绉�
     */
    private $logisticsName;
    /**
     * 閫�璐у叆搴撳崟鏄庣粏鍒楄〃
     */
    private $rtwOrderItemList;

    public function setOwnerCode($ownerCode){
       $this->ownerCode = $ownerCode;
    }
    
    public function getOwnerCode(){
       return $this->ownerCode;
    }
    public function setOriginOrderCode($originOrderCode){
       $this->originOrderCode = $originOrderCode;
    }
    
    public function getOriginOrderCode(){
       return $this->originOrderCode;
    }
    public function setOriginOutOrderCode($originOutOrderCode){
       $this->originOutOrderCode = $originOutOrderCode;
    }
    
    public function getOriginOutOrderCode(){
       return $this->originOutOrderCode;
    }
    public function setOutRtwCode($outRtwCode){
       $this->outRtwCode = $outRtwCode;
    }
    
    public function getOutRtwCode(){
       return $this->outRtwCode;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setRtwReason($rtwReason){
       $this->rtwReason = $rtwReason;
    }
    
    public function getRtwReason(){
       return $this->rtwReason;
    }
    public function setRtwType($rtwType){
       $this->rtwType = $rtwType;
    }
    
    public function getRtwType(){
       return $this->rtwType;
    }
    public function setRtwOrderType($rtwOrderType){
       $this->rtwOrderType = $rtwOrderType;
    }
    
    public function getRtwOrderType(){
       return $this->rtwOrderType;
    }
    public function setWaybillCode($waybillCode){
       $this->waybillCode = $waybillCode;
    }
    
    public function getWaybillCode(){
       return $this->waybillCode;
    }
    public function setSenderInfo($senderInfo){
       $this->senderInfo = $senderInfo;
    }
    
    public function getSenderInfo(){
       return $this->senderInfo;
    }
    public function setLogisticsCode($logisticsCode){
       $this->logisticsCode = $logisticsCode;
    }
    
    public function getLogisticsCode(){
       return $this->logisticsCode;
    }
    public function setLogisticsName($logisticsName){
       $this->logisticsName = $logisticsName;
    }
    
    public function getLogisticsName(){
       return $this->logisticsName;
    }
    public function setRtwOrderItemList($rtwOrderItemList){
       $this->rtwOrderItemList = $rtwOrderItemList;
    }
    
    public function getRtwOrderItemList(){
       return $this->rtwOrderItemList;
    }

    public function jsonSerialize() {
        return [
            'ownerCode' => $this->ownerCode,             
            'originOrderCode' => $this->originOrderCode,             
            'originOutOrderCode' => $this->originOutOrderCode,             
            'outRtwCode' => $this->outRtwCode,             
            'warehouseCode' => $this->warehouseCode,             
            'rtwReason' => $this->rtwReason,             
            'rtwType' => $this->rtwType,             
            'rtwOrderType' => $this->rtwOrderType,             
            'waybillCode' => $this->waybillCode,             
            'senderInfo' => $this->senderInfo,             
            'logisticsCode' => $this->logisticsCode,             
            'logisticsName' => $this->logisticsName,             
            'rtwOrderItemList' => $this->rtwOrderItemList             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->originOrderCode,"originOrderCode");

       RequestCheckUtil::checkString($this->originOutOrderCode,"originOutOrderCode");
        RequestCheckUtil::checkNotNull($this->outRtwCode,"outRtwCode");

       RequestCheckUtil::checkString($this->outRtwCode,"outRtwCode");
        RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->rtwReason,"rtwReason");
        RequestCheckUtil::checkNotNull($this->rtwType,"rtwType");

       RequestCheckUtil::checkObject($this->rtwType,"rtwType");
       if(isset($this->rtwType) && method_exists($this->rtwType,"check")) {
           $this->rtwType->check();
       }        
        RequestCheckUtil::checkNotNull($this->rtwOrderType,"rtwOrderType");

       RequestCheckUtil::checkObject($this->rtwOrderType,"rtwOrderType");
       if(isset($this->rtwOrderType) && method_exists($this->rtwOrderType,"check")) {
           $this->rtwOrderType->check();
       }        
        RequestCheckUtil::checkNotNull($this->waybillCode,"waybillCode");

       RequestCheckUtil::checkString($this->waybillCode,"waybillCode");

       RequestCheckUtil::checkObject($this->senderInfo,"senderInfo");
       if(isset($this->senderInfo) && method_exists($this->senderInfo,"check")) {
           $this->senderInfo->check();
       }        
        RequestCheckUtil::checkNotNull($this->logisticsCode,"logisticsCode");

       RequestCheckUtil::checkString($this->logisticsCode,"logisticsCode");

       RequestCheckUtil::checkString($this->logisticsName,"logisticsName");

       RequestCheckUtil::checkArray($this->rtwOrderItemList,"rtwOrderItemList");
       if(isset($this->rtwOrderItemList)) {
           $arrlength=count($this->rtwOrderItemList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->rtwOrderItemList[$index]) && method_exists($this->rtwOrderItemList[$index],"check")) {
                   $this->rtwOrderItemList[$index]->check();
               }
           }
       }
    }
}
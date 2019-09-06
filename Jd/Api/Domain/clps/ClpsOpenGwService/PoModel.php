<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class PoModel implements JsonSerializable {

    /**
     * ERP鍏ュ簱鍗曞彿(澶栭儴),闀垮害50浠ュ唴
     */
    private $entryOrderCode;
    /**
     * 璐т富缂栫爜(浜嬩笟閮ㄧ紪鍙�)
     */
    private $ownerCode;
    /**
     * 閲囪喘鍗曞彿(褰搊rderType=CGRK鏃朵娇鐢�)
     */
    private $purchaseOrderCode;
    /**
     * 搴撴埧缂栫爜
     */
    private $warehouseCode;
    /**
     * 璁㈠崟鍒涘缓鏃堕棿(YYYY-MM-DD HH:MM:SS)(鏃犱笟鍔�)
     */
    private $orderCreateTime;
    /**
     * 棰勬湡鍒拌揣鏃堕棿(YYYY-MM-DD HH:MM:SS)(鏃犱笟鍔�)
     */
    private $expectStartTime;
    /**
     * 鏈�杩熼鏈熷埌璐ф椂闂�(YYYY-MM-DD HH:MM:SS)(鏃犱笟鍔�)
     */
    private $expectEndTime;
    /**
     * 鎵胯繍鍟嗙紪鐮�(鏃犱笟鍔�)
     */
    private $logisticsCode;
    /**
     * 鎵胯繍鍟嗗悕绉�(鏃犱笟鍔�)
     */
    private $logisticsName;
    /**
     * 杩愬崟鍙�(鏃犱笟鍔�)
     */
    private $expressCode;
    /**
     * 渚涘簲鍟嗙紪鍙�
     */
    private $supplierCode;
    /**
     * 渚涘簲鍟嗗悕绉�(鏃犱笟鍔�)
     */
    private $supplierName;
    /**
     * 鎿嶄綔鍛樼紪鐮�(鏃犱笟鍔�)
     */
    private $operatorCode;
    /**
     * 鎿嶄綔鍛樺悕绉�(鏃犱笟鍔�)
     */
    private $operatorName;
    /**
     * 鎿嶄綔鏃堕棿(YYYY-MM-DD HH:MM:SS)(鏃犱笟鍔�)
     */
    private $operateTime;
    /**
     * 澶囨敞(鏃犱笟鍔�)
     */
    private $remark;
    /**
     * 鍗曟嵁绫诲瀷(鏃犱笟鍔�)
     */
    private $billType;
    /**
     * 鏄惁鏀寔涓嶅悎鏍奸獙鏀� 0:涓嶆敮鎸� 1锛氭敮鎸�
     */
    private $acceptUnQcFlag;
    /**
     * 鏄惁鎸夌鏀惰揣 0:涓嶆敮鎸� 1锛氭敮鎸�
     */
    private $boxFlag;
    /**
     * 绠辨槑缁嗗垪琛�
     */
    private $poBoxModelList;
    /**
     * 鍥炰紶鏂瑰紡 1-鎸夊崟锛�2-鎸夋澘
     */
    private $poReturnMode;
    /**
     * 鎶ュ叧鍗曞彿 鐗╂祦浜戜笓鐢�(鏃犱笟鍔�)
     */
    private $customsInfo;
    /**
     * 缁檞ms涓嬪彂鏄墍浼犵殑remark
     */
    private $wmsRemark;
    /**
     * 杩欎釜瀛楁鍙槸鐢ㄦ潵瀛榚di浼犻�掕繃鏉ョ殑涓滆タ锛屽洖浼犵殑鏃跺�欒(鏃犱笟鍔�)
     */
    private $ediRemark;
    /**
     * 鏄惁闆嗗崟鏍囪瘑锛�1-闆嗗崟锛�2-闈為泦鍗�
     */
    private $unitFlag;
    /**
     * 闆嗗崟瑙勫垯
     */
    private $unitRule;
    /**
     * 閲囪喘鍗曟湁鏁堟棩鏈�(鏃犱笟鍔�)
     */
    private $effectiveDate;
    /**
     * 閲囪喘鍗曟爣璁颁綅(鏃犱笟鍔�)
     */
    private $orderMark;
    /**
     * 鏀惰揣绛夌骇1锛屾寜鍗曟嵁绛夌骇锛�2锛屾寜瀹炵墿绛夌骇(鏃犱笟鍔�)
     */
    private $receiveLevel;
    /**
     * 闂ㄥ簵ID(鏃犱笟鍔�)
     */
    private $customerNo;
    /**
     * 閲囪喘鍗曟爣璇�,null 鎴栬�� 1 ISV, 4CLPS(鏃犱笟鍔�)
     */
    private $poSign;
    /**
     * 鏄惁鍙己閲忓嚭 true鏄� false鍚�
     */
    private $allowLack;
    /**
     * 鍙戣揣浜轰俊鎭�(鏃犱笟鍔�)
     */
    private $senderInfo;
    /**
     * 鏀惰揣浜轰俊鎭�(鏃犱笟鍔�)
     */
    private $receiverInfo;
    /**
     * 鍏宠仈璁㈠崟鍒楄〃(鏃犱笟鍔�)
     */
    private $relatedOrderList;
    /**
     * 鏄惁甯﹂殢璐у悓琛屽崟 1鏄� 0鍚�
     */
    private $isWithListBill;
    /**
     * 涓嬭浇鍦板潃
     */
    private $listBillURL;
    /**
     * 鎬婚噾棰�
     */
    private $orderAmount;

    public function setEntryOrderCode($entryOrderCode){
       $this->entryOrderCode = $entryOrderCode;
    }
    
    public function getEntryOrderCode(){
       return $this->entryOrderCode;
    }
    public function setOwnerCode($ownerCode){
       $this->ownerCode = $ownerCode;
    }
    
    public function getOwnerCode(){
       return $this->ownerCode;
    }
    public function setPurchaseOrderCode($purchaseOrderCode){
       $this->purchaseOrderCode = $purchaseOrderCode;
    }
    
    public function getPurchaseOrderCode(){
       return $this->purchaseOrderCode;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setOrderCreateTime($orderCreateTime){
       $this->orderCreateTime = $orderCreateTime;
    }
    
    public function getOrderCreateTime(){
       return $this->orderCreateTime;
    }
    public function setExpectStartTime($expectStartTime){
       $this->expectStartTime = $expectStartTime;
    }
    
    public function getExpectStartTime(){
       return $this->expectStartTime;
    }
    public function setExpectEndTime($expectEndTime){
       $this->expectEndTime = $expectEndTime;
    }
    
    public function getExpectEndTime(){
       return $this->expectEndTime;
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
    public function setExpressCode($expressCode){
       $this->expressCode = $expressCode;
    }
    
    public function getExpressCode(){
       return $this->expressCode;
    }
    public function setSupplierCode($supplierCode){
       $this->supplierCode = $supplierCode;
    }
    
    public function getSupplierCode(){
       return $this->supplierCode;
    }
    public function setSupplierName($supplierName){
       $this->supplierName = $supplierName;
    }
    
    public function getSupplierName(){
       return $this->supplierName;
    }
    public function setOperatorCode($operatorCode){
       $this->operatorCode = $operatorCode;
    }
    
    public function getOperatorCode(){
       return $this->operatorCode;
    }
    public function setOperatorName($operatorName){
       $this->operatorName = $operatorName;
    }
    
    public function getOperatorName(){
       return $this->operatorName;
    }
    public function setOperateTime($operateTime){
       $this->operateTime = $operateTime;
    }
    
    public function getOperateTime(){
       return $this->operateTime;
    }
    public function setRemark($remark){
       $this->remark = $remark;
    }
    
    public function getRemark(){
       return $this->remark;
    }
    public function setBillType($billType){
       $this->billType = $billType;
    }
    
    public function getBillType(){
       return $this->billType;
    }
    public function setAcceptUnQcFlag($acceptUnQcFlag){
       $this->acceptUnQcFlag = $acceptUnQcFlag;
    }
    
    public function getAcceptUnQcFlag(){
       return $this->acceptUnQcFlag;
    }
    public function setBoxFlag($boxFlag){
       $this->boxFlag = $boxFlag;
    }
    
    public function getBoxFlag(){
       return $this->boxFlag;
    }
    public function setPoBoxModelList($poBoxModelList){
       $this->poBoxModelList = $poBoxModelList;
    }
    
    public function getPoBoxModelList(){
       return $this->poBoxModelList;
    }
    public function setPoReturnMode($poReturnMode){
       $this->poReturnMode = $poReturnMode;
    }
    
    public function getPoReturnMode(){
       return $this->poReturnMode;
    }
    public function setCustomsInfo($customsInfo){
       $this->customsInfo = $customsInfo;
    }
    
    public function getCustomsInfo(){
       return $this->customsInfo;
    }
    public function setWmsRemark($wmsRemark){
       $this->wmsRemark = $wmsRemark;
    }
    
    public function getWmsRemark(){
       return $this->wmsRemark;
    }
    public function setEdiRemark($ediRemark){
       $this->ediRemark = $ediRemark;
    }
    
    public function getEdiRemark(){
       return $this->ediRemark;
    }
    public function setUnitFlag($unitFlag){
       $this->unitFlag = $unitFlag;
    }
    
    public function getUnitFlag(){
       return $this->unitFlag;
    }
    public function setUnitRule($unitRule){
       $this->unitRule = $unitRule;
    }
    
    public function getUnitRule(){
       return $this->unitRule;
    }
    public function setEffectiveDate($effectiveDate){
       $this->effectiveDate = $effectiveDate;
    }
    
    public function getEffectiveDate(){
       return $this->effectiveDate;
    }
    public function setOrderMark($orderMark){
       $this->orderMark = $orderMark;
    }
    
    public function getOrderMark(){
       return $this->orderMark;
    }
    public function setReceiveLevel($receiveLevel){
       $this->receiveLevel = $receiveLevel;
    }
    
    public function getReceiveLevel(){
       return $this->receiveLevel;
    }
    public function setCustomerNo($customerNo){
       $this->customerNo = $customerNo;
    }
    
    public function getCustomerNo(){
       return $this->customerNo;
    }
    public function setPoSign($poSign){
       $this->poSign = $poSign;
    }
    
    public function getPoSign(){
       return $this->poSign;
    }
    public function setAllowLack($allowLack){
       $this->allowLack = $allowLack;
    }
    
    public function getAllowLack(){
       return $this->allowLack;
    }
    public function setSenderInfo($senderInfo){
       $this->senderInfo = $senderInfo;
    }
    
    public function getSenderInfo(){
       return $this->senderInfo;
    }
    public function setReceiverInfo($receiverInfo){
       $this->receiverInfo = $receiverInfo;
    }
    
    public function getReceiverInfo(){
       return $this->receiverInfo;
    }
    public function setRelatedOrderList($relatedOrderList){
       $this->relatedOrderList = $relatedOrderList;
    }
    
    public function getRelatedOrderList(){
       return $this->relatedOrderList;
    }
    public function setIsWithListBill($isWithListBill){
       $this->isWithListBill = $isWithListBill;
    }
    
    public function getIsWithListBill(){
       return $this->isWithListBill;
    }
    public function setListBillURL($listBillURL){
       $this->listBillURL = $listBillURL;
    }
    
    public function getListBillURL(){
       return $this->listBillURL;
    }
    public function setOrderAmount($orderAmount){
       $this->orderAmount = $orderAmount;
    }
    
    public function getOrderAmount(){
       return $this->orderAmount;
    }

    public function jsonSerialize() {
        return [
            'entryOrderCode' => $this->entryOrderCode,             
            'ownerCode' => $this->ownerCode,             
            'purchaseOrderCode' => $this->purchaseOrderCode,             
            'warehouseCode' => $this->warehouseCode,             
            'orderCreateTime' => $this->orderCreateTime,             
            'expectStartTime' => $this->expectStartTime,             
            'expectEndTime' => $this->expectEndTime,             
            'logisticsCode' => $this->logisticsCode,             
            'logisticsName' => $this->logisticsName,             
            'expressCode' => $this->expressCode,             
            'supplierCode' => $this->supplierCode,             
            'supplierName' => $this->supplierName,             
            'operatorCode' => $this->operatorCode,             
            'operatorName' => $this->operatorName,             
            'operateTime' => $this->operateTime,             
            'remark' => $this->remark,             
            'billType' => $this->billType,             
            'acceptUnQcFlag' => $this->acceptUnQcFlag,             
            'boxFlag' => $this->boxFlag,             
            'poBoxModelList' => $this->poBoxModelList,             
            'poReturnMode' => $this->poReturnMode,             
            'customsInfo' => $this->customsInfo,             
            'wmsRemark' => $this->wmsRemark,             
            'ediRemark' => $this->ediRemark,             
            'unitFlag' => $this->unitFlag,             
            'unitRule' => $this->unitRule,             
            'effectiveDate' => $this->effectiveDate,             
            'orderMark' => $this->orderMark,             
            'receiveLevel' => $this->receiveLevel,             
            'customerNo' => $this->customerNo,             
            'poSign' => $this->poSign,             
            'allowLack' => $this->allowLack,             
            'senderInfo' => $this->senderInfo,             
            'receiverInfo' => $this->receiverInfo,             
            'relatedOrderList' => $this->relatedOrderList,             
            'isWithListBill' => $this->isWithListBill,             
            'listBillURL' => $this->listBillURL,             
            'orderAmount' => $this->orderAmount             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->entryOrderCode,"entryOrderCode");

       RequestCheckUtil::checkString($this->entryOrderCode,"entryOrderCode");
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->purchaseOrderCode,"purchaseOrderCode");
        RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->orderCreateTime,"orderCreateTime");

       RequestCheckUtil::checkString($this->expectStartTime,"expectStartTime");

       RequestCheckUtil::checkString($this->expectEndTime,"expectEndTime");

       RequestCheckUtil::checkString($this->logisticsCode,"logisticsCode");

       RequestCheckUtil::checkString($this->logisticsName,"logisticsName");

       RequestCheckUtil::checkString($this->expressCode,"expressCode");
        RequestCheckUtil::checkNotNull($this->supplierCode,"supplierCode");

       RequestCheckUtil::checkString($this->supplierCode,"supplierCode");

       RequestCheckUtil::checkString($this->supplierName,"supplierName");

       RequestCheckUtil::checkString($this->operatorCode,"operatorCode");

       RequestCheckUtil::checkString($this->operatorName,"operatorName");

       RequestCheckUtil::checkString($this->operateTime,"operateTime");

       RequestCheckUtil::checkString($this->remark,"remark");

       RequestCheckUtil::checkString($this->billType,"billType");

       RequestCheckUtil::checkString($this->acceptUnQcFlag,"acceptUnQcFlag");

       RequestCheckUtil::checkString($this->boxFlag,"boxFlag");

       RequestCheckUtil::checkArray($this->poBoxModelList,"poBoxModelList");
       if(isset($this->poBoxModelList)) {
           $arrlength=count($this->poBoxModelList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->poBoxModelList[$index]) && method_exists($this->poBoxModelList[$index],"check")) {
                   $this->poBoxModelList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkObject($this->poReturnMode,"poReturnMode");
       if(isset($this->poReturnMode) && method_exists($this->poReturnMode,"check")) {
           $this->poReturnMode->check();
       }        

       RequestCheckUtil::checkString($this->customsInfo,"customsInfo");

       RequestCheckUtil::checkString($this->wmsRemark,"wmsRemark");

       RequestCheckUtil::checkString($this->ediRemark,"ediRemark");

       RequestCheckUtil::checkObject($this->unitFlag,"unitFlag");
       if(isset($this->unitFlag) && method_exists($this->unitFlag,"check")) {
           $this->unitFlag->check();
       }        

       RequestCheckUtil::checkString($this->unitRule,"unitRule");

       RequestCheckUtil::checkString($this->effectiveDate,"effectiveDate");

       RequestCheckUtil::checkString($this->orderMark,"orderMark");

       RequestCheckUtil::checkObject($this->receiveLevel,"receiveLevel");
       if(isset($this->receiveLevel) && method_exists($this->receiveLevel,"check")) {
           $this->receiveLevel->check();
       }        

       RequestCheckUtil::checkString($this->customerNo,"customerNo");

       RequestCheckUtil::checkObject($this->poSign,"poSign");
       if(isset($this->poSign) && method_exists($this->poSign,"check")) {
           $this->poSign->check();
       }        

       RequestCheckUtil::checkBoolean($this->allowLack,"allowLack");

       RequestCheckUtil::checkObject($this->senderInfo,"senderInfo");
       if(isset($this->senderInfo) && method_exists($this->senderInfo,"check")) {
           $this->senderInfo->check();
       }        

       RequestCheckUtil::checkObject($this->receiverInfo,"receiverInfo");
       if(isset($this->receiverInfo) && method_exists($this->receiverInfo,"check")) {
           $this->receiverInfo->check();
       }        

       RequestCheckUtil::checkArray($this->relatedOrderList,"relatedOrderList");
       if(isset($this->relatedOrderList)) {
           $arrlength=count($this->relatedOrderList);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->relatedOrderList[$index]) && method_exists($this->relatedOrderList[$index],"check")) {
                   $this->relatedOrderList[$index]->check();
               }
           }
       }

       RequestCheckUtil::checkObject($this->isWithListBill,"isWithListBill");
       if(isset($this->isWithListBill) && method_exists($this->isWithListBill,"check")) {
           $this->isWithListBill->check();
       }        

       RequestCheckUtil::checkString($this->listBillURL,"listBillURL");

       RequestCheckUtil::checkString($this->orderAmount,"orderAmount");
    }
}
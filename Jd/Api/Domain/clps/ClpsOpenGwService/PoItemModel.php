<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class PoItemModel implements JsonSerializable {

    /**
     * 鍏ュ簱鍗曠殑琛屽彿
     */
    private $orderLineNo;
    /**
     * 澶栭儴涓氬姟缂栫爜(娑堟伅ID;鐢ㄤ簬鍘婚噸;褰撳崟鎹渶瑕佸垎鎵规鍙戦�佹椂浣跨敤)(鏃犱笟鍔�)
     */
    private $outBizCode;
    /**
     * ERP鍟嗗搧缂栫爜(浜岄�変竴)
     */
    private $itemId;
    /**
     * CLPS鍟嗗搧缂栫爜(浜岄�変竴)
     */
    private $itemNo;
    /**
     * 鍟嗗搧鍚嶇О(鏃犱笟鍔�)
     */
    private $itemName;
    /**
     * 搴旀敹鍟嗗搧鏁伴噺(鏁存暟)
     */
    private $planQty;
    /**
     * 搴旀敹鍟嗗搧鏁伴噺(娴偣鏁�)
     */
    private $planQtyStr;
    /**
     * 鍟嗗搧鐘舵�佸晢鍝佺姸鎬�(1鑹搧銆�2娈嬪搧銆�3鏍峰搧) 
     */
    private $goodsStatus;
    /**
     * 璐寸爜绫诲瀷(1鐢宠璐寸爜銆�2鍟嗗鑷创銆�3浠撳簱琛ヨ创)
     */
    private $barCodeType;
    /**
     * 璐ㄦ鏂板 璐ㄦ姣斾緥 0-100
     */
    private $qualityCheckRate;
    /**
     * 鎸夌収搴忓垪鍙锋牎楠屽叆搴�(0鍚︺��1鏄�)聽
     */
    private $sidCheckout;
    /**
     * 鏄庣粏缂栧彿
     */
    private $detailNo;
    /**
     * 鍖呰缁嗘暟
     */
    private $packageSort;
    /**
     * 鍟嗗搧灞炴��
     */
    private $skuProperty;
    /**
     * 搴撳瓨绫诲瀷(鏃犲疄闄呬笟鍔�) 
     */
    private $inventoryType;
    /**
     * 鐢熶骇鎵瑰彿
     */
    private $produceCode;
    /**
     * 闆跺敭浠锋牸
     */
    private $retailPrice;
    /**
     * 鍟嗗搧鐢熶骇鏃ユ湡(YYYY-MM-DD)
     */
    private $productDate;
    /**
     * 鍟嗗搧杩囨湡鏃ユ湡(YYYY-MM-DD)
     */
    private $expireDate;
    /**
     * 鎵规缂栧彿
     */
    private $batchCode;
    /**
     * 鍖呰鍗曚綅
     */
    private $packageUnit;
    /**
     * 璐т富(澶栫郴缁�)绠辫缂栫爜
     */
    private $ownerPackCode;
    /**
     * 鍗曚环
     */
    private $itemPrice;
    /**
     * 琛岄噾棰�
     */
    private $itemAmount;
    /**
     * 鎵╁睍淇℃伅
     */
    private $extendProps;

    public function setOrderLineNo($orderLineNo){
       $this->orderLineNo = $orderLineNo;
    }
    
    public function getOrderLineNo(){
       return $this->orderLineNo;
    }
    public function setOutBizCode($outBizCode){
       $this->outBizCode = $outBizCode;
    }
    
    public function getOutBizCode(){
       return $this->outBizCode;
    }
    public function setItemId($itemId){
       $this->itemId = $itemId;
    }
    
    public function getItemId(){
       return $this->itemId;
    }
    public function setItemNo($itemNo){
       $this->itemNo = $itemNo;
    }
    
    public function getItemNo(){
       return $this->itemNo;
    }
    public function setItemName($itemName){
       $this->itemName = $itemName;
    }
    
    public function getItemName(){
       return $this->itemName;
    }
    public function setPlanQty($planQty){
       $this->planQty = $planQty;
    }
    
    public function getPlanQty(){
       return $this->planQty;
    }
    public function setPlanQtyStr($planQtyStr){
       $this->planQtyStr = $planQtyStr;
    }
    
    public function getPlanQtyStr(){
       return $this->planQtyStr;
    }
    public function setGoodsStatus($goodsStatus){
       $this->goodsStatus = $goodsStatus;
    }
    
    public function getGoodsStatus(){
       return $this->goodsStatus;
    }
    public function setBarCodeType($barCodeType){
       $this->barCodeType = $barCodeType;
    }
    
    public function getBarCodeType(){
       return $this->barCodeType;
    }
    public function setQualityCheckRate($qualityCheckRate){
       $this->qualityCheckRate = $qualityCheckRate;
    }
    
    public function getQualityCheckRate(){
       return $this->qualityCheckRate;
    }
    public function setSidCheckout($sidCheckout){
       $this->sidCheckout = $sidCheckout;
    }
    
    public function getSidCheckout(){
       return $this->sidCheckout;
    }
    public function setDetailNo($detailNo){
       $this->detailNo = $detailNo;
    }
    
    public function getDetailNo(){
       return $this->detailNo;
    }
    public function setPackageSort($packageSort){
       $this->packageSort = $packageSort;
    }
    
    public function getPackageSort(){
       return $this->packageSort;
    }
    public function setSkuProperty($skuProperty){
       $this->skuProperty = $skuProperty;
    }
    
    public function getSkuProperty(){
       return $this->skuProperty;
    }
    public function setInventoryType($inventoryType){
       $this->inventoryType = $inventoryType;
    }
    
    public function getInventoryType(){
       return $this->inventoryType;
    }
    public function setProduceCode($produceCode){
       $this->produceCode = $produceCode;
    }
    
    public function getProduceCode(){
       return $this->produceCode;
    }
    public function setRetailPrice($retailPrice){
       $this->retailPrice = $retailPrice;
    }
    
    public function getRetailPrice(){
       return $this->retailPrice;
    }
    public function setProductDate($productDate){
       $this->productDate = $productDate;
    }
    
    public function getProductDate(){
       return $this->productDate;
    }
    public function setExpireDate($expireDate){
       $this->expireDate = $expireDate;
    }
    
    public function getExpireDate(){
       return $this->expireDate;
    }
    public function setBatchCode($batchCode){
       $this->batchCode = $batchCode;
    }
    
    public function getBatchCode(){
       return $this->batchCode;
    }
    public function setPackageUnit($packageUnit){
       $this->packageUnit = $packageUnit;
    }
    
    public function getPackageUnit(){
       return $this->packageUnit;
    }
    public function setOwnerPackCode($ownerPackCode){
       $this->ownerPackCode = $ownerPackCode;
    }
    
    public function getOwnerPackCode(){
       return $this->ownerPackCode;
    }
    public function setItemPrice($itemPrice){
       $this->itemPrice = $itemPrice;
    }
    
    public function getItemPrice(){
       return $this->itemPrice;
    }
    public function setItemAmount($itemAmount){
       $this->itemAmount = $itemAmount;
    }
    
    public function getItemAmount(){
       return $this->itemAmount;
    }
    public function setExtendProps($extendProps){
       $this->extendProps = $extendProps;
    }
    
    public function getExtendProps(){
       return $this->extendProps;
    }

    public function jsonSerialize() {
        return [
            'orderLineNo' => $this->orderLineNo,             
            'outBizCode' => $this->outBizCode,             
            'itemId' => $this->itemId,             
            'itemNo' => $this->itemNo,             
            'itemName' => $this->itemName,             
            'planQty' => $this->planQty,             
            'planQtyStr' => $this->planQtyStr,             
            'goodsStatus' => $this->goodsStatus,             
            'barCodeType' => $this->barCodeType,             
            'qualityCheckRate' => $this->qualityCheckRate,             
            'sidCheckout' => $this->sidCheckout,             
            'detailNo' => $this->detailNo,             
            'packageSort' => $this->packageSort,             
            'skuProperty' => $this->skuProperty,             
            'inventoryType' => $this->inventoryType,             
            'produceCode' => $this->produceCode,             
            'retailPrice' => $this->retailPrice,             
            'productDate' => $this->productDate,             
            'expireDate' => $this->expireDate,             
            'batchCode' => $this->batchCode,             
            'packageUnit' => $this->packageUnit,             
            'ownerPackCode' => $this->ownerPackCode,             
            'itemPrice' => $this->itemPrice,             
            'itemAmount' => $this->itemAmount,             
            'extendProps' => $this->extendProps             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->orderLineNo,"orderLineNo");

       RequestCheckUtil::checkString($this->outBizCode,"outBizCode");

       RequestCheckUtil::checkString($this->itemId,"itemId");

       RequestCheckUtil::checkString($this->itemNo,"itemNo");

       RequestCheckUtil::checkString($this->itemName,"itemName");
        RequestCheckUtil::checkNotNull($this->planQty,"planQty");

       RequestCheckUtil::checkNumeric($this->planQty,"planQty");
        RequestCheckUtil::checkNotNull($this->planQtyStr,"planQtyStr");

       RequestCheckUtil::checkString($this->planQtyStr,"planQtyStr");
        RequestCheckUtil::checkNotNull($this->goodsStatus,"goodsStatus");

       RequestCheckUtil::checkString($this->goodsStatus,"goodsStatus");

       RequestCheckUtil::checkString($this->barCodeType,"barCodeType");

       RequestCheckUtil::checkString($this->qualityCheckRate,"qualityCheckRate");

       RequestCheckUtil::checkNumeric($this->sidCheckout,"sidCheckout");

       RequestCheckUtil::checkString($this->detailNo,"detailNo");

       RequestCheckUtil::checkNumeric($this->packageSort,"packageSort");

       RequestCheckUtil::checkString($this->skuProperty,"skuProperty");
        RequestCheckUtil::checkNotNull($this->inventoryType,"inventoryType");

       RequestCheckUtil::checkString($this->inventoryType,"inventoryType");

       RequestCheckUtil::checkString($this->produceCode,"produceCode");

       RequestCheckUtil::checkString($this->retailPrice,"retailPrice");

       RequestCheckUtil::checkString($this->productDate,"productDate");

       RequestCheckUtil::checkString($this->expireDate,"expireDate");

       RequestCheckUtil::checkString($this->batchCode,"batchCode");

       RequestCheckUtil::checkString($this->packageUnit,"packageUnit");

       RequestCheckUtil::checkString($this->ownerPackCode,"ownerPackCode");

       RequestCheckUtil::checkString($this->itemPrice,"itemPrice");

       RequestCheckUtil::checkString($this->itemAmount,"itemAmount");

       RequestCheckUtil::checkObject($this->extendProps,"extendProps");
       if(isset($this->extendProps) && method_exists($this->extendProps,"check")) {
           $this->extendProps->check();
       }        
    }
}
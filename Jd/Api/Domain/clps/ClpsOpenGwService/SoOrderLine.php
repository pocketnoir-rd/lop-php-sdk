<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SoOrderLine implements JsonSerializable {

    /**
     * 鏄庣粏琛屽彿,褰撳墠鏄庣粏鍐呬笉鍏佽閲嶅,string(50)
     */
    private $orderLineNo;
    /**
     * 浜ゆ槗骞冲彴璁㈠崟,鏈惎鐢�
     */
    private $sourceOrderCode;
    /**
     * 浜ゆ槗骞冲彴瀛愯鍗曠紪鐮�,鏈惎鐢�
     */
    private $subSourceOrderCode;
    /**
     * 鏀粯骞冲彴浜ゆ槗鍙�,鏈惎鐢�
     */
    private $payNo;
    /**
     * ERP鍟嗗搧缂栫爜(CLPS鍟嗗搧缂栫爜涓虹┖鏃跺繀濉�),string(50)
     */
    private $itemCode;
    /**
     * CLPS鍟嗗搧缂栫爜(ERP鍟嗗搧缂栫爜涓虹┖鏃跺繀濉�),string(50)
     */
    private $itemId;
    /**
     * 浜ゆ槗骞冲彴鍟嗗搧缂栫爜,鏈惎鐢�
     */
    private $extCode;
    /**
     * 鍟嗗搧鍚嶇О,鏈惎鐢紝鏁版嵁鍙栬嚜鍟嗗搧鏁版嵁
     */
    private $itemName;
    /**
     * 搴撳瓨绫诲瀷,鏈惎鐢�
     */
    private $inventoryType;
    /**
     * 鍙戣揣鏁伴噺(鏁存暟),姝ゅ瓧娈典笌鍙戣揣鏁伴噺(娴偣)蹇呭～涓�涓�
     */
    private $planQty;
    /**
     * 鍙戣揣鏁伴噺(娴偣),姝ゅ瓧娈典笌鍙戣揣鏁伴噺(鏁存暟)蹇呭～涓�涓�
     */
    private $planOutQty;
    /**
     * 鍖呰瑙勬牸缂栫爜
     */
    private $outPackageNo;
    /**
     * 鍖呰杞寲鏁伴噺,鏈惎鐢�
     */
    private $uomQty;
    /**
     * CLPS鍖呰缂栫爜,鏈紑鏀�
     */
    private $packageNo;
    /**
     * 鍗曚綅缂栫爜
     */
    private $unitCode;
    /**
     * 鍗曚綅鍚嶇О,鏈惎鐢�
     */
    private $unitName;
    /**
     * 闆跺敭浠�,double(18,2),闆跺敭浠�=瀹為檯鎴愪氦浠�+鍗曚欢鍟嗗搧鎶樻墸閲戦,鏈惎鐢�
     */
    private $retailPrice;
    /**
     * 瀹為檯鎴愪氦浠�(姝ゆ潯鏄庣粏鐨勫寘瑁呰鏍间环鏍�),double(10,2)
     */
    private $actualPrice;
    /**
     * 鍗曚欢鍟嗗搧鎶樻墸閲戦,double(18,2),鏈惎鐢�
     */
    private $discountAmount;
    /**
     * 鎵规缂栫爜,寰呭紑鏀�
     */
    private $batchCode;
    /**
     * 搴忓垪鍙�,寰呭紑鏀�
     */
    private $serialNo;
    /**
     * 鍟嗗搧绛夌骇,寰呭紑鏀�
     */
    private $goodsLevel;
    /**
     * 搴楅摵鍟嗗搧缂栫爜,鏈惎鐢�
     */
    private $shopGoodsNo;
    /**
     * 鎵撳嵃鍚嶇О,string(500)
     */
    private $printName;
    /**
     * 鐢熶骇鏃ユ湡,寰呭紑鏀�
     */
    private $productDate;
    /**
     * 杩囨湡鏃ユ湡,鏈惎鐢�
     */
    private $expireDate;
    /**
     * 瀹夌淮鏍囪瘑锛�0=涓嶉渶瑕佸畨瑁�,1=浜笢瀹夎,2=鍘傚瀹夎,寰呭紑鏀�
     */
    private $installVenderId;
    /**
     * 铏氭嫙缁勫鍟嗗搧缂栫爜
     */
    private $virtualSuiteGoodsNo;
    /**
     * 铏氭嫙缁勫鍟嗗搧鍚嶇О
     */
    private $virtualSuiteGoodsName;
    /**
     * 铏氭嫙缁勫鍟嗗搧璐拱鏁伴噺
     */
    private $virtualSuiteGoodsQty;

    public function setOrderLineNo($orderLineNo){
       $this->orderLineNo = $orderLineNo;
    }
    
    public function getOrderLineNo(){
       return $this->orderLineNo;
    }
    public function setSourceOrderCode($sourceOrderCode){
       $this->sourceOrderCode = $sourceOrderCode;
    }
    
    public function getSourceOrderCode(){
       return $this->sourceOrderCode;
    }
    public function setSubSourceOrderCode($subSourceOrderCode){
       $this->subSourceOrderCode = $subSourceOrderCode;
    }
    
    public function getSubSourceOrderCode(){
       return $this->subSourceOrderCode;
    }
    public function setPayNo($payNo){
       $this->payNo = $payNo;
    }
    
    public function getPayNo(){
       return $this->payNo;
    }
    public function setItemCode($itemCode){
       $this->itemCode = $itemCode;
    }
    
    public function getItemCode(){
       return $this->itemCode;
    }
    public function setItemId($itemId){
       $this->itemId = $itemId;
    }
    
    public function getItemId(){
       return $this->itemId;
    }
    public function setExtCode($extCode){
       $this->extCode = $extCode;
    }
    
    public function getExtCode(){
       return $this->extCode;
    }
    public function setItemName($itemName){
       $this->itemName = $itemName;
    }
    
    public function getItemName(){
       return $this->itemName;
    }
    public function setInventoryType($inventoryType){
       $this->inventoryType = $inventoryType;
    }
    
    public function getInventoryType(){
       return $this->inventoryType;
    }
    public function setPlanQty($planQty){
       $this->planQty = $planQty;
    }
    
    public function getPlanQty(){
       return $this->planQty;
    }
    public function setPlanOutQty($planOutQty){
       $this->planOutQty = $planOutQty;
    }
    
    public function getPlanOutQty(){
       return $this->planOutQty;
    }
    public function setOutPackageNo($outPackageNo){
       $this->outPackageNo = $outPackageNo;
    }
    
    public function getOutPackageNo(){
       return $this->outPackageNo;
    }
    public function setUomQty($uomQty){
       $this->uomQty = $uomQty;
    }
    
    public function getUomQty(){
       return $this->uomQty;
    }
    public function setPackageNo($packageNo){
       $this->packageNo = $packageNo;
    }
    
    public function getPackageNo(){
       return $this->packageNo;
    }
    public function setUnitCode($unitCode){
       $this->unitCode = $unitCode;
    }
    
    public function getUnitCode(){
       return $this->unitCode;
    }
    public function setUnitName($unitName){
       $this->unitName = $unitName;
    }
    
    public function getUnitName(){
       return $this->unitName;
    }
    public function setRetailPrice($retailPrice){
       $this->retailPrice = $retailPrice;
    }
    
    public function getRetailPrice(){
       return $this->retailPrice;
    }
    public function setActualPrice($actualPrice){
       $this->actualPrice = $actualPrice;
    }
    
    public function getActualPrice(){
       return $this->actualPrice;
    }
    public function setDiscountAmount($discountAmount){
       $this->discountAmount = $discountAmount;
    }
    
    public function getDiscountAmount(){
       return $this->discountAmount;
    }
    public function setBatchCode($batchCode){
       $this->batchCode = $batchCode;
    }
    
    public function getBatchCode(){
       return $this->batchCode;
    }
    public function setSerialNo($serialNo){
       $this->serialNo = $serialNo;
    }
    
    public function getSerialNo(){
       return $this->serialNo;
    }
    public function setGoodsLevel($goodsLevel){
       $this->goodsLevel = $goodsLevel;
    }
    
    public function getGoodsLevel(){
       return $this->goodsLevel;
    }
    public function setShopGoodsNo($shopGoodsNo){
       $this->shopGoodsNo = $shopGoodsNo;
    }
    
    public function getShopGoodsNo(){
       return $this->shopGoodsNo;
    }
    public function setPrintName($printName){
       $this->printName = $printName;
    }
    
    public function getPrintName(){
       return $this->printName;
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
    public function setInstallVenderId($installVenderId){
       $this->installVenderId = $installVenderId;
    }
    
    public function getInstallVenderId(){
       return $this->installVenderId;
    }
    public function setVirtualSuiteGoodsNo($virtualSuiteGoodsNo){
       $this->virtualSuiteGoodsNo = $virtualSuiteGoodsNo;
    }
    
    public function getVirtualSuiteGoodsNo(){
       return $this->virtualSuiteGoodsNo;
    }
    public function setVirtualSuiteGoodsName($virtualSuiteGoodsName){
       $this->virtualSuiteGoodsName = $virtualSuiteGoodsName;
    }
    
    public function getVirtualSuiteGoodsName(){
       return $this->virtualSuiteGoodsName;
    }
    public function setVirtualSuiteGoodsQty($virtualSuiteGoodsQty){
       $this->virtualSuiteGoodsQty = $virtualSuiteGoodsQty;
    }
    
    public function getVirtualSuiteGoodsQty(){
       return $this->virtualSuiteGoodsQty;
    }

    public function jsonSerialize() {
        return [
            'orderLineNo' => $this->orderLineNo,             
            'sourceOrderCode' => $this->sourceOrderCode,             
            'subSourceOrderCode' => $this->subSourceOrderCode,             
            'payNo' => $this->payNo,             
            'itemCode' => $this->itemCode,             
            'itemId' => $this->itemId,             
            'extCode' => $this->extCode,             
            'itemName' => $this->itemName,             
            'inventoryType' => $this->inventoryType,             
            'planQty' => $this->planQty,             
            'planOutQty' => $this->planOutQty,             
            'outPackageNo' => $this->outPackageNo,             
            'uomQty' => $this->uomQty,             
            'packageNo' => $this->packageNo,             
            'unitCode' => $this->unitCode,             
            'unitName' => $this->unitName,             
            'retailPrice' => $this->retailPrice,             
            'actualPrice' => $this->actualPrice,             
            'discountAmount' => $this->discountAmount,             
            'batchCode' => $this->batchCode,             
            'serialNo' => $this->serialNo,             
            'goodsLevel' => $this->goodsLevel,             
            'shopGoodsNo' => $this->shopGoodsNo,             
            'printName' => $this->printName,             
            'productDate' => $this->productDate,             
            'expireDate' => $this->expireDate,             
            'installVenderId' => $this->installVenderId,             
            'virtualSuiteGoodsNo' => $this->virtualSuiteGoodsNo,             
            'virtualSuiteGoodsName' => $this->virtualSuiteGoodsName,             
            'virtualSuiteGoodsQty' => $this->virtualSuiteGoodsQty             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->orderLineNo,"orderLineNo");

       RequestCheckUtil::checkString($this->sourceOrderCode,"sourceOrderCode");

       RequestCheckUtil::checkString($this->subSourceOrderCode,"subSourceOrderCode");

       RequestCheckUtil::checkString($this->payNo,"payNo");

       RequestCheckUtil::checkString($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemId,"itemId");

       RequestCheckUtil::checkString($this->extCode,"extCode");

       RequestCheckUtil::checkString($this->itemName,"itemName");

       RequestCheckUtil::checkString($this->inventoryType,"inventoryType");
        RequestCheckUtil::checkNotNull($this->planQty,"planQty");

       RequestCheckUtil::checkNumeric($this->planQty,"planQty");
        RequestCheckUtil::checkNotNull($this->planOutQty,"planOutQty");

       RequestCheckUtil::checkString($this->planOutQty,"planOutQty");

       RequestCheckUtil::checkString($this->outPackageNo,"outPackageNo");

       RequestCheckUtil::checkNumeric($this->uomQty,"uomQty");

       RequestCheckUtil::checkString($this->packageNo,"packageNo");

       RequestCheckUtil::checkString($this->unitCode,"unitCode");

       RequestCheckUtil::checkString($this->unitName,"unitName");

       RequestCheckUtil::checkNumeric($this->retailPrice,"retailPrice");

       RequestCheckUtil::checkNumeric($this->actualPrice,"actualPrice");

       RequestCheckUtil::checkNumeric($this->discountAmount,"discountAmount");

       RequestCheckUtil::checkString($this->batchCode,"batchCode");

       RequestCheckUtil::checkString($this->serialNo,"serialNo");

       RequestCheckUtil::checkString($this->goodsLevel,"goodsLevel");

       RequestCheckUtil::checkString($this->shopGoodsNo,"shopGoodsNo");

       RequestCheckUtil::checkString($this->printName,"printName");

       RequestCheckUtil::checkString($this->productDate,"productDate");

       RequestCheckUtil::checkString($this->expireDate,"expireDate");

       RequestCheckUtil::checkString($this->installVenderId,"installVenderId");

       RequestCheckUtil::checkString($this->virtualSuiteGoodsNo,"virtualSuiteGoodsNo");

       RequestCheckUtil::checkString($this->virtualSuiteGoodsName,"virtualSuiteGoodsName");

       RequestCheckUtil::checkNumeric($this->virtualSuiteGoodsQty,"virtualSuiteGoodsQty");
    }
}
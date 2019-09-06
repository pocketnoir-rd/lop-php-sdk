<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class Item implements JsonSerializable {

    /**
     * 鍟嗗鍟嗗搧缂栫爜锛堟搷浣滅被鍨嬩负add鏃朵笉鑳戒负绌猴級
     */
    private $itemCode;
    /**
     * CLPS鍟嗗搧缂栫爜锛堟搷浣滅被鍨嬩负update鏃朵笉鑳戒负绌猴級锛宻tring (50) 
     */
    private $itemId;
    /**
     * 鍟嗗搧绮惧害(0锛氭暣鏁伴粯璁わ紱1:1浣嶅皬鏁帮紱2:2浣嶅皬鏁帮紱3:3浣嶅皬鏁帮紱4:4浣嶅皬鏁�)
     */
    private $goodsNumFloat;
    /**
     * 搴楅摵缂栫爜锛屽涓敤閫楀彿鍒嗛殧寮�
     */
    private $shopNos;
    /**
     * 渚涘簲鍟嗙紪鐮侊紝string (50)锛堟棤瀹為檯涓氬姟锛�
     */
    private $supplierCode;
    /**
     * 渚涘簲鍟嗗悕绉帮紝string (200)锛堟棤瀹為檯涓氬姟锛�
     */
    private $supplierName;
    /**
     * 璐у彿锛宻tring锛�50锛夛紙鏃犲疄闄呬笟鍔★級
     */
    private $goodsCode;
    /**
     * clps鍟嗗搧缂栫爜锛宻tring锛�50锛夛紙鏃犲疄闄呬笟鍔★紝涓氬姟涓婁娇鐢╥temId锛�
     */
    private $clpsGoodsCode;
    /**
     * 鍟嗗搧鍚嶇О锛岋紙鎿嶄綔绫诲瀷涓篴dd鏃朵笉鑳戒负绌猴級锛宻tring (500)
     */
    private $itemName;
    /**
     * 鍟嗗搧绠�绉帮紝string (200)
     */
    private $shortName;
    /**
     * 鍟嗗搧鑻辨枃鍚嶇О锛宻tring (200)
     */
    private $englishName;
    /**
     * 鍟嗗搧鏉＄爜锛屽涓敤鑻辨枃閫楀彿鍒嗛殧锛堟搷浣滅被鍨嬩负add鏃朵笉鑳戒负绌猴級锛宻tring (500)
     */
    private $barCode;
    /**
     * sku灞炴�э紝锛堟棤瀹為檯涓氬姟锛�
     */
    private $skuProperty;
    /**
     * 鍟嗗搧鏈�灏忚閲忓崟浣嶇紪鐮侊紙鍙緭鍏ユ眽瀛楋級锛宻tring (50)
     */
    private $stockUnitCode;
    /**
     * 鍟嗗搧鏈�灏忚閲忓崟浣嶆弿杩帮紙鏃犲疄闄呬笟鍔★紝浠tockUnitCode涓哄噯锛�
     */
    private $stockUnitDesc;
    /**
     * 闀匡紝Double (18, 2)
     */
    private $length;
    /**
     * 瀹斤紝Double (18, 2)
     */
    private $width;
    /**
     * 楂橈紝Double (18, 2)
     */
    private $height;
    /**
     * 浣撶Н锛孌ouble (18, 3)
     */
    private $volume;
    /**
     * 姣涢噸锛孌ouble (18, 3)
     */
    private $grossWeight;
    /**
     * 鍑�閲嶏紝Double (18, 3)
     */
    private $netWeight;
    /**
     * 棰滆壊锛宻tring (50)
     */
    private $color;
    /**
     * 灏哄锛宻tring (50)
     */
    private $size;
    /**
     * 鏍囬锛宻tring (200)
     */
    private $title;
    /**
     * 鍟嗗搧涓夌骇缂栫爜锛宻tring (50)
     */
    private $categoryId;
    /**
     * 鍟嗗搧涓夌骇鍒嗙被鍚嶇О锛岋紙鏃犲疄闄呬笟鍔★紝浠ヤ笁绾у垎绫荤紪鐮佷负鍑嗭級
     */
    private $categoryName;
    /**
     * 璁′环璐х被锛宻tring (200)锛岋紙鏃犲疄闄呬笟鍔★級
     */
    private $pricingCategory;
    /**
     * 瀹夊叏搴撳瓨锛岋紙鏃犲疄闄呬笟鍔★級
     */
    private $safetyStock;
    /**
     * 鍟嗗搧绫诲瀷(ZC=姝ｅ父鍟嗗搧, FX=鍒嗛攢鍟嗗搧, ZH=缁勫悎鍟嗗搧, ZP=璧犲搧, BC=鍖呮潗, HC=鑰楁潗, FL=杈呮枡, XN=铏氭嫙鍝�,FS=闄勫睘鍝�, CC=娈嬫鍝�, OTHER=鍏跺畠)
     */
    private $itemType;
    /**
     * 鍚婄墝浠凤紙鏃犲疄闄呬笟鍔★級
     */
    private $tagPrice;
    /**
     * 鐪熷疄浠锋牸锛堟棤瀹為檯涓氬姟锛�
     */
    private $retailPrice;
    /**
     * 鎴愭湰浠凤紙鏃犲疄闄呬笟鍔★級
     */
    private $costPrice;
    /**
     * 閲囪喘浠凤紙鏃犲疄闄呬笟鍔★級
     */
    private $purchasePrice;
    /**
     * 瀛ｈ妭缂栫爜锛堟棤瀹為檯涓氬姟锛�
     */
    private $seasonCode;
    /**
     * 瀛ｈ妭鍚嶇О锛堟棤瀹為檯涓氬姟锛�
     */
    private $seasonName;
    /**
     * 鍝佺墝浠ｇ爜锛宻tring (50)
     */
    private $brandCode;
    /**
     * 鍝佺墝鍚嶇О锛宻tring (50)
     */
    private $brandName;
    /**
     * 鏄惁闇�瑕佸簭鍒楀彿绠＄悊(Y/N)
     */
    private $isSNMgmt;
    /**
     * 鐢熶骇鏃ユ湡锛堟棤瀹為檯涓氬姟锛�
     */
    private $productDate;
    /**
     * 杩囨湡鏃ユ湡锛堟棤瀹為檯涓氬姟锛�
     */
    private $expireDate;
    /**
     * 鏄惁闇�瑕佷繚璐ㄦ湡绠＄悊(Y/N)
     */
    private $isShelfLifeMgmt;
    /**
     * 淇濊川鏈�(澶╂暟)锛孖nteger
     */
    private $shelfLife;
    /**
     * 淇濊川鏈熺鏀跺ぉ鏁帮紝Integer锛岋紙鏃犲疄闄呬笟鍔★級
     */
    private $rejectLifecycle;
    /**
     * 淇濊川鏈熺鍞ぉ鏁帮紙鏃犲疄闄呬笟鍔★級
     */
    private $lockupLifecycle;
    /**
     * 淇濊川鏈熶复鏈熼璀﹀ぉ鏁帮紙鏃犲疄闄呬笟鍔★級
     */
    private $adventLifecycle;
    /**
     * 鏄惁闇�瑕佹壒娆＄鐞�(Y/N)
     */
    private $isBatchMgmt;
    /**
     * 鎵规浠ｇ爜锛宻tring (50)锛堟棤瀹為檯涓氬姟锛�
     */
    private $batchCode;
    /**
     * 鎵规澶囨敞锛宻tring (200)锛堟棤瀹為檯涓氬姟锛�
     */
    private $batchRemark;
    /**
     * 鍟嗗搧鐨勫師浜у湴锛宻tring (50)
     */
    private $originAddress;
    /**
     * 鎵瑰噯鏂囧彿锛堟棤瀹為檯涓氬姟锛�
     */
    private $approvalNumber;
    /**
     * 鏄惁鏄撶鍝�(Y/N)
     */
    private $isFragile;
    /**
     * 鏄惁鍗遍櫓鍝�(Y/N锛�
     */
    private $isHazardous;
    /**
     * 澶囨敞锛堟棤瀹為檯涓氬姟锛�
     */
    private $remark;
    /**
     * 鍒涘缓鏃堕棿锛堟棤瀹為檯涓氬姟锛�
     */
    private $createTime;
    /**
     * 鏇存柊鏃堕棿锛堟棤瀹為檯涓氬姟锛�
     */
    private $updateTime;
    /**
     * 鏄惁鏈夋晥(Y/N)
     */
    private $isValid;
    /**
     * 鏄惁sku(Y/N)
     */
    private $isSku;
    /**
     * 鍟嗗搧鍖呰鏉愭枡绫诲瀷锛堟棤瀹為檯涓氬姟锛�
     */
    private $packageMaterial;
    /**
     * 鍟嗗鍟嗗搧鏍囪瘑锛孲tring锛�50锛�
     */
    private $sellerGoodsSign;
    /**
     * 閿�鍞钩鍙板晢鍝佺紪鐮侊紝String锛�500锛�
     */
    private $spGoodsNo;
    /**
     * 鍏ュ簱淇濊川鏈熼榾鍊硷紝Float
     */
    private $instoreThreshold;
    /**
     * 鍑哄簱淇濊川鏈熼榾鍊硷紝Float
     */
    private $outstoreThreshold;
    /**
     * 鐢熶骇鍘傚晢锛孲tring锛�50锛�
     */
    private $manufacturer;
    /**
     * 鍟嗗搧浠跺瀷锛孲tring锛�20锛�
     */
    private $sizeDefinition;
    /**
     * 鏄惁浣庡�艰禒鍝�(Y/N)
     */
    private $cheapGift;
    /**
     * 鏄惁璐ㄦ鍝�(Y/N)
     */
    private $quality;
    /**
     * 鏄惁楂樺��(Y/N)
     */
    private $expensive;
    /**
     * 鏄惁濂緢鍝�(Y/N)
     */
    private $luxury;
    /**
     * 鏄惁娑蹭綋(Y/N)
     */
    private $liquid;
    /**
     * 鏄惁鑰楁潗(Y/N)
     */
    private $consumables;
    /**
     * 鏄惁寮傚舰(Y/N)
     */
    private $abnormal;
    /**
     * 鏄惁杩涘彛鍟嗗搧(Y/N)
     */
    private $imported;
    /**
     * 鏄惁淇濋敭鍝�(Y/N)
     */
    private $health;
    /**
     * 鏄惁娓╁害鎺у埗(Y/N)
     */
    private $temperature;
    /**
     * 娓╁害涓婇檺锛孲tring锛�20锛�
     */
    private $temperatureCeil;
    /**
     * 娓╁害涓嬮檺锛孲tring锛�20锛�
     */
    private $temperatureFloor;
    /**
     * 鏄惁婀垮害鎺у埗(Y/N)
     */
    private $humidity;
    /**
     * 婀垮害涓婇檺锛孲tring锛�20锛�
     */
    private $humidityCeil;
    /**
     * 婀垮害涓嬮檺锛孲tring锛�20锛�
     */
    private $humidityFloor;
    /**
     * 鏄惁涓嶅彲绉诲姩(Y/N)
     */
    private $movable;
    /**
     * 鏄惁3g璧勮垂(Y/N)
     */
    private $service3g;
    /**
     * 鏄惁妫�楠屾牱鍝�(Y/N)
     */
    private $sample;
    /**
     * 鏄惁瀹规槗涓插懗(Y/N)
     */
    private $odor;
    /**
     * 鏄惁鎴愬勾鐢ㄥ搧(Y/N)
     */
    private $sex;
    /**
     * 鏄惁璐靛搧(Y/N)
     */
    private $precious;
    /**
     * 鏄惁鍙贩鎵规瀛樻斁(N/Y)
     */
    private $mixedBatch;
    /**
     * 娆惧彿锛孲tring锛�50锛�
     */
    private $fashionNo;
    /**
     * 鏄惁瀹氬埗鍝�(N/Y)
     */
    private $customMade;
    /**
     * 鑸┖鏍囪锛堟棤瀹為檯涓氬姟锛�
     */
    private $airMark;
    /**
     * 鍔犲伐鎹熻�楃巼锛堟棤瀹為檯涓氬姟锛�
     */
    private $lossRate;
    /**
     * 鍔犲伐鎹熻�楃巼锛堟棤瀹為檯涓氬姟锛�
     */
    private $sellPeriod;
    /**
     * 鏄惁閰嶇爜绠�(N/Y)锛堟棤瀹為檯涓氬姟锛�
     */
    private $isPMX;
    /**
     * 璐ㄦ姣斾緥 1~100锛堟棤瀹為檯涓氬姟锛�
     */
    private $qualityCheckRate;
    /**
     * 浜у搧瀛ｏ紙鏃犲疄闄呬笟鍔★級
     */
    private $productSeason;
    /**
     * 鐗╂枡缂栧彿锛堟棤瀹為檯涓氬姟锛�
     */
    private $materialNo;
    /**
     * 鎵撳嵃鍟嗗搧缂栫爜锛堟棤瀹為檯涓氬姟锛�
     */
    private $prIntegerProductId;
    /**
     * 鎵撳嵃鍟嗗搧鍚嶇О锛堟棤瀹為檯涓氬姟锛�
     */
    private $prIntegerName;
    /**
     * 缁勫悎鍟嗗搧,2:鐪熷疄濂楃粍锛�1:铏氭嫙缁勫悎鍟嗗搧锛�0:鍗曞搧锛堟棤瀹為檯涓氬姟锛�
     */
    private $bundleFlag;
    /**
     * 鑽搧鍒嗙被锛岃嵂鍝佸繀濉�
     */
    private $productCategory;
    /**
     * 鏄惁涓鸿嵂鍝�(Y/N)
     */
    private $category;
    /**
     * 鍌ㄥ瓨鏉′欢锛屽尰鑽繀濉紝String(50)
     */
    private $storage;
    /**
     * 鑽搧绫诲瀷锛孲tring(50)
     */
    private $type;
    /**
     * 鑽搧瑙勬牸锛孲tring(50)
     */
    private $specification;
    /**
     * 鑽搧閫氱敤鍚嶏紝String(50)
     */
    private $genericName;
    /**
     * 浣跨敤鍓傞噺锛堟棤瀹為檯涓氬姟锛�
     */
    private $dosage;
    /**
     * 浣跨敤鏂规硶锛孲tring(50)
     */
    private $useMethods;
    /**
     * 鍖呰閲忥紝String(50)
     */
    private $packingUnit;
    /**
     * 鍔熻兘涓绘不璇曠敤鐥囷紝String(50)
     */
    private $efficacy;
    /**
     * 娉ㄥ唽璇佸彿锛屽尰鑽繀濉紝String(50)
     */
    private $registrationNum;
    /**
     * 鎵瑰噯鏂囧彿锛堟棤瀹為檯涓氬姟锛�
     */
    private $approvalNum;
    /**
     * 鍏绘姢绫诲瀷锛孖nteger
     */
    private $curingType;
    /**
     * 鍏绘姢鍛ㄦ湡(澶�)锛孖nteger
     */
    private $curingPeriod;
    /**
     * 瀛樺偍鏉′欢(娓╁眰)锛孲tring(50)
     */
    private $warmLayer;
    /**
     * 璐ㄦ妫�鏌ョ被鍨嬶紙鏃犲疄闄呬笟鍔★級
     */
    private $qualifyTypes;
    /**
     * 鍓傚瀷锛孖nteger
     */
    private $doseType;
    /**
     * 鍖呰绛栫暐鍒楄〃
     */
    private $packRules;

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
    public function setGoodsNumFloat($goodsNumFloat){
       $this->goodsNumFloat = $goodsNumFloat;
    }
    
    public function getGoodsNumFloat(){
       return $this->goodsNumFloat;
    }
    public function setShopNos($shopNos){
       $this->shopNos = $shopNos;
    }
    
    public function getShopNos(){
       return $this->shopNos;
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
    public function setGoodsCode($goodsCode){
       $this->goodsCode = $goodsCode;
    }
    
    public function getGoodsCode(){
       return $this->goodsCode;
    }
    public function setClpsGoodsCode($clpsGoodsCode){
       $this->clpsGoodsCode = $clpsGoodsCode;
    }
    
    public function getClpsGoodsCode(){
       return $this->clpsGoodsCode;
    }
    public function setItemName($itemName){
       $this->itemName = $itemName;
    }
    
    public function getItemName(){
       return $this->itemName;
    }
    public function setShortName($shortName){
       $this->shortName = $shortName;
    }
    
    public function getShortName(){
       return $this->shortName;
    }
    public function setEnglishName($englishName){
       $this->englishName = $englishName;
    }
    
    public function getEnglishName(){
       return $this->englishName;
    }
    public function setBarCode($barCode){
       $this->barCode = $barCode;
    }
    
    public function getBarCode(){
       return $this->barCode;
    }
    public function setSkuProperty($skuProperty){
       $this->skuProperty = $skuProperty;
    }
    
    public function getSkuProperty(){
       return $this->skuProperty;
    }
    public function setStockUnitCode($stockUnitCode){
       $this->stockUnitCode = $stockUnitCode;
    }
    
    public function getStockUnitCode(){
       return $this->stockUnitCode;
    }
    public function setStockUnitDesc($stockUnitDesc){
       $this->stockUnitDesc = $stockUnitDesc;
    }
    
    public function getStockUnitDesc(){
       return $this->stockUnitDesc;
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
    public function setGrossWeight($grossWeight){
       $this->grossWeight = $grossWeight;
    }
    
    public function getGrossWeight(){
       return $this->grossWeight;
    }
    public function setNetWeight($netWeight){
       $this->netWeight = $netWeight;
    }
    
    public function getNetWeight(){
       return $this->netWeight;
    }
    public function setColor($color){
       $this->color = $color;
    }
    
    public function getColor(){
       return $this->color;
    }
    public function setSize($size){
       $this->size = $size;
    }
    
    public function getSize(){
       return $this->size;
    }
    public function setTitle($title){
       $this->title = $title;
    }
    
    public function getTitle(){
       return $this->title;
    }
    public function setCategoryId($categoryId){
       $this->categoryId = $categoryId;
    }
    
    public function getCategoryId(){
       return $this->categoryId;
    }
    public function setCategoryName($categoryName){
       $this->categoryName = $categoryName;
    }
    
    public function getCategoryName(){
       return $this->categoryName;
    }
    public function setPricingCategory($pricingCategory){
       $this->pricingCategory = $pricingCategory;
    }
    
    public function getPricingCategory(){
       return $this->pricingCategory;
    }
    public function setSafetyStock($safetyStock){
       $this->safetyStock = $safetyStock;
    }
    
    public function getSafetyStock(){
       return $this->safetyStock;
    }
    public function setItemType($itemType){
       $this->itemType = $itemType;
    }
    
    public function getItemType(){
       return $this->itemType;
    }
    public function setTagPrice($tagPrice){
       $this->tagPrice = $tagPrice;
    }
    
    public function getTagPrice(){
       return $this->tagPrice;
    }
    public function setRetailPrice($retailPrice){
       $this->retailPrice = $retailPrice;
    }
    
    public function getRetailPrice(){
       return $this->retailPrice;
    }
    public function setCostPrice($costPrice){
       $this->costPrice = $costPrice;
    }
    
    public function getCostPrice(){
       return $this->costPrice;
    }
    public function setPurchasePrice($purchasePrice){
       $this->purchasePrice = $purchasePrice;
    }
    
    public function getPurchasePrice(){
       return $this->purchasePrice;
    }
    public function setSeasonCode($seasonCode){
       $this->seasonCode = $seasonCode;
    }
    
    public function getSeasonCode(){
       return $this->seasonCode;
    }
    public function setSeasonName($seasonName){
       $this->seasonName = $seasonName;
    }
    
    public function getSeasonName(){
       return $this->seasonName;
    }
    public function setBrandCode($brandCode){
       $this->brandCode = $brandCode;
    }
    
    public function getBrandCode(){
       return $this->brandCode;
    }
    public function setBrandName($brandName){
       $this->brandName = $brandName;
    }
    
    public function getBrandName(){
       return $this->brandName;
    }
    public function setIsSNMgmt($isSNMgmt){
       $this->isSNMgmt = $isSNMgmt;
    }
    
    public function getIsSNMgmt(){
       return $this->isSNMgmt;
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
    public function setIsShelfLifeMgmt($isShelfLifeMgmt){
       $this->isShelfLifeMgmt = $isShelfLifeMgmt;
    }
    
    public function getIsShelfLifeMgmt(){
       return $this->isShelfLifeMgmt;
    }
    public function setShelfLife($shelfLife){
       $this->shelfLife = $shelfLife;
    }
    
    public function getShelfLife(){
       return $this->shelfLife;
    }
    public function setRejectLifecycle($rejectLifecycle){
       $this->rejectLifecycle = $rejectLifecycle;
    }
    
    public function getRejectLifecycle(){
       return $this->rejectLifecycle;
    }
    public function setLockupLifecycle($lockupLifecycle){
       $this->lockupLifecycle = $lockupLifecycle;
    }
    
    public function getLockupLifecycle(){
       return $this->lockupLifecycle;
    }
    public function setAdventLifecycle($adventLifecycle){
       $this->adventLifecycle = $adventLifecycle;
    }
    
    public function getAdventLifecycle(){
       return $this->adventLifecycle;
    }
    public function setIsBatchMgmt($isBatchMgmt){
       $this->isBatchMgmt = $isBatchMgmt;
    }
    
    public function getIsBatchMgmt(){
       return $this->isBatchMgmt;
    }
    public function setBatchCode($batchCode){
       $this->batchCode = $batchCode;
    }
    
    public function getBatchCode(){
       return $this->batchCode;
    }
    public function setBatchRemark($batchRemark){
       $this->batchRemark = $batchRemark;
    }
    
    public function getBatchRemark(){
       return $this->batchRemark;
    }
    public function setOriginAddress($originAddress){
       $this->originAddress = $originAddress;
    }
    
    public function getOriginAddress(){
       return $this->originAddress;
    }
    public function setApprovalNumber($approvalNumber){
       $this->approvalNumber = $approvalNumber;
    }
    
    public function getApprovalNumber(){
       return $this->approvalNumber;
    }
    public function setIsFragile($isFragile){
       $this->isFragile = $isFragile;
    }
    
    public function getIsFragile(){
       return $this->isFragile;
    }
    public function setIsHazardous($isHazardous){
       $this->isHazardous = $isHazardous;
    }
    
    public function getIsHazardous(){
       return $this->isHazardous;
    }
    public function setRemark($remark){
       $this->remark = $remark;
    }
    
    public function getRemark(){
       return $this->remark;
    }
    public function setCreateTime($createTime){
       $this->createTime = $createTime;
    }
    
    public function getCreateTime(){
       return $this->createTime;
    }
    public function setUpdateTime($updateTime){
       $this->updateTime = $updateTime;
    }
    
    public function getUpdateTime(){
       return $this->updateTime;
    }
    public function setIsValid($isValid){
       $this->isValid = $isValid;
    }
    
    public function getIsValid(){
       return $this->isValid;
    }
    public function setIsSku($isSku){
       $this->isSku = $isSku;
    }
    
    public function getIsSku(){
       return $this->isSku;
    }
    public function setPackageMaterial($packageMaterial){
       $this->packageMaterial = $packageMaterial;
    }
    
    public function getPackageMaterial(){
       return $this->packageMaterial;
    }
    public function setSellerGoodsSign($sellerGoodsSign){
       $this->sellerGoodsSign = $sellerGoodsSign;
    }
    
    public function getSellerGoodsSign(){
       return $this->sellerGoodsSign;
    }
    public function setSpGoodsNo($spGoodsNo){
       $this->spGoodsNo = $spGoodsNo;
    }
    
    public function getSpGoodsNo(){
       return $this->spGoodsNo;
    }
    public function setInstoreThreshold($instoreThreshold){
       $this->instoreThreshold = $instoreThreshold;
    }
    
    public function getInstoreThreshold(){
       return $this->instoreThreshold;
    }
    public function setOutstoreThreshold($outstoreThreshold){
       $this->outstoreThreshold = $outstoreThreshold;
    }
    
    public function getOutstoreThreshold(){
       return $this->outstoreThreshold;
    }
    public function setManufacturer($manufacturer){
       $this->manufacturer = $manufacturer;
    }
    
    public function getManufacturer(){
       return $this->manufacturer;
    }
    public function setSizeDefinition($sizeDefinition){
       $this->sizeDefinition = $sizeDefinition;
    }
    
    public function getSizeDefinition(){
       return $this->sizeDefinition;
    }
    public function setCheapGift($cheapGift){
       $this->cheapGift = $cheapGift;
    }
    
    public function getCheapGift(){
       return $this->cheapGift;
    }
    public function setQuality($quality){
       $this->quality = $quality;
    }
    
    public function getQuality(){
       return $this->quality;
    }
    public function setExpensive($expensive){
       $this->expensive = $expensive;
    }
    
    public function getExpensive(){
       return $this->expensive;
    }
    public function setLuxury($luxury){
       $this->luxury = $luxury;
    }
    
    public function getLuxury(){
       return $this->luxury;
    }
    public function setLiquid($liquid){
       $this->liquid = $liquid;
    }
    
    public function getLiquid(){
       return $this->liquid;
    }
    public function setConsumables($consumables){
       $this->consumables = $consumables;
    }
    
    public function getConsumables(){
       return $this->consumables;
    }
    public function setAbnormal($abnormal){
       $this->abnormal = $abnormal;
    }
    
    public function getAbnormal(){
       return $this->abnormal;
    }
    public function setImported($imported){
       $this->imported = $imported;
    }
    
    public function getImported(){
       return $this->imported;
    }
    public function setHealth($health){
       $this->health = $health;
    }
    
    public function getHealth(){
       return $this->health;
    }
    public function setTemperature($temperature){
       $this->temperature = $temperature;
    }
    
    public function getTemperature(){
       return $this->temperature;
    }
    public function setTemperatureCeil($temperatureCeil){
       $this->temperatureCeil = $temperatureCeil;
    }
    
    public function getTemperatureCeil(){
       return $this->temperatureCeil;
    }
    public function setTemperatureFloor($temperatureFloor){
       $this->temperatureFloor = $temperatureFloor;
    }
    
    public function getTemperatureFloor(){
       return $this->temperatureFloor;
    }
    public function setHumidity($humidity){
       $this->humidity = $humidity;
    }
    
    public function getHumidity(){
       return $this->humidity;
    }
    public function setHumidityCeil($humidityCeil){
       $this->humidityCeil = $humidityCeil;
    }
    
    public function getHumidityCeil(){
       return $this->humidityCeil;
    }
    public function setHumidityFloor($humidityFloor){
       $this->humidityFloor = $humidityFloor;
    }
    
    public function getHumidityFloor(){
       return $this->humidityFloor;
    }
    public function setMovable($movable){
       $this->movable = $movable;
    }
    
    public function getMovable(){
       return $this->movable;
    }
    public function setService3g($service3g){
       $this->service3g = $service3g;
    }
    
    public function getService3g(){
       return $this->service3g;
    }
    public function setSample($sample){
       $this->sample = $sample;
    }
    
    public function getSample(){
       return $this->sample;
    }
    public function setOdor($odor){
       $this->odor = $odor;
    }
    
    public function getOdor(){
       return $this->odor;
    }
    public function setSex($sex){
       $this->sex = $sex;
    }
    
    public function getSex(){
       return $this->sex;
    }
    public function setPrecious($precious){
       $this->precious = $precious;
    }
    
    public function getPrecious(){
       return $this->precious;
    }
    public function setMixedBatch($mixedBatch){
       $this->mixedBatch = $mixedBatch;
    }
    
    public function getMixedBatch(){
       return $this->mixedBatch;
    }
    public function setFashionNo($fashionNo){
       $this->fashionNo = $fashionNo;
    }
    
    public function getFashionNo(){
       return $this->fashionNo;
    }
    public function setCustomMade($customMade){
       $this->customMade = $customMade;
    }
    
    public function getCustomMade(){
       return $this->customMade;
    }
    public function setAirMark($airMark){
       $this->airMark = $airMark;
    }
    
    public function getAirMark(){
       return $this->airMark;
    }
    public function setLossRate($lossRate){
       $this->lossRate = $lossRate;
    }
    
    public function getLossRate(){
       return $this->lossRate;
    }
    public function setSellPeriod($sellPeriod){
       $this->sellPeriod = $sellPeriod;
    }
    
    public function getSellPeriod(){
       return $this->sellPeriod;
    }
    public function setIsPMX($isPMX){
       $this->isPMX = $isPMX;
    }
    
    public function getIsPMX(){
       return $this->isPMX;
    }
    public function setQualityCheckRate($qualityCheckRate){
       $this->qualityCheckRate = $qualityCheckRate;
    }
    
    public function getQualityCheckRate(){
       return $this->qualityCheckRate;
    }
    public function setProductSeason($productSeason){
       $this->productSeason = $productSeason;
    }
    
    public function getProductSeason(){
       return $this->productSeason;
    }
    public function setMaterialNo($materialNo){
       $this->materialNo = $materialNo;
    }
    
    public function getMaterialNo(){
       return $this->materialNo;
    }
    public function setPrIntegerProductId($prIntegerProductId){
       $this->prIntegerProductId = $prIntegerProductId;
    }
    
    public function getPrIntegerProductId(){
       return $this->prIntegerProductId;
    }
    public function setPrIntegerName($prIntegerName){
       $this->prIntegerName = $prIntegerName;
    }
    
    public function getPrIntegerName(){
       return $this->prIntegerName;
    }
    public function setBundleFlag($bundleFlag){
       $this->bundleFlag = $bundleFlag;
    }
    
    public function getBundleFlag(){
       return $this->bundleFlag;
    }
    public function setProductCategory($productCategory){
       $this->productCategory = $productCategory;
    }
    
    public function getProductCategory(){
       return $this->productCategory;
    }
    public function setCategory($category){
       $this->category = $category;
    }
    
    public function getCategory(){
       return $this->category;
    }
    public function setStorage($storage){
       $this->storage = $storage;
    }
    
    public function getStorage(){
       return $this->storage;
    }
    public function setType($type){
       $this->type = $type;
    }
    
    public function getType(){
       return $this->type;
    }
    public function setSpecification($specification){
       $this->specification = $specification;
    }
    
    public function getSpecification(){
       return $this->specification;
    }
    public function setGenericName($genericName){
       $this->genericName = $genericName;
    }
    
    public function getGenericName(){
       return $this->genericName;
    }
    public function setDosage($dosage){
       $this->dosage = $dosage;
    }
    
    public function getDosage(){
       return $this->dosage;
    }
    public function setUseMethods($useMethods){
       $this->useMethods = $useMethods;
    }
    
    public function getUseMethods(){
       return $this->useMethods;
    }
    public function setPackingUnit($packingUnit){
       $this->packingUnit = $packingUnit;
    }
    
    public function getPackingUnit(){
       return $this->packingUnit;
    }
    public function setEfficacy($efficacy){
       $this->efficacy = $efficacy;
    }
    
    public function getEfficacy(){
       return $this->efficacy;
    }
    public function setRegistrationNum($registrationNum){
       $this->registrationNum = $registrationNum;
    }
    
    public function getRegistrationNum(){
       return $this->registrationNum;
    }
    public function setApprovalNum($approvalNum){
       $this->approvalNum = $approvalNum;
    }
    
    public function getApprovalNum(){
       return $this->approvalNum;
    }
    public function setCuringType($curingType){
       $this->curingType = $curingType;
    }
    
    public function getCuringType(){
       return $this->curingType;
    }
    public function setCuringPeriod($curingPeriod){
       $this->curingPeriod = $curingPeriod;
    }
    
    public function getCuringPeriod(){
       return $this->curingPeriod;
    }
    public function setWarmLayer($warmLayer){
       $this->warmLayer = $warmLayer;
    }
    
    public function getWarmLayer(){
       return $this->warmLayer;
    }
    public function setQualifyTypes($qualifyTypes){
       $this->qualifyTypes = $qualifyTypes;
    }
    
    public function getQualifyTypes(){
       return $this->qualifyTypes;
    }
    public function setDoseType($doseType){
       $this->doseType = $doseType;
    }
    
    public function getDoseType(){
       return $this->doseType;
    }
    public function setPackRules($packRules){
       $this->packRules = $packRules;
    }
    
    public function getPackRules(){
       return $this->packRules;
    }

    public function jsonSerialize() {
        return [
            'itemCode' => $this->itemCode,             
            'itemId' => $this->itemId,             
            'goodsNumFloat' => $this->goodsNumFloat,             
            'shopNos' => $this->shopNos,             
            'supplierCode' => $this->supplierCode,             
            'supplierName' => $this->supplierName,             
            'goodsCode' => $this->goodsCode,             
            'clpsGoodsCode' => $this->clpsGoodsCode,             
            'itemName' => $this->itemName,             
            'shortName' => $this->shortName,             
            'englishName' => $this->englishName,             
            'barCode' => $this->barCode,             
            'skuProperty' => $this->skuProperty,             
            'stockUnitCode' => $this->stockUnitCode,             
            'stockUnitDesc' => $this->stockUnitDesc,             
            'length' => $this->length,             
            'width' => $this->width,             
            'height' => $this->height,             
            'volume' => $this->volume,             
            'grossWeight' => $this->grossWeight,             
            'netWeight' => $this->netWeight,             
            'color' => $this->color,             
            'size' => $this->size,             
            'title' => $this->title,             
            'categoryId' => $this->categoryId,             
            'categoryName' => $this->categoryName,             
            'pricingCategory' => $this->pricingCategory,             
            'safetyStock' => $this->safetyStock,             
            'itemType' => $this->itemType,             
            'tagPrice' => $this->tagPrice,             
            'retailPrice' => $this->retailPrice,             
            'costPrice' => $this->costPrice,             
            'purchasePrice' => $this->purchasePrice,             
            'seasonCode' => $this->seasonCode,             
            'seasonName' => $this->seasonName,             
            'brandCode' => $this->brandCode,             
            'brandName' => $this->brandName,             
            'isSNMgmt' => $this->isSNMgmt,             
            'productDate' => $this->productDate,             
            'expireDate' => $this->expireDate,             
            'isShelfLifeMgmt' => $this->isShelfLifeMgmt,             
            'shelfLife' => $this->shelfLife,             
            'rejectLifecycle' => $this->rejectLifecycle,             
            'lockupLifecycle' => $this->lockupLifecycle,             
            'adventLifecycle' => $this->adventLifecycle,             
            'isBatchMgmt' => $this->isBatchMgmt,             
            'batchCode' => $this->batchCode,             
            'batchRemark' => $this->batchRemark,             
            'originAddress' => $this->originAddress,             
            'approvalNumber' => $this->approvalNumber,             
            'isFragile' => $this->isFragile,             
            'isHazardous' => $this->isHazardous,             
            'remark' => $this->remark,             
            'createTime' => $this->createTime,             
            'updateTime' => $this->updateTime,             
            'isValid' => $this->isValid,             
            'isSku' => $this->isSku,             
            'packageMaterial' => $this->packageMaterial,             
            'sellerGoodsSign' => $this->sellerGoodsSign,             
            'spGoodsNo' => $this->spGoodsNo,             
            'instoreThreshold' => $this->instoreThreshold,             
            'outstoreThreshold' => $this->outstoreThreshold,             
            'manufacturer' => $this->manufacturer,             
            'sizeDefinition' => $this->sizeDefinition,             
            'cheapGift' => $this->cheapGift,             
            'quality' => $this->quality,             
            'expensive' => $this->expensive,             
            'luxury' => $this->luxury,             
            'liquid' => $this->liquid,             
            'consumables' => $this->consumables,             
            'abnormal' => $this->abnormal,             
            'imported' => $this->imported,             
            'health' => $this->health,             
            'temperature' => $this->temperature,             
            'temperatureCeil' => $this->temperatureCeil,             
            'temperatureFloor' => $this->temperatureFloor,             
            'humidity' => $this->humidity,             
            'humidityCeil' => $this->humidityCeil,             
            'humidityFloor' => $this->humidityFloor,             
            'movable' => $this->movable,             
            'service3g' => $this->service3g,             
            'sample' => $this->sample,             
            'odor' => $this->odor,             
            'sex' => $this->sex,             
            'precious' => $this->precious,             
            'mixedBatch' => $this->mixedBatch,             
            'fashionNo' => $this->fashionNo,             
            'customMade' => $this->customMade,             
            'airMark' => $this->airMark,             
            'lossRate' => $this->lossRate,             
            'sellPeriod' => $this->sellPeriod,             
            'isPMX' => $this->isPMX,             
            'qualityCheckRate' => $this->qualityCheckRate,             
            'productSeason' => $this->productSeason,             
            'materialNo' => $this->materialNo,             
            'prIntegerProductId' => $this->prIntegerProductId,             
            'prIntegerName' => $this->prIntegerName,             
            'bundleFlag' => $this->bundleFlag,             
            'productCategory' => $this->productCategory,             
            'category' => $this->category,             
            'storage' => $this->storage,             
            'type' => $this->type,             
            'specification' => $this->specification,             
            'genericName' => $this->genericName,             
            'dosage' => $this->dosage,             
            'useMethods' => $this->useMethods,             
            'packingUnit' => $this->packingUnit,             
            'efficacy' => $this->efficacy,             
            'registrationNum' => $this->registrationNum,             
            'approvalNum' => $this->approvalNum,             
            'curingType' => $this->curingType,             
            'curingPeriod' => $this->curingPeriod,             
            'warmLayer' => $this->warmLayer,             
            'qualifyTypes' => $this->qualifyTypes,             
            'doseType' => $this->doseType,             
            'packRules' => $this->packRules             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemCode,"itemCode");

       RequestCheckUtil::checkString($this->itemId,"itemId");

       RequestCheckUtil::checkObject($this->goodsNumFloat,"goodsNumFloat");
       if(isset($this->goodsNumFloat) && method_exists($this->goodsNumFloat,"check")) {
           $this->goodsNumFloat->check();
       }        

       RequestCheckUtil::checkString($this->shopNos,"shopNos");

       RequestCheckUtil::checkString($this->supplierCode,"supplierCode");

       RequestCheckUtil::checkString($this->supplierName,"supplierName");

       RequestCheckUtil::checkString($this->goodsCode,"goodsCode");

       RequestCheckUtil::checkString($this->clpsGoodsCode,"clpsGoodsCode");

       RequestCheckUtil::checkString($this->itemName,"itemName");

       RequestCheckUtil::checkString($this->shortName,"shortName");

       RequestCheckUtil::checkString($this->englishName,"englishName");

       RequestCheckUtil::checkString($this->barCode,"barCode");

       RequestCheckUtil::checkString($this->skuProperty,"skuProperty");

       RequestCheckUtil::checkString($this->stockUnitCode,"stockUnitCode");

       RequestCheckUtil::checkString($this->stockUnitDesc,"stockUnitDesc");

       RequestCheckUtil::checkNumeric($this->length,"length");

       RequestCheckUtil::checkNumeric($this->width,"width");

       RequestCheckUtil::checkNumeric($this->height,"height");

       RequestCheckUtil::checkNumeric($this->volume,"volume");

       RequestCheckUtil::checkNumeric($this->grossWeight,"grossWeight");

       RequestCheckUtil::checkNumeric($this->netWeight,"netWeight");

       RequestCheckUtil::checkString($this->color,"color");

       RequestCheckUtil::checkString($this->size,"size");

       RequestCheckUtil::checkString($this->title,"title");

       RequestCheckUtil::checkString($this->categoryId,"categoryId");

       RequestCheckUtil::checkString($this->categoryName,"categoryName");

       RequestCheckUtil::checkString($this->pricingCategory,"pricingCategory");

       RequestCheckUtil::checkString($this->safetyStock,"safetyStock");

       RequestCheckUtil::checkString($this->itemType,"itemType");

       RequestCheckUtil::checkNumeric($this->tagPrice,"tagPrice");

       RequestCheckUtil::checkNumeric($this->retailPrice,"retailPrice");

       RequestCheckUtil::checkNumeric($this->costPrice,"costPrice");

       RequestCheckUtil::checkNumeric($this->purchasePrice,"purchasePrice");

       RequestCheckUtil::checkString($this->seasonCode,"seasonCode");

       RequestCheckUtil::checkString($this->seasonName,"seasonName");

       RequestCheckUtil::checkString($this->brandCode,"brandCode");

       RequestCheckUtil::checkString($this->brandName,"brandName");

       RequestCheckUtil::checkString($this->isSNMgmt,"isSNMgmt");

       RequestCheckUtil::checkString($this->productDate,"productDate");

       RequestCheckUtil::checkString($this->expireDate,"expireDate");

       RequestCheckUtil::checkString($this->isShelfLifeMgmt,"isShelfLifeMgmt");

       RequestCheckUtil::checkNumeric($this->shelfLife,"shelfLife");

       RequestCheckUtil::checkNumeric($this->rejectLifecycle,"rejectLifecycle");

       RequestCheckUtil::checkNumeric($this->lockupLifecycle,"lockupLifecycle");

       RequestCheckUtil::checkNumeric($this->adventLifecycle,"adventLifecycle");

       RequestCheckUtil::checkString($this->isBatchMgmt,"isBatchMgmt");

       RequestCheckUtil::checkString($this->batchCode,"batchCode");

       RequestCheckUtil::checkString($this->batchRemark,"batchRemark");

       RequestCheckUtil::checkString($this->originAddress,"originAddress");

       RequestCheckUtil::checkString($this->approvalNumber,"approvalNumber");

       RequestCheckUtil::checkString($this->isFragile,"isFragile");

       RequestCheckUtil::checkString($this->isHazardous,"isHazardous");

       RequestCheckUtil::checkString($this->remark,"remark");

       RequestCheckUtil::checkString($this->createTime,"createTime");

       RequestCheckUtil::checkString($this->updateTime,"updateTime");

       RequestCheckUtil::checkString($this->isValid,"isValid");

       RequestCheckUtil::checkString($this->isSku,"isSku");

       RequestCheckUtil::checkString($this->packageMaterial,"packageMaterial");

       RequestCheckUtil::checkString($this->sellerGoodsSign,"sellerGoodsSign");

       RequestCheckUtil::checkString($this->spGoodsNo,"spGoodsNo");

       RequestCheckUtil::checkNumeric($this->instoreThreshold,"instoreThreshold");

       RequestCheckUtil::checkNumeric($this->outstoreThreshold,"outstoreThreshold");

       RequestCheckUtil::checkString($this->manufacturer,"manufacturer");

       RequestCheckUtil::checkString($this->sizeDefinition,"sizeDefinition");

       RequestCheckUtil::checkString($this->cheapGift,"cheapGift");

       RequestCheckUtil::checkString($this->quality,"quality");

       RequestCheckUtil::checkString($this->expensive,"expensive");

       RequestCheckUtil::checkString($this->luxury,"luxury");

       RequestCheckUtil::checkString($this->liquid,"liquid");

       RequestCheckUtil::checkString($this->consumables,"consumables");

       RequestCheckUtil::checkString($this->abnormal,"abnormal");

       RequestCheckUtil::checkString($this->imported,"imported");

       RequestCheckUtil::checkString($this->health,"health");

       RequestCheckUtil::checkString($this->temperature,"temperature");

       RequestCheckUtil::checkString($this->temperatureCeil,"temperatureCeil");

       RequestCheckUtil::checkString($this->temperatureFloor,"temperatureFloor");

       RequestCheckUtil::checkString($this->humidity,"humidity");

       RequestCheckUtil::checkString($this->humidityCeil,"humidityCeil");

       RequestCheckUtil::checkString($this->humidityFloor,"humidityFloor");

       RequestCheckUtil::checkString($this->movable,"movable");

       RequestCheckUtil::checkString($this->service3g,"service3g");

       RequestCheckUtil::checkString($this->sample,"sample");

       RequestCheckUtil::checkString($this->odor,"odor");

       RequestCheckUtil::checkString($this->sex,"sex");

       RequestCheckUtil::checkString($this->precious,"precious");

       RequestCheckUtil::checkString($this->mixedBatch,"mixedBatch");

       RequestCheckUtil::checkString($this->fashionNo,"fashionNo");

       RequestCheckUtil::checkString($this->customMade,"customMade");

       RequestCheckUtil::checkString($this->airMark,"airMark");

       RequestCheckUtil::checkString($this->lossRate,"lossRate");

       RequestCheckUtil::checkString($this->sellPeriod,"sellPeriod");

       RequestCheckUtil::checkString($this->isPMX,"isPMX");

       RequestCheckUtil::checkString($this->qualityCheckRate,"qualityCheckRate");

       RequestCheckUtil::checkString($this->productSeason,"productSeason");

       RequestCheckUtil::checkString($this->materialNo,"materialNo");

       RequestCheckUtil::checkString($this->prIntegerProductId,"prIntegerProductId");

       RequestCheckUtil::checkString($this->prIntegerName,"prIntegerName");

       RequestCheckUtil::checkString($this->bundleFlag,"bundleFlag");

       RequestCheckUtil::checkNumeric($this->productCategory,"productCategory");

       RequestCheckUtil::checkString($this->category,"category");

       RequestCheckUtil::checkString($this->storage,"storage");

       RequestCheckUtil::checkString($this->type,"type");

       RequestCheckUtil::checkString($this->specification,"specification");

       RequestCheckUtil::checkString($this->genericName,"genericName");

       RequestCheckUtil::checkString($this->dosage,"dosage");

       RequestCheckUtil::checkString($this->useMethods,"useMethods");

       RequestCheckUtil::checkString($this->packingUnit,"packingUnit");

       RequestCheckUtil::checkString($this->efficacy,"efficacy");

       RequestCheckUtil::checkString($this->registrationNum,"registrationNum");

       RequestCheckUtil::checkString($this->approvalNum,"approvalNum");

       RequestCheckUtil::checkNumeric($this->curingType,"curingType");

       RequestCheckUtil::checkNumeric($this->curingPeriod,"curingPeriod");

       RequestCheckUtil::checkString($this->warmLayer,"warmLayer");

       RequestCheckUtil::checkNumeric($this->qualifyTypes,"qualifyTypes");

       RequestCheckUtil::checkNumeric($this->doseType,"doseType");

       RequestCheckUtil::checkArray($this->packRules,"packRules");
       if(isset($this->packRules)) {
           $arrlength=count($this->packRules);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->packRules[$index]) && method_exists($this->packRules[$index],"check")) {
                   $this->packRules[$index]->check();
               }
           }
       }
    }
}
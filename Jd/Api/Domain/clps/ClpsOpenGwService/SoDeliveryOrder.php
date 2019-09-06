<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SoDeliveryOrder implements JsonSerializable {

    /**
     * ERP鍑哄簱鍗曞彿,string(100)
     */
    private $deliveryOrderCode;
    /**
     * 鍘熷嚭搴撳崟鍙�(ERP鍒嗛厤),鏈惎鐢�
     */
    private $preDeliveryOrderCode;
    /**
     * 鍘熷嚭搴撳崟鍙�(CLPS鍒嗛厤),鏈惎鐢�
     */
    private $preDeliveryOrderId;
    /**
     * ISV鏉ユ簮缂栧彿,鍚屼竴ISV鍞竴,姝ょ紪鍙风敱CLPS鍒嗛厤,璇疯仈绯绘湇鍔′汉鍛樻彁渚�
     */
    private $isvSource;
    /**
     * 鍑哄簱鍗曠被鍨�,string(50),XSCK=閿�鍞嚭搴�,鍏朵粬鍗曟嵁绫诲瀷涓庤嚜瀹氫箟鍗曟嵁绫诲瀷寰呭紑鏀�
     */
    private $orderType;
    /**
     * 璁㈠崟绫诲瀷,string(1),1=B2c璁㈠崟,2=B2B璁㈠崟
     */
    private $soType;
    /**
     * 浠撳簱缂栫爜,string(15)
     */
    private $warehouseCode;
    /**
     * 璁㈠崟鏍囪浣�,鏍囪澧炲�兼湇鍔★紝string(200),鏍囪浣嶈鏁颁粠1寮�濮�,甯哥敤鏍囪浣�:绗竴浣�1鏍囪璐у埌浠樻;绗�10浣�0鏍囪b2c,1鏍囪b2b,娆℃爣璇嗕笌soType瀵瑰簲.鍏朵粬澧炲�肩被鏈嶅姟鑱旂郴鏈嶅姟浜哄憳
     */
    private $orderMark;
    /**
     * 璁㈠崟閿�鍞钩鍙扮紪鐮�,string(11),甯歌缂栫爜:1=浜笢,2=澶╃尗,3=鑻忓畞,4=浜氶┈閫�,7=褰撳綋,8=娣樺疂锛屽叾浠栧钩鍙拌仈绯绘湇鍔′汉鍛�
     */
    private $sourcePlatformCode;
    /**
     * 璁㈠崟鏉ユ簮骞冲彴鍚嶇О,string(20)
     */
    private $sourcePlatformName;
    /**
     * 閿�鍞钩鍙拌鍗曞彿,string(100)
     */
    private $salesPlatformOrderNo;
    /**
     * 鍙戣揣鍗曞垱寤烘椂闂�,鏍煎紡:yyyy-MM-dd HH:mm:ss
     */
    private $createTime;
    /**
     * 鍓嶅彴璁㈠崟 (搴楅摵璁㈠崟) 鍒涘缓鏃堕棿 (涓嬪崟鏃堕棿),鏈惎鐢�
     */
    private $placeOrderTime;
    /**
     * 璁㈠崟鏀粯鏃堕棿,鏈惎鐢�
     */
    private $payTime;
    /**
     * 鏀粯骞冲彴浜ゆ槗鍙�,鏈惎鐢�
     */
    private $payNo;
    /**
     * 涓嬪崟璐﹀彿,鏈惎鐢�
     */
    private $pinAccount;
    /**
     * 鎷嗗崟鏍囪瘑,鏈惎鐢�
     */
    private $splitFlag;
    /**
     * 鎿嶄綔鍛�(瀹℃牳鍛�)缂栫爜,鏈惎鐢�
     */
    private $operatorCode;
    /**
     * 鎿嶄綔鍛�(瀹℃牳鍛�)鍚嶇О,鏈惎鐢�
     */
    private $operatorName;
    /**
     * 鎿嶄綔(瀹℃牳)鏃堕棿,鏈惎鐢�
     */
    private $operateTime;
    /**
     * 浜嬩笟閮ㄧ紪鐮�,string(20)
     */
    private $ownerNo;
    /**
     * 搴楅摵缂栫爜,string(20)
     */
    private $shopNo;
    /**
     * 搴楅摵鍚嶇О,鏈惎鐢�
     */
    private $shopNick;
    /**
     * 鍗栧鍚嶇О,鏈惎鐢�
     */
    private $sellerNick;
    /**
     * 涔板鍚嶇О,鏈惎鐢�
     */
    private $buyerNick;
    /**
     * 璁㈠崟鎬婚噾棰�(鍏�),double(18,2),璁㈠崟鎬婚噾棰�=搴旀敹閲戦+宸叉敹閲戦=鍟嗗搧鎬婚噾棰�-璁㈠崟鎶樻墸閲戦+蹇�掕垂鐢�,鏈惎鐢�
     */
    private $totalAmount;
    /**
     * 鍟嗗搧鎬婚噾棰�(鍏�),鏈惎鐢�
     */
    private $itemAmount;
    /**
     * 璁㈠崟鎶樻墸閲戦(鍏�),鏈惎鐢�
     */
    private $discountAmount;
    /**
     * 蹇�掕垂鐢�(鍏�),double(18,2)
     */
    private $freight;
    /**
     * 搴旀敹閲戦(鍏�),double(18,2),娑堣垂鑰呰繕闇�瑕佹敮浠樺灏�(璐у埌浠樻鏃舵秷璐硅�呰繕闇�瑕佹敮浠樺灏戠害瀹氫娇鐢ㄨ繖涓瓧娈碉級
     */
    private $arAmount;
    /**
     * 宸叉敹閲戦(鍏�),娑堣垂鑰呭凡缁忔敮浠樺灏�.鏈惎鐢�
     */
    private $gotAmount;
    /**
     * COD鏈嶅姟璐�,鏈惎鐢�
     */
    private $serviceFee;
    /**
     * 鎵胯繍鍟嗙紪鐮�,string(20)
     */
    private $logisticsCode;
    /**
     * 鎵胯繍鍟嗗悕绉�,鏈惎鐢�
     */
    private $logisticsName;
    /**
     * 蹇�掑尯鍩熺紪鐮�,鏈惎鐢�
     */
    private $logisticsAreaCode;
    /**
     * 杩愬崟鍙�,鏈惎鐢�
     */
    private $expressCode;
    /**
     * 涓夋柟杩愬崟鍙�(鎵胯繍鍟嗙殑鎵ц绯荤粺涓烘棤鏃讹紝涓夋柟杩愬崟鍙峰繀濉�),string(30)
     */
    private $thirdWayBill;
    /**
     * 涓夋柟鍖呰９鎵撴爣鏍囪瘑,string(50)
     */
    private $packageMark;
    /**
     * 涓氬姟绫诲瀷:鏀惰揣娆�,鏍囧噯蹇��,鐢靛晢鐗规儬,string(50)
     */
    private $businessType;
    /**
     * 鐩殑鍦颁唬鐮�,string(50)
     */
    private $destinationCode;
    /**
     * 鐩殑鍦板悕绉�,string(200)
     */
    private $destinationName;
    /**
     * 鍙戜欢缃戠偣鍚嶇О,string(50)
     */
    private $sendWebsiteName;
    /**
     * 鍙戜欢缃戠偣浠ｇ爜,string(200)
     */
    private $sendWebsiteCode;
    /**
     * 瀵勪欢鏂瑰紡:1=鑷瘎2=鍏跺畠
     */
    private $sendMode;
    /**
     * 鏀朵欢鏂瑰紡:1=鑷彁2=鍏跺畠
     */
    private $receiveMode;
    /**
     * 棰勭害閰嶉�佹椂闂�,鏍煎紡:yyyy-MM-dd HH:mm:ss
     */
    private $appointDeliveryTime;
    /**
     * 杩愯垂鏀粯鏂瑰紡,1=瀵勬柟浠�2=鏀舵柟浠�3=瀵勪粯鏈堢粨,
     */
    private $thirdPayment;
    /**
     * 鏈堢粨璐﹀彿,string(50)
     */
    private $monthlyAccount;
    /**
     * 瀵勬墭鐗�,string(100)
     */
    private $shipment;
    /**
     * 妯℃澘澶囨敞,string(350)
     */
    private $sellerRemark;
    /**
     * 闈掗緳涓氫富鍙�,string(50)
     */
    private $bdOwnerNo;
    /**
     * 澶уご绗�(涓夋柟绔欑偣),string(100)
     */
    private $thirdSite;
    /**
     * 鎵归噺鍙�(鍚屾壒璁㈠崟鐢熶骇缂栧彿),鏈惎鐢�
     */
    private $orderBatchNo;
    /**
     * 鎵归噺璁㈠崟鏁�,鏈惎鐢�
     */
    private $orderBatchQty;
    /**
     * 涓氬姟鏉ユ簮(1.闈㈠闈�,2.KA鍟嗘埛/鏈嶅姟鍟�,3.寰俊涔板崟),鏈惎鐢�
     */
    private $transactionSource;
    /**
     * b2b骞冲彴鍑哄簱鍗曠墿娴佹柟寮�,鏈惎鐢�
     */
    private $transport;
    /**
     * B2B鍩庨厤鍟嗗瀹㈡埛缂栫爜,string(100)
     */
    private $customerNo;
    /**
     * 澶栭儴璁㈠崟绫诲瀷,string(20)
     */
    private $isvSoType;
    /**
     * 鏄惁鏇存柊搴撳瓨缂撳瓨0-鏇存柊锛�1-涓嶆洿鏂帮紝榛樿鏇存柊,鏈惎鐢�
     */
    private $freshStockCache;
    /**
     * 璁㈠崟浼樺厛绾�,鏈惎鐢�
     */
    private $orderPriority;
    /**
     * 璁″垝鍑哄簱鏃堕棿,鏍煎紡:yyyy-MM-dd HH:mm:ss
     */
    private $planDeliveryTime;
    /**
     * 璁㈠崟鏉ユ簮,鏈惎鐢�
     */
    private $soSource;
    /**
     * 闂ㄥ簵鍚嶇О,鏈惎鐢�
     */
    private $storeName;
    /**
     * 鏄惁鍦板潃瑙ｆ瀽0-涓嶈В鏋�1-瑙ｆ瀽,鏈惎鐢�
     */
    private $addrAnalysis;
    /**
     * 閾惰鍚嶇О,鏈惎鐢�
     */
    private $bankName;
    /**
     * 寮�鎴疯处鎴�,鏈惎鐢�
     */
    private $bankAccount;
    /**
     * 鍦板潃,鏈惎鐢�
     */
    private $stringAddress;
    /**
     * 鐢佃瘽,鏈惎鐢�
     */
    private $phoneNumber;
    /**
     * 鏄惁鍏佽缂洪噺(B2C璁㈠崟涓嶅厑璁哥己閲忥紝B2B璁㈠崟鍙敱ISV浼犲�硷紝1锛氬厑璁� 2涓嶅厑璁革紝涓嶄紶榛樿涓轰笉鍏佽缂洪噺),鏈惎鐢�
     */
    private $allowLack;
    /**
     * 鏄惁浣跨敤淇濇俯绠�.0=鍚�,1=鏄�
     */
    private $isColdChain;
    /**
     * 鎶曢�掓椂寤�
     */
    private $deliveryRequirements;
    /**
     * 鍙戜欢浜轰俊鎭�,鏈惎鐢�
     */
    private $senderInfo;
    /**
     * 鏀朵欢浜轰俊鎭�
     */
    private $receiverInfo;
    /**
     * 鏄惁鍔犳��.0=鍚�,1=鏄�
     */
    private $isUrgency;
    /**
     * 鏄惁闇�瑕佸彂绁�,0=鍚�,1=鏄�
     */
    private $invoiceFlag;
    /**
     * 鍙戠エ淇℃伅,鏆傛湭寮�鏀�
     */
    private $invoice;
    /**
     * 鏄惁闇�瑕佷繚闄�,0=鍚�,1=鏄�
     */
    private $insuranceFlag;
    /**
     * 淇濋櫓淇℃伅,鏈惎鐢�
     */
    private $insurance;
    /**
     * 淇濅环淇℃伅
     */
    private $insured;
    /**
     * 涔板鐣欒█,姝ゅ瓧娈垫湭鍚敤,闇�瑕佽浼犳敹浠朵汉淇℃伅涓殑涔板鐣欒█
     */
    private $buyerMessage;
    /**
     * 鍗栧鐣欒█,string(200)
     */
    private $sellerMessage;
    /**
     * 澶囨敞,鏈惎鐢�
     */
    private $remark;

    public function setDeliveryOrderCode($deliveryOrderCode){
       $this->deliveryOrderCode = $deliveryOrderCode;
    }
    
    public function getDeliveryOrderCode(){
       return $this->deliveryOrderCode;
    }
    public function setPreDeliveryOrderCode($preDeliveryOrderCode){
       $this->preDeliveryOrderCode = $preDeliveryOrderCode;
    }
    
    public function getPreDeliveryOrderCode(){
       return $this->preDeliveryOrderCode;
    }
    public function setPreDeliveryOrderId($preDeliveryOrderId){
       $this->preDeliveryOrderId = $preDeliveryOrderId;
    }
    
    public function getPreDeliveryOrderId(){
       return $this->preDeliveryOrderId;
    }
    public function setIsvSource($isvSource){
       $this->isvSource = $isvSource;
    }
    
    public function getIsvSource(){
       return $this->isvSource;
    }
    public function setOrderType($orderType){
       $this->orderType = $orderType;
    }
    
    public function getOrderType(){
       return $this->orderType;
    }
    public function setSoType($soType){
       $this->soType = $soType;
    }
    
    public function getSoType(){
       return $this->soType;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setOrderMark($orderMark){
       $this->orderMark = $orderMark;
    }
    
    public function getOrderMark(){
       return $this->orderMark;
    }
    public function setSourcePlatformCode($sourcePlatformCode){
       $this->sourcePlatformCode = $sourcePlatformCode;
    }
    
    public function getSourcePlatformCode(){
       return $this->sourcePlatformCode;
    }
    public function setSourcePlatformName($sourcePlatformName){
       $this->sourcePlatformName = $sourcePlatformName;
    }
    
    public function getSourcePlatformName(){
       return $this->sourcePlatformName;
    }
    public function setSalesPlatformOrderNo($salesPlatformOrderNo){
       $this->salesPlatformOrderNo = $salesPlatformOrderNo;
    }
    
    public function getSalesPlatformOrderNo(){
       return $this->salesPlatformOrderNo;
    }
    public function setCreateTime($createTime){
       $this->createTime = $createTime;
    }
    
    public function getCreateTime(){
       return $this->createTime;
    }
    public function setPlaceOrderTime($placeOrderTime){
       $this->placeOrderTime = $placeOrderTime;
    }
    
    public function getPlaceOrderTime(){
       return $this->placeOrderTime;
    }
    public function setPayTime($payTime){
       $this->payTime = $payTime;
    }
    
    public function getPayTime(){
       return $this->payTime;
    }
    public function setPayNo($payNo){
       $this->payNo = $payNo;
    }
    
    public function getPayNo(){
       return $this->payNo;
    }
    public function setPinAccount($pinAccount){
       $this->pinAccount = $pinAccount;
    }
    
    public function getPinAccount(){
       return $this->pinAccount;
    }
    public function setSplitFlag($splitFlag){
       $this->splitFlag = $splitFlag;
    }
    
    public function getSplitFlag(){
       return $this->splitFlag;
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
    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setShopNo($shopNo){
       $this->shopNo = $shopNo;
    }
    
    public function getShopNo(){
       return $this->shopNo;
    }
    public function setShopNick($shopNick){
       $this->shopNick = $shopNick;
    }
    
    public function getShopNick(){
       return $this->shopNick;
    }
    public function setSellerNick($sellerNick){
       $this->sellerNick = $sellerNick;
    }
    
    public function getSellerNick(){
       return $this->sellerNick;
    }
    public function setBuyerNick($buyerNick){
       $this->buyerNick = $buyerNick;
    }
    
    public function getBuyerNick(){
       return $this->buyerNick;
    }
    public function setTotalAmount($totalAmount){
       $this->totalAmount = $totalAmount;
    }
    
    public function getTotalAmount(){
       return $this->totalAmount;
    }
    public function setItemAmount($itemAmount){
       $this->itemAmount = $itemAmount;
    }
    
    public function getItemAmount(){
       return $this->itemAmount;
    }
    public function setDiscountAmount($discountAmount){
       $this->discountAmount = $discountAmount;
    }
    
    public function getDiscountAmount(){
       return $this->discountAmount;
    }
    public function setFreight($freight){
       $this->freight = $freight;
    }
    
    public function getFreight(){
       return $this->freight;
    }
    public function setArAmount($arAmount){
       $this->arAmount = $arAmount;
    }
    
    public function getArAmount(){
       return $this->arAmount;
    }
    public function setGotAmount($gotAmount){
       $this->gotAmount = $gotAmount;
    }
    
    public function getGotAmount(){
       return $this->gotAmount;
    }
    public function setServiceFee($serviceFee){
       $this->serviceFee = $serviceFee;
    }
    
    public function getServiceFee(){
       return $this->serviceFee;
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
    public function setLogisticsAreaCode($logisticsAreaCode){
       $this->logisticsAreaCode = $logisticsAreaCode;
    }
    
    public function getLogisticsAreaCode(){
       return $this->logisticsAreaCode;
    }
    public function setExpressCode($expressCode){
       $this->expressCode = $expressCode;
    }
    
    public function getExpressCode(){
       return $this->expressCode;
    }
    public function setThirdWayBill($thirdWayBill){
       $this->thirdWayBill = $thirdWayBill;
    }
    
    public function getThirdWayBill(){
       return $this->thirdWayBill;
    }
    public function setPackageMark($packageMark){
       $this->packageMark = $packageMark;
    }
    
    public function getPackageMark(){
       return $this->packageMark;
    }
    public function setBusinessType($businessType){
       $this->businessType = $businessType;
    }
    
    public function getBusinessType(){
       return $this->businessType;
    }
    public function setDestinationCode($destinationCode){
       $this->destinationCode = $destinationCode;
    }
    
    public function getDestinationCode(){
       return $this->destinationCode;
    }
    public function setDestinationName($destinationName){
       $this->destinationName = $destinationName;
    }
    
    public function getDestinationName(){
       return $this->destinationName;
    }
    public function setSendWebsiteName($sendWebsiteName){
       $this->sendWebsiteName = $sendWebsiteName;
    }
    
    public function getSendWebsiteName(){
       return $this->sendWebsiteName;
    }
    public function setSendWebsiteCode($sendWebsiteCode){
       $this->sendWebsiteCode = $sendWebsiteCode;
    }
    
    public function getSendWebsiteCode(){
       return $this->sendWebsiteCode;
    }
    public function setSendMode($sendMode){
       $this->sendMode = $sendMode;
    }
    
    public function getSendMode(){
       return $this->sendMode;
    }
    public function setReceiveMode($receiveMode){
       $this->receiveMode = $receiveMode;
    }
    
    public function getReceiveMode(){
       return $this->receiveMode;
    }
    public function setAppointDeliveryTime($appointDeliveryTime){
       $this->appointDeliveryTime = $appointDeliveryTime;
    }
    
    public function getAppointDeliveryTime(){
       return $this->appointDeliveryTime;
    }
    public function setThirdPayment($thirdPayment){
       $this->thirdPayment = $thirdPayment;
    }
    
    public function getThirdPayment(){
       return $this->thirdPayment;
    }
    public function setMonthlyAccount($monthlyAccount){
       $this->monthlyAccount = $monthlyAccount;
    }
    
    public function getMonthlyAccount(){
       return $this->monthlyAccount;
    }
    public function setShipment($shipment){
       $this->shipment = $shipment;
    }
    
    public function getShipment(){
       return $this->shipment;
    }
    public function setSellerRemark($sellerRemark){
       $this->sellerRemark = $sellerRemark;
    }
    
    public function getSellerRemark(){
       return $this->sellerRemark;
    }
    public function setBdOwnerNo($bdOwnerNo){
       $this->bdOwnerNo = $bdOwnerNo;
    }
    
    public function getBdOwnerNo(){
       return $this->bdOwnerNo;
    }
    public function setThirdSite($thirdSite){
       $this->thirdSite = $thirdSite;
    }
    
    public function getThirdSite(){
       return $this->thirdSite;
    }
    public function setOrderBatchNo($orderBatchNo){
       $this->orderBatchNo = $orderBatchNo;
    }
    
    public function getOrderBatchNo(){
       return $this->orderBatchNo;
    }
    public function setOrderBatchQty($orderBatchQty){
       $this->orderBatchQty = $orderBatchQty;
    }
    
    public function getOrderBatchQty(){
       return $this->orderBatchQty;
    }
    public function setTransactionSource($transactionSource){
       $this->transactionSource = $transactionSource;
    }
    
    public function getTransactionSource(){
       return $this->transactionSource;
    }
    public function setTransport($transport){
       $this->transport = $transport;
    }
    
    public function getTransport(){
       return $this->transport;
    }
    public function setCustomerNo($customerNo){
       $this->customerNo = $customerNo;
    }
    
    public function getCustomerNo(){
       return $this->customerNo;
    }
    public function setIsvSoType($isvSoType){
       $this->isvSoType = $isvSoType;
    }
    
    public function getIsvSoType(){
       return $this->isvSoType;
    }
    public function setFreshStockCache($freshStockCache){
       $this->freshStockCache = $freshStockCache;
    }
    
    public function getFreshStockCache(){
       return $this->freshStockCache;
    }
    public function setOrderPriority($orderPriority){
       $this->orderPriority = $orderPriority;
    }
    
    public function getOrderPriority(){
       return $this->orderPriority;
    }
    public function setPlanDeliveryTime($planDeliveryTime){
       $this->planDeliveryTime = $planDeliveryTime;
    }
    
    public function getPlanDeliveryTime(){
       return $this->planDeliveryTime;
    }
    public function setSoSource($soSource){
       $this->soSource = $soSource;
    }
    
    public function getSoSource(){
       return $this->soSource;
    }
    public function setStoreName($storeName){
       $this->storeName = $storeName;
    }
    
    public function getStoreName(){
       return $this->storeName;
    }
    public function setAddrAnalysis($addrAnalysis){
       $this->addrAnalysis = $addrAnalysis;
    }
    
    public function getAddrAnalysis(){
       return $this->addrAnalysis;
    }
    public function setBankName($bankName){
       $this->bankName = $bankName;
    }
    
    public function getBankName(){
       return $this->bankName;
    }
    public function setBankAccount($bankAccount){
       $this->bankAccount = $bankAccount;
    }
    
    public function getBankAccount(){
       return $this->bankAccount;
    }
    public function setStringAddress($stringAddress){
       $this->stringAddress = $stringAddress;
    }
    
    public function getStringAddress(){
       return $this->stringAddress;
    }
    public function setPhoneNumber($phoneNumber){
       $this->phoneNumber = $phoneNumber;
    }
    
    public function getPhoneNumber(){
       return $this->phoneNumber;
    }
    public function setAllowLack($allowLack){
       $this->allowLack = $allowLack;
    }
    
    public function getAllowLack(){
       return $this->allowLack;
    }
    public function setIsColdChain($isColdChain){
       $this->isColdChain = $isColdChain;
    }
    
    public function getIsColdChain(){
       return $this->isColdChain;
    }
    public function setDeliveryRequirements($deliveryRequirements){
       $this->deliveryRequirements = $deliveryRequirements;
    }
    
    public function getDeliveryRequirements(){
       return $this->deliveryRequirements;
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
    public function setIsUrgency($isUrgency){
       $this->isUrgency = $isUrgency;
    }
    
    public function getIsUrgency(){
       return $this->isUrgency;
    }
    public function setInvoiceFlag($invoiceFlag){
       $this->invoiceFlag = $invoiceFlag;
    }
    
    public function getInvoiceFlag(){
       return $this->invoiceFlag;
    }
    public function setInvoice($invoice){
       $this->invoice = $invoice;
    }
    
    public function getInvoice(){
       return $this->invoice;
    }
    public function setInsuranceFlag($insuranceFlag){
       $this->insuranceFlag = $insuranceFlag;
    }
    
    public function getInsuranceFlag(){
       return $this->insuranceFlag;
    }
    public function setInsurance($insurance){
       $this->insurance = $insurance;
    }
    
    public function getInsurance(){
       return $this->insurance;
    }
    public function setInsured($insured){
       $this->insured = $insured;
    }
    
    public function getInsured(){
       return $this->insured;
    }
    public function setBuyerMessage($buyerMessage){
       $this->buyerMessage = $buyerMessage;
    }
    
    public function getBuyerMessage(){
       return $this->buyerMessage;
    }
    public function setSellerMessage($sellerMessage){
       $this->sellerMessage = $sellerMessage;
    }
    
    public function getSellerMessage(){
       return $this->sellerMessage;
    }
    public function setRemark($remark){
       $this->remark = $remark;
    }
    
    public function getRemark(){
       return $this->remark;
    }

    public function jsonSerialize() {
        return [
            'deliveryOrderCode' => $this->deliveryOrderCode,             
            'preDeliveryOrderCode' => $this->preDeliveryOrderCode,             
            'preDeliveryOrderId' => $this->preDeliveryOrderId,             
            'isvSource' => $this->isvSource,             
            'orderType' => $this->orderType,             
            'soType' => $this->soType,             
            'warehouseCode' => $this->warehouseCode,             
            'orderMark' => $this->orderMark,             
            'sourcePlatformCode' => $this->sourcePlatformCode,             
            'sourcePlatformName' => $this->sourcePlatformName,             
            'salesPlatformOrderNo' => $this->salesPlatformOrderNo,             
            'createTime' => $this->createTime,             
            'placeOrderTime' => $this->placeOrderTime,             
            'payTime' => $this->payTime,             
            'payNo' => $this->payNo,             
            'pinAccount' => $this->pinAccount,             
            'splitFlag' => $this->splitFlag,             
            'operatorCode' => $this->operatorCode,             
            'operatorName' => $this->operatorName,             
            'operateTime' => $this->operateTime,             
            'ownerNo' => $this->ownerNo,             
            'shopNo' => $this->shopNo,             
            'shopNick' => $this->shopNick,             
            'sellerNick' => $this->sellerNick,             
            'buyerNick' => $this->buyerNick,             
            'totalAmount' => $this->totalAmount,             
            'itemAmount' => $this->itemAmount,             
            'discountAmount' => $this->discountAmount,             
            'freight' => $this->freight,             
            'arAmount' => $this->arAmount,             
            'gotAmount' => $this->gotAmount,             
            'serviceFee' => $this->serviceFee,             
            'logisticsCode' => $this->logisticsCode,             
            'logisticsName' => $this->logisticsName,             
            'logisticsAreaCode' => $this->logisticsAreaCode,             
            'expressCode' => $this->expressCode,             
            'thirdWayBill' => $this->thirdWayBill,             
            'packageMark' => $this->packageMark,             
            'businessType' => $this->businessType,             
            'destinationCode' => $this->destinationCode,             
            'destinationName' => $this->destinationName,             
            'sendWebsiteName' => $this->sendWebsiteName,             
            'sendWebsiteCode' => $this->sendWebsiteCode,             
            'sendMode' => $this->sendMode,             
            'receiveMode' => $this->receiveMode,             
            'appointDeliveryTime' => $this->appointDeliveryTime,             
            'thirdPayment' => $this->thirdPayment,             
            'monthlyAccount' => $this->monthlyAccount,             
            'shipment' => $this->shipment,             
            'sellerRemark' => $this->sellerRemark,             
            'bdOwnerNo' => $this->bdOwnerNo,             
            'thirdSite' => $this->thirdSite,             
            'orderBatchNo' => $this->orderBatchNo,             
            'orderBatchQty' => $this->orderBatchQty,             
            'transactionSource' => $this->transactionSource,             
            'transport' => $this->transport,             
            'customerNo' => $this->customerNo,             
            'isvSoType' => $this->isvSoType,             
            'freshStockCache' => $this->freshStockCache,             
            'orderPriority' => $this->orderPriority,             
            'planDeliveryTime' => $this->planDeliveryTime,             
            'soSource' => $this->soSource,             
            'storeName' => $this->storeName,             
            'addrAnalysis' => $this->addrAnalysis,             
            'bankName' => $this->bankName,             
            'bankAccount' => $this->bankAccount,             
            'stringAddress' => $this->stringAddress,             
            'phoneNumber' => $this->phoneNumber,             
            'allowLack' => $this->allowLack,             
            'isColdChain' => $this->isColdChain,             
            'deliveryRequirements' => $this->deliveryRequirements,             
            'senderInfo' => $this->senderInfo,             
            'receiverInfo' => $this->receiverInfo,             
            'isUrgency' => $this->isUrgency,             
            'invoiceFlag' => $this->invoiceFlag,             
            'invoice' => $this->invoice,             
            'insuranceFlag' => $this->insuranceFlag,             
            'insurance' => $this->insurance,             
            'insured' => $this->insured,             
            'buyerMessage' => $this->buyerMessage,             
            'sellerMessage' => $this->sellerMessage,             
            'remark' => $this->remark             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->deliveryOrderCode,"deliveryOrderCode");

       RequestCheckUtil::checkString($this->deliveryOrderCode,"deliveryOrderCode");

       RequestCheckUtil::checkString($this->preDeliveryOrderCode,"preDeliveryOrderCode");

       RequestCheckUtil::checkString($this->preDeliveryOrderId,"preDeliveryOrderId");
        RequestCheckUtil::checkNotNull($this->isvSource,"isvSource");

       RequestCheckUtil::checkString($this->isvSource,"isvSource");

       RequestCheckUtil::checkString($this->orderType,"orderType");
        RequestCheckUtil::checkNotNull($this->soType,"soType");

       RequestCheckUtil::checkString($this->soType,"soType");
        RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");
        RequestCheckUtil::checkNotNull($this->orderMark,"orderMark");

       RequestCheckUtil::checkString($this->orderMark,"orderMark");
        RequestCheckUtil::checkNotNull($this->sourcePlatformCode,"sourcePlatformCode");

       RequestCheckUtil::checkString($this->sourcePlatformCode,"sourcePlatformCode");

       RequestCheckUtil::checkString($this->sourcePlatformName,"sourcePlatformName");

       RequestCheckUtil::checkString($this->salesPlatformOrderNo,"salesPlatformOrderNo");

       RequestCheckUtil::checkString($this->createTime,"createTime");

       RequestCheckUtil::checkString($this->placeOrderTime,"placeOrderTime");

       RequestCheckUtil::checkString($this->payTime,"payTime");

       RequestCheckUtil::checkString($this->payNo,"payNo");

       RequestCheckUtil::checkString($this->pinAccount,"pinAccount");

       RequestCheckUtil::checkString($this->splitFlag,"splitFlag");

       RequestCheckUtil::checkString($this->operatorCode,"operatorCode");

       RequestCheckUtil::checkString($this->operatorName,"operatorName");

       RequestCheckUtil::checkString($this->operateTime,"operateTime");
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
        RequestCheckUtil::checkNotNull($this->shopNo,"shopNo");

       RequestCheckUtil::checkString($this->shopNo,"shopNo");

       RequestCheckUtil::checkString($this->shopNick,"shopNick");

       RequestCheckUtil::checkString($this->sellerNick,"sellerNick");

       RequestCheckUtil::checkString($this->buyerNick,"buyerNick");

       RequestCheckUtil::checkNumeric($this->totalAmount,"totalAmount");

       RequestCheckUtil::checkNumeric($this->itemAmount,"itemAmount");

       RequestCheckUtil::checkNumeric($this->discountAmount,"discountAmount");

       RequestCheckUtil::checkNumeric($this->freight,"freight");

       RequestCheckUtil::checkNumeric($this->arAmount,"arAmount");

       RequestCheckUtil::checkNumeric($this->gotAmount,"gotAmount");

       RequestCheckUtil::checkNumeric($this->serviceFee,"serviceFee");
        RequestCheckUtil::checkNotNull($this->logisticsCode,"logisticsCode");

       RequestCheckUtil::checkString($this->logisticsCode,"logisticsCode");

       RequestCheckUtil::checkString($this->logisticsName,"logisticsName");

       RequestCheckUtil::checkString($this->logisticsAreaCode,"logisticsAreaCode");

       RequestCheckUtil::checkString($this->expressCode,"expressCode");

       RequestCheckUtil::checkString($this->thirdWayBill,"thirdWayBill");

       RequestCheckUtil::checkString($this->packageMark,"packageMark");

       RequestCheckUtil::checkString($this->businessType,"businessType");

       RequestCheckUtil::checkString($this->destinationCode,"destinationCode");

       RequestCheckUtil::checkString($this->destinationName,"destinationName");

       RequestCheckUtil::checkString($this->sendWebsiteName,"sendWebsiteName");

       RequestCheckUtil::checkString($this->sendWebsiteCode,"sendWebsiteCode");

       RequestCheckUtil::checkObject($this->sendMode,"sendMode");
       if(isset($this->sendMode) && method_exists($this->sendMode,"check")) {
           $this->sendMode->check();
       }        

       RequestCheckUtil::checkObject($this->receiveMode,"receiveMode");
       if(isset($this->receiveMode) && method_exists($this->receiveMode,"check")) {
           $this->receiveMode->check();
       }        

       RequestCheckUtil::checkString($this->appointDeliveryTime,"appointDeliveryTime");

       RequestCheckUtil::checkObject($this->thirdPayment,"thirdPayment");
       if(isset($this->thirdPayment) && method_exists($this->thirdPayment,"check")) {
           $this->thirdPayment->check();
       }        

       RequestCheckUtil::checkString($this->monthlyAccount,"monthlyAccount");

       RequestCheckUtil::checkString($this->shipment,"shipment");

       RequestCheckUtil::checkString($this->sellerRemark,"sellerRemark");

       RequestCheckUtil::checkString($this->bdOwnerNo,"bdOwnerNo");

       RequestCheckUtil::checkString($this->thirdSite,"thirdSite");

       RequestCheckUtil::checkString($this->orderBatchNo,"orderBatchNo");

       RequestCheckUtil::checkString($this->orderBatchQty,"orderBatchQty");

       RequestCheckUtil::checkString($this->transactionSource,"transactionSource");

       RequestCheckUtil::checkString($this->transport,"transport");

       RequestCheckUtil::checkString($this->customerNo,"customerNo");

       RequestCheckUtil::checkString($this->isvSoType,"isvSoType");

       RequestCheckUtil::checkString($this->freshStockCache,"freshStockCache");

       RequestCheckUtil::checkString($this->orderPriority,"orderPriority");

       RequestCheckUtil::checkString($this->planDeliveryTime,"planDeliveryTime");

       RequestCheckUtil::checkString($this->soSource,"soSource");

       RequestCheckUtil::checkString($this->storeName,"storeName");

       RequestCheckUtil::checkString($this->addrAnalysis,"addrAnalysis");

       RequestCheckUtil::checkString($this->bankName,"bankName");

       RequestCheckUtil::checkString($this->bankAccount,"bankAccount");

       RequestCheckUtil::checkString($this->stringAddress,"stringAddress");

       RequestCheckUtil::checkString($this->phoneNumber,"phoneNumber");

       RequestCheckUtil::checkString($this->allowLack,"allowLack");

       RequestCheckUtil::checkObject($this->isColdChain,"isColdChain");
       if(isset($this->isColdChain) && method_exists($this->isColdChain,"check")) {
           $this->isColdChain->check();
       }        

       RequestCheckUtil::checkObject($this->deliveryRequirements,"deliveryRequirements");
       if(isset($this->deliveryRequirements) && method_exists($this->deliveryRequirements,"check")) {
           $this->deliveryRequirements->check();
       }        

       RequestCheckUtil::checkObject($this->senderInfo,"senderInfo");
       if(isset($this->senderInfo) && method_exists($this->senderInfo,"check")) {
           $this->senderInfo->check();
       }        

       RequestCheckUtil::checkObject($this->receiverInfo,"receiverInfo");
       if(isset($this->receiverInfo) && method_exists($this->receiverInfo,"check")) {
           $this->receiverInfo->check();
       }        

       RequestCheckUtil::checkObject($this->isUrgency,"isUrgency");
       if(isset($this->isUrgency) && method_exists($this->isUrgency,"check")) {
           $this->isUrgency->check();
       }        

       RequestCheckUtil::checkObject($this->invoiceFlag,"invoiceFlag");
       if(isset($this->invoiceFlag) && method_exists($this->invoiceFlag,"check")) {
           $this->invoiceFlag->check();
       }        

       RequestCheckUtil::checkObject($this->invoice,"invoice");
       if(isset($this->invoice) && method_exists($this->invoice,"check")) {
           $this->invoice->check();
       }        

       RequestCheckUtil::checkObject($this->insuranceFlag,"insuranceFlag");
       if(isset($this->insuranceFlag) && method_exists($this->insuranceFlag,"check")) {
           $this->insuranceFlag->check();
       }        

       RequestCheckUtil::checkObject($this->insurance,"insurance");
       if(isset($this->insurance) && method_exists($this->insurance,"check")) {
           $this->insurance->check();
       }        

       RequestCheckUtil::checkObject($this->insured,"insured");
       if(isset($this->insured) && method_exists($this->insured,"check")) {
           $this->insured->check();
       }        

       RequestCheckUtil::checkString($this->buyerMessage,"buyerMessage");

       RequestCheckUtil::checkString($this->sellerMessage,"sellerMessage");

       RequestCheckUtil::checkString($this->remark,"remark");
    }
}
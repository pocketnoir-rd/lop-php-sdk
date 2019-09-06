<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class RtsOrderRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮侊紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶�
     */
    private $ownerCode;
    /**
     * ISV閫�渚涘簲鍟嗚鍗曞彿
     */
    private $outRtsOrderCode;
    /**
     * 鎻愯揣鏂瑰紡(1銆佸晢瀹惰嚜鎻愩��2銆佷含涓滈厤閫侊紝3銆佸簱鎴垮彂璐�)
     */
    private $extractionWay;
    /**
     * 閫�璐т粨搴撶紪鍙�
     */
    private $warehouseCode;
    /**
     * 鍗曟嵁鐘舵��(1銆佽壇鍝� 2銆� 娈嬪搧 4 涓存湡鍝�)
     */
    private $rtsOrderType;
    /**
     * 渚涘簲鍟嗙紪鍙凤紝濡備笉浼犲彇榛樿渚涘簲鍟�
     */
    private $supplierNo;
    /**
     * 鏀惰揣浜轰俊鎭紝濡備笉浼犲彇渚涘簲鍟嗕俊鎭�
     */
    private $receiverInfo;
    /**
     * 鏄惁鎸夋/sku瑁呯,榛樿鍚︼紝0=鍚�,1=鏄�
     */
    private $packFlag;
    /**
     * 閫�宸ュ崟鏄庣粏鍒楄〃
     */
    private $rtsOrderItemList;

    public function setOwnerCode($ownerCode){
        $this->ownerCode = $ownerCode;
    }

    public function getOwnerCode(){
        return $this->ownerCode;
    }
    public function setOutRtsOrderCode($outRtsOrderCode){
        $this->outRtsOrderCode = $outRtsOrderCode;
    }

    public function getOutRtsOrderCode(){
        return $this->outRtsOrderCode;
    }
    public function setExtractionWay($extractionWay){
        $this->extractionWay = $extractionWay;
    }

    public function getExtractionWay(){
        return $this->extractionWay;
    }
    public function setWarehouseCode($warehouseCode){
        $this->warehouseCode = $warehouseCode;
    }

    public function getWarehouseCode(){
        return $this->warehouseCode;
    }
    public function setRtsOrderType($rtsOrderType){
        $this->rtsOrderType = $rtsOrderType;
    }

    public function getRtsOrderType(){
        return $this->rtsOrderType;
    }
    public function setSupplierNo($supplierNo){
        $this->supplierNo = $supplierNo;
    }

    public function getSupplierNo(){
        return $this->supplierNo;
    }
    public function setReceiverInfo($receiverInfo){
        $this->receiverInfo = $receiverInfo;
    }

    public function getReceiverInfo(){
        return $this->receiverInfo;
    }
    public function setPackFlag($packFlag){
        $this->packFlag = $packFlag;
    }

    public function getPackFlag(){
        return $this->packFlag;
    }
    public function setRtsOrderItemList($rtsOrderItemList){
        $this->rtsOrderItemList = $rtsOrderItemList;
    }

    public function getRtsOrderItemList(){
        return $this->rtsOrderItemList;
    }

    public function jsonSerialize() {
        return [
            'ownerCode' => $this->ownerCode,
            'outRtsOrderCode' => $this->outRtsOrderCode,
            'extractionWay' => $this->extractionWay,
            'warehouseCode' => $this->warehouseCode,
            'rtsOrderType' => $this->rtsOrderType,
            'supplierNo' => $this->supplierNo,
            'receiverInfo' => $this->receiverInfo,
            'packFlag' => $this->packFlag,
            'rtsOrderItemList' => $this->rtsOrderItemList
        ];
    }

    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

        RequestCheckUtil::checkString($this->ownerCode,"ownerCode");
        RequestCheckUtil::checkNotNull($this->outRtsOrderCode,"outRtsOrderCode");

        RequestCheckUtil::checkString($this->outRtsOrderCode,"outRtsOrderCode");
        RequestCheckUtil::checkNotNull($this->extractionWay,"extractionWay");

//       RequestCheckUtil::checkObject($this->extractionWay,"extractionWay");
        RequestCheckUtil::checkString($this->extractionWay,"extractionWay");
        if(isset($this->extractionWay) && method_exists($this->extractionWay,"check")) {
            $this->extractionWay->check();
        }
        RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");

        RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");
        RequestCheckUtil::checkNotNull($this->rtsOrderType,"rtsOrderType");

//       RequestCheckUtil::checkObject($this->rtsOrderType,"rtsOrderType");
        RequestCheckUtil::checkString($this->rtsOrderType,"rtsOrderType");
        if(isset($this->rtsOrderType) && method_exists($this->rtsOrderType,"check")) {
            $this->rtsOrderType->check();
        }

        RequestCheckUtil::checkString($this->supplierNo,"supplierNo");

        RequestCheckUtil::checkObject($this->receiverInfo,"receiverInfo");
        if(isset($this->receiverInfo) && method_exists($this->receiverInfo,"check")) {
            $this->receiverInfo->check();
        }

        RequestCheckUtil::checkString($this->packFlag,"packFlag");
        RequestCheckUtil::checkNotNull($this->rtsOrderItemList,"rtsOrderItemList");

        RequestCheckUtil::checkArray($this->rtsOrderItemList,"rtsOrderItemList");
        if(isset($this->rtsOrderItemList)) {
            $arrlength=count($this->rtsOrderItemList);
            for($index=0;$index<$arrlength;$index++){
                if(isset($this->rtsOrderItemList[$index]) && method_exists($this->rtsOrderItemList[$index],"check")) {
                    $this->rtsOrderItemList[$index]->check();
                }
            }
        }
    }
}
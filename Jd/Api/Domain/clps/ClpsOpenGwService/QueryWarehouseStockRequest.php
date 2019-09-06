<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryWarehouseStockRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerNo;
    /**
     * 浠撳簱缂栫爜
     */
    private $warehouseNo;
    /**
     * 搴撳瓨鐘舵�� 1:鑹搧;2:娈嬪搧;13:鑴忓搧;14:寰呴壌瀹�
     */
    private $stockStatus;
    /**
     * 搴撳瓨绫诲瀷 1:鍙攢鍞被鍨�;5:涓存湡閿佸畾;6:鐩樼偣閿佸畾;9:VMI閿佸畾;11:杩囨湡閿佸畾绫诲瀷
     */
    private $stockType;
    /**
     * CLPS鍟嗗搧缂栫爜
     */
    private $goodsNo;
    /**
     * 褰撳墠椤�
     */
    private $currentPage;
    /**
     * 椤靛ぇ灏�
     */
    private $pageSize;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setWarehouseNo($warehouseNo){
       $this->warehouseNo = $warehouseNo;
    }
    
    public function getWarehouseNo(){
       return $this->warehouseNo;
    }
    public function setStockStatus($stockStatus){
       $this->stockStatus = $stockStatus;
    }
    
    public function getStockStatus(){
       return $this->stockStatus;
    }
    public function setStockType($stockType){
       $this->stockType = $stockType;
    }
    
    public function getStockType(){
       return $this->stockType;
    }
    public function setGoodsNo($goodsNo){
       $this->goodsNo = $goodsNo;
    }
    
    public function getGoodsNo(){
       return $this->goodsNo;
    }
    public function setCurrentPage($currentPage){
       $this->currentPage = $currentPage;
    }
    
    public function getCurrentPage(){
       return $this->currentPage;
    }
    public function setPageSize($pageSize){
       $this->pageSize = $pageSize;
    }
    
    public function getPageSize(){
       return $this->pageSize;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'warehouseNo' => $this->warehouseNo,             
            'stockStatus' => $this->stockStatus,             
            'stockType' => $this->stockType,             
            'goodsNo' => $this->goodsNo,             
            'currentPage' => $this->currentPage,             
            'pageSize' => $this->pageSize             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");
        RequestCheckUtil::checkNotNull($this->warehouseNo,"warehouseNo");

       RequestCheckUtil::checkString($this->warehouseNo,"warehouseNo");

       RequestCheckUtil::checkString($this->stockStatus,"stockStatus");

       RequestCheckUtil::checkString($this->stockType,"stockType");

       RequestCheckUtil::checkString($this->goodsNo,"goodsNo");

       RequestCheckUtil::checkNumeric($this->currentPage,"currentPage");

       RequestCheckUtil::checkNumeric($this->pageSize,"pageSize");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class PoQueryRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�
     */
    private $ownerCode;
    /**
     * 搴撴埧缂栫爜
     */
    private $warehouseCode;
    /**
     * ERP鍏ュ簱鍗曠紪鐮�
     */
    private $entryOrderCode;
    /**
     * CLPS鍏ュ簱鍗曠紪鐮�
     */
    private $clpsOrderCode;
    /**
     * 褰撳墠椤�
     */
    private $page;
    /**
     * 姣忛〉orderLine鏉℃暟
     */
    private $pageSize;
    /**
     * 渚涘簲鍟嗙紪鐮�
     */
    private $supplierNo;
    /**
     * 閲囪喘鍗曞垱寤烘椂闂�
     */
    private $createTime;
    /**
     * 鍒涘缓浜�
     */
    private $createUser;
    /**
     * 閲囪喘鍗曞綋鍓嶇姸鎬�
     */
    private $poOrderStatus;
    /**
     * 鍏ュ簱鐘舵��
     */
    private $storageStatus;
    /**
     * 閲囪喘鍗曞叆搴撳畬鎴愭椂闂�
     */
    private $completeTime;
    /**
     * 鏄惁鏌ヨ閲囪喘鏄庣粏淇℃伅 榛樿false锛氫笉鏌ヨ
     */
    private $queryItemFlag;
    /**
     * 鏄惁鏌ヨ閲囪喘绠辨槑缁嗕俊鎭� 榛樿false锛氫笉鏌ヨ
     */
    private $queryBoxFlag;
    /**
     * 鏄惁鏌ヨ璐ㄦ鏄庣粏淇℃伅 榛樿false锛氫笉鏌ヨ
     */
    private $queryQcFlag;

    public function setOwnerCode($ownerCode){
       $this->ownerCode = $ownerCode;
    }
    
    public function getOwnerCode(){
       return $this->ownerCode;
    }
    public function setWarehouseCode($warehouseCode){
       $this->warehouseCode = $warehouseCode;
    }
    
    public function getWarehouseCode(){
       return $this->warehouseCode;
    }
    public function setEntryOrderCode($entryOrderCode){
       $this->entryOrderCode = $entryOrderCode;
    }
    
    public function getEntryOrderCode(){
       return $this->entryOrderCode;
    }
    public function setClpsOrderCode($clpsOrderCode){
       $this->clpsOrderCode = $clpsOrderCode;
    }
    
    public function getClpsOrderCode(){
       return $this->clpsOrderCode;
    }
    public function setPage($page){
       $this->page = $page;
    }
    
    public function getPage(){
       return $this->page;
    }
    public function setPageSize($pageSize){
       $this->pageSize = $pageSize;
    }
    
    public function getPageSize(){
       return $this->pageSize;
    }
    public function setSupplierNo($supplierNo){
       $this->supplierNo = $supplierNo;
    }
    
    public function getSupplierNo(){
       return $this->supplierNo;
    }
    public function setCreateTime($createTime){
       $this->createTime = $createTime;
    }
    
    public function getCreateTime(){
       return $this->createTime;
    }
    public function setCreateUser($createUser){
       $this->createUser = $createUser;
    }
    
    public function getCreateUser(){
       return $this->createUser;
    }
    public function setPoOrderStatus($poOrderStatus){
       $this->poOrderStatus = $poOrderStatus;
    }
    
    public function getPoOrderStatus(){
       return $this->poOrderStatus;
    }
    public function setStorageStatus($storageStatus){
       $this->storageStatus = $storageStatus;
    }
    
    public function getStorageStatus(){
       return $this->storageStatus;
    }
    public function setCompleteTime($completeTime){
       $this->completeTime = $completeTime;
    }
    
    public function getCompleteTime(){
       return $this->completeTime;
    }
    public function setQueryItemFlag($queryItemFlag){
       $this->queryItemFlag = $queryItemFlag;
    }
    
    public function getQueryItemFlag(){
       return $this->queryItemFlag;
    }
    public function setQueryBoxFlag($queryBoxFlag){
       $this->queryBoxFlag = $queryBoxFlag;
    }
    
    public function getQueryBoxFlag(){
       return $this->queryBoxFlag;
    }
    public function setQueryQcFlag($queryQcFlag){
       $this->queryQcFlag = $queryQcFlag;
    }
    
    public function getQueryQcFlag(){
       return $this->queryQcFlag;
    }

    public function jsonSerialize() {
        return [
            'ownerCode' => $this->ownerCode,             
            'warehouseCode' => $this->warehouseCode,             
            'entryOrderCode' => $this->entryOrderCode,             
            'clpsOrderCode' => $this->clpsOrderCode,             
            'page' => $this->page,             
            'pageSize' => $this->pageSize,             
            'supplierNo' => $this->supplierNo,             
            'createTime' => $this->createTime,             
            'createUser' => $this->createUser,             
            'poOrderStatus' => $this->poOrderStatus,             
            'storageStatus' => $this->storageStatus,             
            'completeTime' => $this->completeTime,             
            'queryItemFlag' => $this->queryItemFlag,             
            'queryBoxFlag' => $this->queryBoxFlag,             
            'queryQcFlag' => $this->queryQcFlag             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");
        RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->warehouseCode,"warehouseCode");

       RequestCheckUtil::checkString($this->entryOrderCode,"entryOrderCode");

       RequestCheckUtil::checkString($this->clpsOrderCode,"clpsOrderCode");

       RequestCheckUtil::checkNumeric($this->page,"page");

       RequestCheckUtil::checkNumeric($this->pageSize,"pageSize");

       RequestCheckUtil::checkString($this->supplierNo,"supplierNo");

       RequestCheckUtil::checkString($this->createTime,"createTime");

       RequestCheckUtil::checkString($this->createUser,"createUser");

       RequestCheckUtil::checkString($this->poOrderStatus,"poOrderStatus");

       RequestCheckUtil::checkString($this->storageStatus,"storageStatus");

       RequestCheckUtil::checkString($this->completeTime,"completeTime");

       RequestCheckUtil::checkBoolean($this->queryItemFlag,"queryItemFlag");

       RequestCheckUtil::checkBoolean($this->queryBoxFlag,"queryBoxFlag");

       RequestCheckUtil::checkBoolean($this->queryQcFlag,"queryQcFlag");
    }
}
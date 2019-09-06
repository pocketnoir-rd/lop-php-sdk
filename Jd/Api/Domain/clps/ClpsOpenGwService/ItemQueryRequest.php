<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ItemQueryRequest implements JsonSerializable {

    /**
     * 璐т富缂栫爜
     */
    private $ownerCode;
    /**
     * 椤垫暟
     */
    private $page;
    /**
     * 姣忛〉鏁伴噺
     */
    private $pageSize;
    /**
     * 鍟嗗搧鏉＄爜锛屽涓敤[,]鍒嗛殧
     */
    private $barCodes;
    /**
     * 鏌ヨ绫诲瀷锛堟灇涓惧��1浠ｈ〃鏌ヨ鍏ㄩ儴淇℃伅锛�2浠ｈ〃鏌ヨ鎸囧畾鍟嗗搧)
     */
    private $queryType;
    /**
     * clps鍟嗗搧缂栫爜锛屽涓敤[,]鍒嗛殧銆侰LPS鍟嗗搧缂栫爜鍜屽晢瀹跺晢鍝佺紪鐮侊紙itemCode锛夊悓鏃跺瓨鍦紝浼樺厛浣跨敤CLPS鍟嗗搧缂栫爜銆�
     */
    private $clpsGoodsNo;
    /**
     * 鍟嗗鍟嗗搧缂栫爜锛屽涓敤[,]鍒嗛殧
     */
    private $itemCode;

    public function setOwnerCode($ownerCode){
       $this->ownerCode = $ownerCode;
    }
    
    public function getOwnerCode(){
       return $this->ownerCode;
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
    public function setBarCodes($barCodes){
       $this->barCodes = $barCodes;
    }
    
    public function getBarCodes(){
       return $this->barCodes;
    }
    public function setQueryType($queryType){
       $this->queryType = $queryType;
    }
    
    public function getQueryType(){
       return $this->queryType;
    }
    public function setClpsGoodsNo($clpsGoodsNo){
       $this->clpsGoodsNo = $clpsGoodsNo;
    }
    
    public function getClpsGoodsNo(){
       return $this->clpsGoodsNo;
    }
    public function setItemCode($itemCode){
       $this->itemCode = $itemCode;
    }
    
    public function getItemCode(){
       return $this->itemCode;
    }

    public function jsonSerialize() {
        return [
            'ownerCode' => $this->ownerCode,             
            'page' => $this->page,             
            'pageSize' => $this->pageSize,             
            'barCodes' => $this->barCodes,             
            'queryType' => $this->queryType,             
            'clpsGoodsNo' => $this->clpsGoodsNo,             
            'itemCode' => $this->itemCode             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkString($this->ownerCode,"ownerCode");

       RequestCheckUtil::checkNumeric($this->page,"page");

       RequestCheckUtil::checkNumeric($this->pageSize,"pageSize");

       RequestCheckUtil::checkString($this->barCodes,"barCodes");

       RequestCheckUtil::checkString($this->queryType,"queryType");

       RequestCheckUtil::checkString($this->clpsGoodsNo,"clpsGoodsNo");

       RequestCheckUtil::checkString($this->itemCode,"itemCode");
    }
}
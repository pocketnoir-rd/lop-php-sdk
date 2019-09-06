<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QueryCategoryRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮�,varchar(50)
     */
    private $ownerNo;
    /**
     * 涓�绾у垎绫荤紪鐮�,varchar(50)
     */
    private $firstCategoryNo;
    /**
     * 浜岀骇鍒嗙被缂栫爜锛堜笉鍙负绌猴級,varchar(50)
     */
    private $secondCategoryNo;
    /**
     * 涓夌骇鍒嗙被缂栫爜,varchar(50)
     */
    private $thirdCategoryNo;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setFirstCategoryNo($firstCategoryNo){
       $this->firstCategoryNo = $firstCategoryNo;
    }
    
    public function getFirstCategoryNo(){
       return $this->firstCategoryNo;
    }
    public function setSecondCategoryNo($secondCategoryNo){
       $this->secondCategoryNo = $secondCategoryNo;
    }
    
    public function getSecondCategoryNo(){
       return $this->secondCategoryNo;
    }
    public function setThirdCategoryNo($thirdCategoryNo){
       $this->thirdCategoryNo = $thirdCategoryNo;
    }
    
    public function getThirdCategoryNo(){
       return $this->thirdCategoryNo;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'firstCategoryNo' => $this->firstCategoryNo,             
            'secondCategoryNo' => $this->secondCategoryNo,             
            'thirdCategoryNo' => $this->thirdCategoryNo             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkNumeric($this->firstCategoryNo,"firstCategoryNo");
        RequestCheckUtil::checkNotNull($this->secondCategoryNo,"secondCategoryNo");

       RequestCheckUtil::checkNumeric($this->secondCategoryNo,"secondCategoryNo");

       RequestCheckUtil::checkNumeric($this->thirdCategoryNo,"thirdCategoryNo");
    }
}
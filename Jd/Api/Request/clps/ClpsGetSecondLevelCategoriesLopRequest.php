<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ骞冲彴鎵�鏈夌殑鍟嗗搧浜岀骇鍒嗙被
*/
class ClpsGetSecondLevelCategoriesLopRequest {
   /**
    * ISV鎺堟潈鐮�
    */
    private $pin;
   /**
    * 鏌ヨ鏉′欢
    */
    private $queryCategoryRequest;


    public function setPin($pin){
        $this->pin=$pin;
    }

    public function getPin(){
         return $this->pin;
    }

    public function setQueryCategoryRequest($queryCategoryRequest){
        $this->queryCategoryRequest=$queryCategoryRequest;
    }

    public function getQueryCategoryRequest(){
         return $this->queryCategoryRequest;
    }


    public function getApiMethodName(){
        return "jingdong.clps.getSecondLevelCategories";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryCategoryRequest;
    return json_encode($apiParams);
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryCategoryRequest,"queryCategoryRequest");

       RequestCheckUtil::checkObject($this->queryCategoryRequest,"queryCategoryRequest");
       if(isset($this->queryCategoryRequest) && method_exists($this->queryCategoryRequest,"check")) {
           $this->queryCategoryRequest->check();
       }        
    }
}
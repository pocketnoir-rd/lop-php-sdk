<?php
namespace Jd\Api\Request\clps;

use Jd\Api\Util\RequestCheckUtil;

/**
* ERP鏌ヨ骞冲彴鎵�鏈夌殑鍟嗗搧涓�绾у垎绫�
*/
class ClpsGetFirstLevelCategoriesLopRequest {
   /**
    * ISV鎺堟潈鐮�,varchar(30)
    */
    private $pin;
   /**
    * 鏌ヨ鍟嗗搧鍒嗙被鍙傛暟
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
        return "jingdong.clps.getFirstLevelCategories";
    }

    public function getAppJsonParams() {
        $apiParams = array();
        $apiParams[0] = $this->pin;
        $apiParams[1] = $this->queryCategoryRequest;
    return json_encode($apiParams);
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->pin,"pin");

       RequestCheckUtil::checkString($this->pin,"pin");
        RequestCheckUtil::checkNotNull($this->queryCategoryRequest,"queryCategoryRequest");

       RequestCheckUtil::checkObject($this->queryCategoryRequest,"queryCategoryRequest");
       if(isset($this->queryCategoryRequest) && method_exists($this->queryCategoryRequest,"check")) {
           $this->queryCategoryRequest->check();
       }        
    }
}
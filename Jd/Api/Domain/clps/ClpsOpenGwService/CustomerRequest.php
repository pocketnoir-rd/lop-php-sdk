<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class CustomerRequest implements JsonSerializable {

    /**
     * add|update, 蹇呭～
     */
    private $actionType;
    /**
     * clps瀹㈡埛缂栫爜,varchar(20)
     */
    private $clpsCustomerId;
    /**
     * ERP瀹㈡埛缂栫爜,varchar(50)
     */
    private $customerId;
    /**
     * 瀹㈡埛鍚嶇О,varchar(50)
     */
    private $customerName;
    /**
     * CLPS鍟嗗缂栫爜,varchar(50)
     */
    private $sellerNo;
    /**
     * 涓浆绫诲瀷0鏅��1杞繍
     */
    private $transitType;
    /**
     * 瀹㈡埛绫诲瀷1鍥介檯2鏅��3璺ㄥ鐢靛晢4闂ㄥ簵5鎬讳粨6宸ュ巶7浜笢浠�8KA9BC瓒�10渚垮埄搴�11鎵瑰彂鍟�12浣忓畢锛堜釜浜猴級
     */
    private $customerType;
    /**
     * 绛夌骇,锛堟棤瀹為檯涓氬姟锛�
     */
    private $level;
    /**
     * 鐘舵��,锛堟棤瀹為檯涓氬姟锛�
     */
    private $status;
    /**
     * Email,varchar(100)
     */
    private $email;
    /**
     * 鐪佷唤,varchar(200)
     */
    private $province;
    /**
     * 鍩庡競,varchar(200)
     */
    private $city;
    /**
     * 鍖哄煙,varchar(200)
     */
    private $area;
    /**
     * 鏉戦晣,varchar(200)
     */
    private $town;
    /**
     * 璇︾粏鍦板潃,varchar(500)
     */
    private $address;
    /**
     * 閭紪,锛堟棤瀹為檯涓氬姟锛�
     */
    private $zipCode;
    /**
     * 鏀惰揣浜�,varchar(50)
     */
    private $consignee;
    /**
     * 鑱旂郴鐢佃瘽(鐢佃瘽鍜屾墜鏈轰笉鑳介兘涓虹┖),varchar(20)
     */
    private $phone;
    /**
     * 鎵嬫満鍙�(鐢佃瘽鍜屾墜鏈轰笉鑳介兘涓虹┖),varchar(20)
     */
    private $mobile;
    /**
     * 澶囨敞,varchar(500)
     */
    private $memo;
    /**
     * 浜嬩笟閮ㄧ紪鐮�,varchar(50)
     */
    private $deptNo;

    public function setActionType($actionType){
       $this->actionType = $actionType;
    }
    
    public function getActionType(){
       return $this->actionType;
    }
    public function setClpsCustomerId($clpsCustomerId){
       $this->clpsCustomerId = $clpsCustomerId;
    }
    
    public function getClpsCustomerId(){
       return $this->clpsCustomerId;
    }
    public function setCustomerId($customerId){
       $this->customerId = $customerId;
    }
    
    public function getCustomerId(){
       return $this->customerId;
    }
    public function setCustomerName($customerName){
       $this->customerName = $customerName;
    }
    
    public function getCustomerName(){
       return $this->customerName;
    }
    public function setSellerNo($sellerNo){
       $this->sellerNo = $sellerNo;
    }
    
    public function getSellerNo(){
       return $this->sellerNo;
    }
    public function setTransitType($transitType){
       $this->transitType = $transitType;
    }
    
    public function getTransitType(){
       return $this->transitType;
    }
    public function setCustomerType($customerType){
       $this->customerType = $customerType;
    }
    
    public function getCustomerType(){
       return $this->customerType;
    }
    public function setLevel($level){
       $this->level = $level;
    }
    
    public function getLevel(){
       return $this->level;
    }
    public function setStatus($status){
       $this->status = $status;
    }
    
    public function getStatus(){
       return $this->status;
    }
    public function setEmail($email){
       $this->email = $email;
    }
    
    public function getEmail(){
       return $this->email;
    }
    public function setProvince($province){
       $this->province = $province;
    }
    
    public function getProvince(){
       return $this->province;
    }
    public function setCity($city){
       $this->city = $city;
    }
    
    public function getCity(){
       return $this->city;
    }
    public function setArea($area){
       $this->area = $area;
    }
    
    public function getArea(){
       return $this->area;
    }
    public function setTown($town){
       $this->town = $town;
    }
    
    public function getTown(){
       return $this->town;
    }
    public function setAddress($address){
       $this->address = $address;
    }
    
    public function getAddress(){
       return $this->address;
    }
    public function setZipCode($zipCode){
       $this->zipCode = $zipCode;
    }
    
    public function getZipCode(){
       return $this->zipCode;
    }
    public function setConsignee($consignee){
       $this->consignee = $consignee;
    }
    
    public function getConsignee(){
       return $this->consignee;
    }
    public function setPhone($phone){
       $this->phone = $phone;
    }
    
    public function getPhone(){
       return $this->phone;
    }
    public function setMobile($mobile){
       $this->mobile = $mobile;
    }
    
    public function getMobile(){
       return $this->mobile;
    }
    public function setMemo($memo){
       $this->memo = $memo;
    }
    
    public function getMemo(){
       return $this->memo;
    }
    public function setDeptNo($deptNo){
       $this->deptNo = $deptNo;
    }
    
    public function getDeptNo(){
       return $this->deptNo;
    }

    public function jsonSerialize() {
        return [
            'actionType' => $this->actionType,             
            'clpsCustomerId' => $this->clpsCustomerId,             
            'customerId' => $this->customerId,             
            'customerName' => $this->customerName,             
            'sellerNo' => $this->sellerNo,             
            'transitType' => $this->transitType,             
            'customerType' => $this->customerType,             
            'level' => $this->level,             
            'status' => $this->status,             
            'email' => $this->email,             
            'province' => $this->province,             
            'city' => $this->city,             
            'area' => $this->area,             
            'town' => $this->town,             
            'address' => $this->address,             
            'zipCode' => $this->zipCode,             
            'consignee' => $this->consignee,             
            'phone' => $this->phone,             
            'mobile' => $this->mobile,             
            'memo' => $this->memo,             
            'deptNo' => $this->deptNo             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->clpsCustomerId,"clpsCustomerId");
        RequestCheckUtil::checkNotNull($this->customerId,"customerId");

       RequestCheckUtil::checkString($this->customerId,"customerId");
        RequestCheckUtil::checkNotNull($this->customerName,"customerName");

       RequestCheckUtil::checkString($this->customerName,"customerName");
        RequestCheckUtil::checkNotNull($this->sellerNo,"sellerNo");

       RequestCheckUtil::checkString($this->sellerNo,"sellerNo");
        RequestCheckUtil::checkNotNull($this->transitType,"transitType");

       RequestCheckUtil::checkObject($this->transitType,"transitType");
       if(isset($this->transitType) && method_exists($this->transitType,"check")) {
           $this->transitType->check();
       }        
        RequestCheckUtil::checkNotNull($this->customerType,"customerType");

       RequestCheckUtil::checkObject($this->customerType,"customerType");
       if(isset($this->customerType) && method_exists($this->customerType,"check")) {
           $this->customerType->check();
       }        

       RequestCheckUtil::checkString($this->level,"level");

       RequestCheckUtil::checkString($this->status,"status");

       RequestCheckUtil::checkString($this->email,"email");

       RequestCheckUtil::checkString($this->province,"province");

       RequestCheckUtil::checkString($this->city,"city");

       RequestCheckUtil::checkString($this->area,"area");

       RequestCheckUtil::checkString($this->town,"town");
        RequestCheckUtil::checkNotNull($this->address,"address");

       RequestCheckUtil::checkString($this->address,"address");

       RequestCheckUtil::checkString($this->zipCode,"zipCode");
        RequestCheckUtil::checkNotNull($this->consignee,"consignee");

       RequestCheckUtil::checkString($this->consignee,"consignee");
        RequestCheckUtil::checkNotNull($this->phone,"phone");

       RequestCheckUtil::checkString($this->phone,"phone");
        RequestCheckUtil::checkNotNull($this->mobile,"mobile");

       RequestCheckUtil::checkString($this->mobile,"mobile");

       RequestCheckUtil::checkString($this->memo,"memo");
        RequestCheckUtil::checkNotNull($this->deptNo,"deptNo");

       RequestCheckUtil::checkString($this->deptNo,"deptNo");
    }
}
<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class ReceiverInfo implements JsonSerializable {

    /**
     * 鍏徃,鏈惎鐢�
     */
    private $company;
    /**
     * 濮撳悕,string(50)
     */
    private $name;
    /**
     * 閭紪,string(20)
     */
    private $zipCode;
    /**
     * 鍥鸿瘽,string(50)
     */
    private $tel;
    /**
     * 绉诲姩鐢佃瘽,string(50)
     */
    private $mobile;
    /**
     * idType,鏈惎鐢�
     */
    private $idType;
    /**
     * idNumber,鏈惎鐢�
     */
    private $idNumber;
    /**
     * 閭,string(100)
     */
    private $email;
    /**
     * 鍥藉浜屽瓧鐮�,鏈惎鐢�
     */
    private $countryCode;
    /**
     * 鐪佷唤,string(50)
     */
    private $province;
    /**
     * 鍩庡競,string(50)
     */
    private $city;
    /**
     * 鍖哄煙,string(50)
     */
    private $area;
    /**
     * 鏉戦晣,string(50)
     */
    private $town;
    /**
     * 璇︾粏鍦板潃,string(300)
     */
    private $detailAddress;
    /**
     * 涔板鐣欒█,string(500)
     */
    private $remark;

    public function setCompany($company){
       $this->company = $company;
    }
    
    public function getCompany(){
       return $this->company;
    }
    public function setName($name){
       $this->name = $name;
    }
    
    public function getName(){
       return $this->name;
    }
    public function setZipCode($zipCode){
       $this->zipCode = $zipCode;
    }
    
    public function getZipCode(){
       return $this->zipCode;
    }
    public function setTel($tel){
       $this->tel = $tel;
    }
    
    public function getTel(){
       return $this->tel;
    }
    public function setMobile($mobile){
       $this->mobile = $mobile;
    }
    
    public function getMobile(){
       return $this->mobile;
    }
    public function setIdType($idType){
       $this->idType = $idType;
    }
    
    public function getIdType(){
       return $this->idType;
    }
    public function setIdNumber($idNumber){
       $this->idNumber = $idNumber;
    }
    
    public function getIdNumber(){
       return $this->idNumber;
    }
    public function setEmail($email){
       $this->email = $email;
    }
    
    public function getEmail(){
       return $this->email;
    }
    public function setCountryCode($countryCode){
       $this->countryCode = $countryCode;
    }
    
    public function getCountryCode(){
       return $this->countryCode;
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
    public function setDetailAddress($detailAddress){
       $this->detailAddress = $detailAddress;
    }
    
    public function getDetailAddress(){
       return $this->detailAddress;
    }
    public function setRemark($remark){
       $this->remark = $remark;
    }
    
    public function getRemark(){
       return $this->remark;
    }

    public function jsonSerialize() {
        return [
            'company' => $this->company,             
            'name' => $this->name,             
            'zipCode' => $this->zipCode,             
            'tel' => $this->tel,             
            'mobile' => $this->mobile,             
            'idType' => $this->idType,             
            'idNumber' => $this->idNumber,             
            'email' => $this->email,             
            'countryCode' => $this->countryCode,             
            'province' => $this->province,             
            'city' => $this->city,             
            'area' => $this->area,             
            'town' => $this->town,             
            'detailAddress' => $this->detailAddress,             
            'remark' => $this->remark             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->company,"company");
        RequestCheckUtil::checkNotNull($this->name,"name");

       RequestCheckUtil::checkString($this->name,"name");

       RequestCheckUtil::checkString($this->zipCode,"zipCode");

       RequestCheckUtil::checkString($this->tel,"tel");
        RequestCheckUtil::checkNotNull($this->mobile,"mobile");

       RequestCheckUtil::checkString($this->mobile,"mobile");

       RequestCheckUtil::checkString($this->idType,"idType");

       RequestCheckUtil::checkString($this->idNumber,"idNumber");

       RequestCheckUtil::checkString($this->email,"email");

       RequestCheckUtil::checkString($this->countryCode,"countryCode");

       RequestCheckUtil::checkString($this->province,"province");

       RequestCheckUtil::checkString($this->city,"city");

       RequestCheckUtil::checkString($this->area,"area");

       RequestCheckUtil::checkString($this->town,"town");
        RequestCheckUtil::checkNotNull($this->detailAddress,"detailAddress");

       RequestCheckUtil::checkString($this->detailAddress,"detailAddress");

       RequestCheckUtil::checkString($this->remark,"remark");
    }
}
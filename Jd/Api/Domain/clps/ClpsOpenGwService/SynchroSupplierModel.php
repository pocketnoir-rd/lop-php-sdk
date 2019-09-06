<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SynchroSupplierModel implements JsonSerializable {

    /**
     * 鎿嶄綔绫诲瀷 add update(濉啓鍏跺畠鍊煎垯榛樿update)
     */
    private $actionType;
    /**
     * 浜嬩笟閮ㄧ紪鐮佸繀濉紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶�;
     */
    private $ownerNo;
    /**
     * 浜嬩笟閮ㄥ悕绉�
     */
    private $ownerName;
    /**
     * ISV渚涘簲鍟嗙紪鍙�(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(100)
     */
    private $isvSupplierNo;
    /**
     * 渚涘簲鍟嗙紪鍙�(鎿嶄綔绫诲瀷涓簎pdate鏃朵笌ISV渚涘簲鍟嗙紪鍙疯嚦灏戞湁涓�涓�),String(50)
     */
    private $clpsSupplierNo;
    /**
     * 渚涘簲鍟嗗悕绉�(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(500)
     */
    private $supplierName;
    /**
     * 渚涘簲鍟嗙被鍨�(1.榛樿銆�2.鍏跺畠),int(4)
     */
    private $supplierType;
    /**
     * 渚涘簲鍟嗙姸鎬�(1.鍒濆銆�2.鍚敤銆�3.鍋滅敤),int(4)
     */
    private $status;
    /**
     * 鑱旂郴浜�(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(50)
     */
    private $contacts;
    /**
     * 鑱旂郴浜烘墜鏈�,String(15)
     */
    private $mobile;
    /**
     * 鑱旂郴鐢佃瘽(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(50)
     */
    private $phone;
    /**
     * 浼犵湡,String(50)
     */
    private $fax;
    /**
     * 閭,String(100)
     */
    private $email;
    /**
     * 鐪�,String(100)
     */
    private $province;
    /**
     * 甯�,String(100)
     */
    private $city;
    /**
     * 鍖恒�佸幙,String(100)
     */
    private $county;
    /**
     * 涔°�侀晣,String(100)
     */
    private $town;
    /**
     * 璇︾粏鍦板潃,String(500)
     */
    private $address;
    /**
     * 鎵╁睍瀛楁
     */
    private $ext1;
    /**
     * 鎵╁睍瀛楁
     */
    private $ext2;
    /**
     * 鎵╁睍瀛楁
     */
    private $ext3;
    /**
     * 鎵╁睍瀛楁
     */
    private $ext4;
    /**
     * 鎵╁睍瀛楁
     */
    private $ext5;

    public function setActionType($actionType){
       $this->actionType = $actionType;
    }
    
    public function getActionType(){
       return $this->actionType;
    }
    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setOwnerName($ownerName){
       $this->ownerName = $ownerName;
    }
    
    public function getOwnerName(){
       return $this->ownerName;
    }
    public function setIsvSupplierNo($isvSupplierNo){
       $this->isvSupplierNo = $isvSupplierNo;
    }
    
    public function getIsvSupplierNo(){
       return $this->isvSupplierNo;
    }
    public function setClpsSupplierNo($clpsSupplierNo){
       $this->clpsSupplierNo = $clpsSupplierNo;
    }
    
    public function getClpsSupplierNo(){
       return $this->clpsSupplierNo;
    }
    public function setSupplierName($supplierName){
       $this->supplierName = $supplierName;
    }
    
    public function getSupplierName(){
       return $this->supplierName;
    }
    public function setSupplierType($supplierType){
       $this->supplierType = $supplierType;
    }
    
    public function getSupplierType(){
       return $this->supplierType;
    }
    public function setStatus($status){
       $this->status = $status;
    }
    
    public function getStatus(){
       return $this->status;
    }
    public function setContacts($contacts){
       $this->contacts = $contacts;
    }
    
    public function getContacts(){
       return $this->contacts;
    }
    public function setMobile($mobile){
       $this->mobile = $mobile;
    }
    
    public function getMobile(){
       return $this->mobile;
    }
    public function setPhone($phone){
       $this->phone = $phone;
    }
    
    public function getPhone(){
       return $this->phone;
    }
    public function setFax($fax){
       $this->fax = $fax;
    }
    
    public function getFax(){
       return $this->fax;
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
    public function setCounty($county){
       $this->county = $county;
    }
    
    public function getCounty(){
       return $this->county;
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
    public function setExt1($ext1){
       $this->ext1 = $ext1;
    }
    
    public function getExt1(){
       return $this->ext1;
    }
    public function setExt2($ext2){
       $this->ext2 = $ext2;
    }
    
    public function getExt2(){
       return $this->ext2;
    }
    public function setExt3($ext3){
       $this->ext3 = $ext3;
    }
    
    public function getExt3(){
       return $this->ext3;
    }
    public function setExt4($ext4){
       $this->ext4 = $ext4;
    }
    
    public function getExt4(){
       return $this->ext4;
    }
    public function setExt5($ext5){
       $this->ext5 = $ext5;
    }
    
    public function getExt5(){
       return $this->ext5;
    }

    public function jsonSerialize() {
        return [
            'actionType' => $this->actionType,             
            'ownerNo' => $this->ownerNo,             
            'ownerName' => $this->ownerName,             
            'isvSupplierNo' => $this->isvSupplierNo,             
            'clpsSupplierNo' => $this->clpsSupplierNo,             
            'supplierName' => $this->supplierName,             
            'supplierType' => $this->supplierType,             
            'status' => $this->status,             
            'contacts' => $this->contacts,             
            'mobile' => $this->mobile,             
            'phone' => $this->phone,             
            'fax' => $this->fax,             
            'email' => $this->email,             
            'province' => $this->province,             
            'city' => $this->city,             
            'county' => $this->county,             
            'town' => $this->town,             
            'address' => $this->address,             
            'ext1' => $this->ext1,             
            'ext2' => $this->ext2,             
            'ext3' => $this->ext3,             
            'ext4' => $this->ext4,             
            'ext5' => $this->ext5             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->actionType,"actionType");
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerName,"ownerName");

       RequestCheckUtil::checkString($this->isvSupplierNo,"isvSupplierNo");

       RequestCheckUtil::checkString($this->clpsSupplierNo,"clpsSupplierNo");

       RequestCheckUtil::checkString($this->supplierName,"supplierName");

       RequestCheckUtil::checkString($this->supplierType,"supplierType");

       RequestCheckUtil::checkString($this->status,"status");

       RequestCheckUtil::checkString($this->contacts,"contacts");

       RequestCheckUtil::checkString($this->mobile,"mobile");

       RequestCheckUtil::checkString($this->phone,"phone");

       RequestCheckUtil::checkString($this->fax,"fax");

       RequestCheckUtil::checkString($this->email,"email");

       RequestCheckUtil::checkString($this->province,"province");

       RequestCheckUtil::checkString($this->city,"city");

       RequestCheckUtil::checkString($this->county,"county");

       RequestCheckUtil::checkString($this->town,"town");

       RequestCheckUtil::checkString($this->address,"address");

       RequestCheckUtil::checkString($this->ext1,"ext1");

       RequestCheckUtil::checkString($this->ext2,"ext2");

       RequestCheckUtil::checkString($this->ext3,"ext3");

       RequestCheckUtil::checkString($this->ext4,"ext4");

       RequestCheckUtil::checkString($this->ext5,"ext5");
    }
}
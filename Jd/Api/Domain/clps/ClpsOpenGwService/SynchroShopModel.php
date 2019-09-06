<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class SynchroShopModel implements JsonSerializable {

    /**
     * 鎿嶄綔绫诲瀷  add update,濡傚～鍐欏叾瀹冨�煎垯榛樿update
     */
    private $actionType;
    /**
     * clps搴楅摵缂栧彿(鎿嶄綔绫诲瀷涓簎pdate鏃跺繀濉�),String(50)
     */
    private $shopNo;
    /**
     * ISV搴楅摵缂栧彿(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(50)
     */
    private $isvShopNo;
    /**
     * 鎵�灞為攢鍞钩鍙扮紪鍙�(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�,閫氳繃鎺ュ彛querySpSource鏂规硶鑾峰彇瀵瑰簲鐨勫钩鍙扮紪鐮�),int(4)
     */
    private $spSourceNo;
    /**
     * 鎵�灞炰簨涓氶儴缂栧彿蹇呭～锛涗簨涓氶儴缂栫爜蹇呴』浠BU寮�澶�;
     */
    private $ownerNo;
    /**
     * 搴楅摵绫诲瀷(閿�鍞钩鍙�=浜笢:1闂喘搴楅摵/2SOP搴楅摵/3FBP搴楅摵,鍏跺畠閿�鍞钩鍙�:4鍏跺畠),int(4)
     */
    private $type;
    /**
     * 鐘舵��(1鍚敤/2鍋滅敤/3鍒濆/4寰呭鏍�/5椹冲洖),int(4)
     */
    private $status;
    /**
     * 閿�鍞钩鍙板簵閾虹紪鍙�,String(50)
     */
    private $spShopNo;
    /**
     * 搴楅摵鍚嶇О(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(100)
     */
    private $shopName;
    /**
     * 搴楅摵鑱旂郴浜�,String(50)
     */
    private $contacts;
    /**
     * 鑱旂郴浜虹數璇�,String(50)
     */
    private $phone;
    /**
     * 搴楅摵鍦板潃,String(500)
     */
    private $address;
    /**
     * 閭,String(100)
     */
    private $email;
    /**
     * 浼犵湡,String(15)
     */
    private $fax;
    /**
     * 鍞悗鑱旂郴浜�(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(50)
     */
    private $afterSaleContacts;
    /**
     * 鍞悗鍦板潃(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(500)
     */
    private $afterSaleAddress;
    /**
     * 鍞悗鐢佃瘽(鎿嶄綔绫诲瀷涓篴dd鏃跺繀濉�),String(50)
     */
    private $afterSalePhone;
    /**
     * 闈掗緳涓氫富鍙�,String(5000)
     */
    private $bdOwnerNo;
    /**
     * 鍑哄簱瑙勫垯鏍囪浣�(10浣嶅瓧绗︿覆,1鍏佽鎷嗗崟,2鍏佽璐у埌浠樻璁㈠崟鎷嗗崟,3鍏佽鍗昐KU鎷嗗垎,4鍏佽璧犲搧鍗曠嫭鎷嗗垎,5璁㈠崟椹卞姩鍐呴厤,6浠呭崟搴撴埧鍑哄簱),int(20)
     */
    private $outstoreRules;
    /**
     * 涓氬姟妯″紡(1:浜粨锛�2:浜簯浠擄紝3:闂喘),int(4)
     */
    private $bizType;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve1;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve2;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve3;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve4;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve5;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve6;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve7;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve8;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve9;
    /**
     * 棰勭暀瀛楁
     */
    private $reserve10;

    public function setActionType($actionType){
       $this->actionType = $actionType;
    }
    
    public function getActionType(){
       return $this->actionType;
    }
    public function setShopNo($shopNo){
       $this->shopNo = $shopNo;
    }
    
    public function getShopNo(){
       return $this->shopNo;
    }
    public function setIsvShopNo($isvShopNo){
       $this->isvShopNo = $isvShopNo;
    }
    
    public function getIsvShopNo(){
       return $this->isvShopNo;
    }
    public function setSpSourceNo($spSourceNo){
       $this->spSourceNo = $spSourceNo;
    }
    
    public function getSpSourceNo(){
       return $this->spSourceNo;
    }
    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setType($type){
       $this->type = $type;
    }
    
    public function getType(){
       return $this->type;
    }
    public function setStatus($status){
       $this->status = $status;
    }
    
    public function getStatus(){
       return $this->status;
    }
    public function setSpShopNo($spShopNo){
       $this->spShopNo = $spShopNo;
    }
    
    public function getSpShopNo(){
       return $this->spShopNo;
    }
    public function setShopName($shopName){
       $this->shopName = $shopName;
    }
    
    public function getShopName(){
       return $this->shopName;
    }
    public function setContacts($contacts){
       $this->contacts = $contacts;
    }
    
    public function getContacts(){
       return $this->contacts;
    }
    public function setPhone($phone){
       $this->phone = $phone;
    }
    
    public function getPhone(){
       return $this->phone;
    }
    public function setAddress($address){
       $this->address = $address;
    }
    
    public function getAddress(){
       return $this->address;
    }
    public function setEmail($email){
       $this->email = $email;
    }
    
    public function getEmail(){
       return $this->email;
    }
    public function setFax($fax){
       $this->fax = $fax;
    }
    
    public function getFax(){
       return $this->fax;
    }
    public function setAfterSaleContacts($afterSaleContacts){
       $this->afterSaleContacts = $afterSaleContacts;
    }
    
    public function getAfterSaleContacts(){
       return $this->afterSaleContacts;
    }
    public function setAfterSaleAddress($afterSaleAddress){
       $this->afterSaleAddress = $afterSaleAddress;
    }
    
    public function getAfterSaleAddress(){
       return $this->afterSaleAddress;
    }
    public function setAfterSalePhone($afterSalePhone){
       $this->afterSalePhone = $afterSalePhone;
    }
    
    public function getAfterSalePhone(){
       return $this->afterSalePhone;
    }
    public function setBdOwnerNo($bdOwnerNo){
       $this->bdOwnerNo = $bdOwnerNo;
    }
    
    public function getBdOwnerNo(){
       return $this->bdOwnerNo;
    }
    public function setOutstoreRules($outstoreRules){
       $this->outstoreRules = $outstoreRules;
    }
    
    public function getOutstoreRules(){
       return $this->outstoreRules;
    }
    public function setBizType($bizType){
       $this->bizType = $bizType;
    }
    
    public function getBizType(){
       return $this->bizType;
    }
    public function setReserve1($reserve1){
       $this->reserve1 = $reserve1;
    }
    
    public function getReserve1(){
       return $this->reserve1;
    }
    public function setReserve2($reserve2){
       $this->reserve2 = $reserve2;
    }
    
    public function getReserve2(){
       return $this->reserve2;
    }
    public function setReserve3($reserve3){
       $this->reserve3 = $reserve3;
    }
    
    public function getReserve3(){
       return $this->reserve3;
    }
    public function setReserve4($reserve4){
       $this->reserve4 = $reserve4;
    }
    
    public function getReserve4(){
       return $this->reserve4;
    }
    public function setReserve5($reserve5){
       $this->reserve5 = $reserve5;
    }
    
    public function getReserve5(){
       return $this->reserve5;
    }
    public function setReserve6($reserve6){
       $this->reserve6 = $reserve6;
    }
    
    public function getReserve6(){
       return $this->reserve6;
    }
    public function setReserve7($reserve7){
       $this->reserve7 = $reserve7;
    }
    
    public function getReserve7(){
       return $this->reserve7;
    }
    public function setReserve8($reserve8){
       $this->reserve8 = $reserve8;
    }
    
    public function getReserve8(){
       return $this->reserve8;
    }
    public function setReserve9($reserve9){
       $this->reserve9 = $reserve9;
    }
    
    public function getReserve9(){
       return $this->reserve9;
    }
    public function setReserve10($reserve10){
       $this->reserve10 = $reserve10;
    }
    
    public function getReserve10(){
       return $this->reserve10;
    }

    public function jsonSerialize() {
        return [
            'actionType' => $this->actionType,             
            'shopNo' => $this->shopNo,             
            'isvShopNo' => $this->isvShopNo,             
            'spSourceNo' => $this->spSourceNo,             
            'ownerNo' => $this->ownerNo,             
            'type' => $this->type,             
            'status' => $this->status,             
            'spShopNo' => $this->spShopNo,             
            'shopName' => $this->shopName,             
            'contacts' => $this->contacts,             
            'phone' => $this->phone,             
            'address' => $this->address,             
            'email' => $this->email,             
            'fax' => $this->fax,             
            'afterSaleContacts' => $this->afterSaleContacts,             
            'afterSaleAddress' => $this->afterSaleAddress,             
            'afterSalePhone' => $this->afterSalePhone,             
            'bdOwnerNo' => $this->bdOwnerNo,             
            'outstoreRules' => $this->outstoreRules,             
            'bizType' => $this->bizType,             
            'reserve1' => $this->reserve1,             
            'reserve2' => $this->reserve2,             
            'reserve3' => $this->reserve3,             
            'reserve4' => $this->reserve4,             
            'reserve5' => $this->reserve5,             
            'reserve6' => $this->reserve6,             
            'reserve7' => $this->reserve7,             
            'reserve8' => $this->reserve8,             
            'reserve9' => $this->reserve9,             
            'reserve10' => $this->reserve10             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->actionType,"actionType");

       RequestCheckUtil::checkString($this->shopNo,"shopNo");

       RequestCheckUtil::checkString($this->isvShopNo,"isvShopNo");

       RequestCheckUtil::checkString($this->spSourceNo,"spSourceNo");
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->type,"type");

       RequestCheckUtil::checkString($this->status,"status");

       RequestCheckUtil::checkString($this->spShopNo,"spShopNo");

       RequestCheckUtil::checkString($this->shopName,"shopName");

       RequestCheckUtil::checkString($this->contacts,"contacts");

       RequestCheckUtil::checkString($this->phone,"phone");

       RequestCheckUtil::checkString($this->address,"address");

       RequestCheckUtil::checkString($this->email,"email");

       RequestCheckUtil::checkString($this->fax,"fax");

       RequestCheckUtil::checkString($this->afterSaleContacts,"afterSaleContacts");

       RequestCheckUtil::checkString($this->afterSaleAddress,"afterSaleAddress");

       RequestCheckUtil::checkString($this->afterSalePhone,"afterSalePhone");

       RequestCheckUtil::checkString($this->bdOwnerNo,"bdOwnerNo");

       RequestCheckUtil::checkString($this->outstoreRules,"outstoreRules");

       RequestCheckUtil::checkString($this->bizType,"bizType");

       RequestCheckUtil::checkString($this->reserve1,"reserve1");

       RequestCheckUtil::checkString($this->reserve2,"reserve2");

       RequestCheckUtil::checkString($this->reserve3,"reserve3");

       RequestCheckUtil::checkString($this->reserve4,"reserve4");

       RequestCheckUtil::checkString($this->reserve5,"reserve5");

       RequestCheckUtil::checkString($this->reserve6,"reserve6");

       RequestCheckUtil::checkString($this->reserve7,"reserve7");

       RequestCheckUtil::checkString($this->reserve8,"reserve8");

       RequestCheckUtil::checkString($this->reserve9,"reserve9");

       RequestCheckUtil::checkString($this->reserve10,"reserve10");
    }
}
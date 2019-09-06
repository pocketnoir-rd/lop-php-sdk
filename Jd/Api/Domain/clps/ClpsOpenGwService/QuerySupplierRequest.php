<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class QuerySupplierRequest implements JsonSerializable {

    /**
     * 浜嬩笟閮ㄧ紪鐮佸繀濉紱浜嬩笟閮ㄧ紪鐮佸繀椤讳互CBU寮�澶�
     */
    private $ownerNo;
    /**
     * 渚涘簲鍟嗙紪鐮侊紝澶氫釜閫楀彿鍒嗛殧,鏁伴噺闇�灏忎簬10
     */
    private $supplierNos;

    public function setOwnerNo($ownerNo){
       $this->ownerNo = $ownerNo;
    }
    
    public function getOwnerNo(){
       return $this->ownerNo;
    }
    public function setSupplierNos($supplierNos){
       $this->supplierNos = $supplierNos;
    }
    
    public function getSupplierNos(){
       return $this->supplierNos;
    }

    public function jsonSerialize() {
        return [
            'ownerNo' => $this->ownerNo,             
            'supplierNos' => $this->supplierNos             
        ];
    }
    
    public function check() {
        RequestCheckUtil::checkNotNull($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->ownerNo,"ownerNo");

       RequestCheckUtil::checkString($this->supplierNos,"supplierNos");
    }
}
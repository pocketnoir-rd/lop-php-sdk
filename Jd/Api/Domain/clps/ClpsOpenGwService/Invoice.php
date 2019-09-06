<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class Invoice implements JsonSerializable {

    /**
     * 鍙戠エ绫诲瀷, string (50) , INVOICE=鏅�氬彂绁紝VINVOICE=澧炲�肩◣鏅�氬彂绁�, EVINVOICE=鐢靛瓙澧炵エ, 鏉′欢蹇呭～ (鏉′欢涓篿nvoiceFlag涓篩)
     */
    private $type;
    /**
     * 鍙戠エ鎶ご
     */
    private $header;
    /**
     * 鍙戠エ鎬婚噾棰�
     */
    private $amount;
    /**
     * 鍙戠エ鍐呭,string(500) 锛屼笉鎺ㄨ崘浣跨敤
     */
    private $content;
    /**
     * 鏄庣粏锛宒etail鍜宑ontent鍚屾椂瀛樺湪浼樺厛浣跨敤detail
     */
    private $detail;

    public function setType($type){
       $this->type = $type;
    }
    
    public function getType(){
       return $this->type;
    }
    public function setHeader($header){
       $this->header = $header;
    }
    
    public function getHeader(){
       return $this->header;
    }
    public function setAmount($amount){
       $this->amount = $amount;
    }
    
    public function getAmount(){
       return $this->amount;
    }
    public function setContent($content){
       $this->content = $content;
    }
    
    public function getContent(){
       return $this->content;
    }
    public function setDetail($detail){
       $this->detail = $detail;
    }
    
    public function getDetail(){
       return $this->detail;
    }

    public function jsonSerialize() {
        return [
            'type' => $this->type,             
            'header' => $this->header,             
            'amount' => $this->amount,             
            'content' => $this->content,             
            'detail' => $this->detail             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkString($this->type,"type");

       RequestCheckUtil::checkString($this->header,"header");

       RequestCheckUtil::checkNumeric($this->amount,"amount");

       RequestCheckUtil::checkString($this->content,"content");

       RequestCheckUtil::checkArray($this->detail,"detail");
       if(isset($this->detail)) {
           $arrlength=count($this->detail);
           for($index=0;$index<$arrlength;$index++){
               if(isset($this->detail[$index]) && method_exists($this->detail[$index],"check")) {
                   $this->detail[$index]->check();
               }
           }
       }
    }
}
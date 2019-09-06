<?php
namespace Jd\Api\Domain\clps\ClpsOpenGwService;

use Jd\Api\Util\RequestCheckUtil;
use JsonSerializable;

class DeliveryRequirements implements JsonSerializable {

    /**
     * 鎶曢�掓椂寤惰姹�, 1=宸ヤ綔鏃�,2=鑺傚亣鏃�,101=褰撴棩杈�,102=娆℃櫒杈�,103=娆℃棩杈�, 104=棰勭害杈�,鏈惎鐢�
     */
    private $scheduleType;
    /**
     * 瑕佹眰閫佽揪鏃ユ湡,鏈惎鐢�
     */
    private $scheduleDay;
    /**
     * 鎶曢�掓椂闂磋寖鍥磋姹� (寮�濮嬫椂闂�),鏈惎鐢�
     */
    private $scheduleStartTime;
    /**
     * 鎶曢�掓椂闂磋寖鍥磋姹� (缁撴潫鏃堕棿),鏈惎鐢�
     */
    private $scheduleEndTime;
    /**
     * 鍙戣揣鏈嶅姟绫诲瀷.string(20).PTPS=鏅�氶厤閫�,LLP=鍐烽摼閰嶉��,HBP=鐜繚閰�
     */
    private $deliveryType;
    /**
     * 杩愯緭杞﹀瀷
     */
    private $carType;

    public function setScheduleType($scheduleType){
       $this->scheduleType = $scheduleType;
    }
    
    public function getScheduleType(){
       return $this->scheduleType;
    }
    public function setScheduleDay($scheduleDay){
       $this->scheduleDay = $scheduleDay;
    }
    
    public function getScheduleDay(){
       return $this->scheduleDay;
    }
    public function setScheduleStartTime($scheduleStartTime){
       $this->scheduleStartTime = $scheduleStartTime;
    }
    
    public function getScheduleStartTime(){
       return $this->scheduleStartTime;
    }
    public function setScheduleEndTime($scheduleEndTime){
       $this->scheduleEndTime = $scheduleEndTime;
    }
    
    public function getScheduleEndTime(){
       return $this->scheduleEndTime;
    }
    public function setDeliveryType($deliveryType){
       $this->deliveryType = $deliveryType;
    }
    
    public function getDeliveryType(){
       return $this->deliveryType;
    }
    public function setCarType($carType){
       $this->carType = $carType;
    }
    
    public function getCarType(){
       return $this->carType;
    }

    public function jsonSerialize() {
        return [
            'scheduleType' => $this->scheduleType,             
            'scheduleDay' => $this->scheduleDay,             
            'scheduleStartTime' => $this->scheduleStartTime,             
            'scheduleEndTime' => $this->scheduleEndTime,             
            'deliveryType' => $this->deliveryType,             
            'carType' => $this->carType             
        ];
    }
    
    public function check() {

       RequestCheckUtil::checkNumeric($this->scheduleType,"scheduleType");

       RequestCheckUtil::checkString($this->scheduleDay,"scheduleDay");

       RequestCheckUtil::checkString($this->scheduleStartTime,"scheduleStartTime");

       RequestCheckUtil::checkString($this->scheduleEndTime,"scheduleEndTime");

       RequestCheckUtil::checkString($this->deliveryType,"deliveryType");

       RequestCheckUtil::checkString($this->carType,"carType");
    }
}
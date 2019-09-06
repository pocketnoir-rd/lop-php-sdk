<?php
namespace Jd\Api\Util;
use Exception;

/**
 * API入参静态检查类
 * 可以对API的参数类型、长度、最大值等进行校验
 *
 **/
class RequestCheckUtil
{
	/**
	 * 校验字段 fieldName 的值$value非空
	 *
	 **/
	public static function checkNotNull($value,$fieldName) {
		
		if(self::checkEmpty($value)){
			throw new Exception("client-check-error:Missing Required Arguments: " .$fieldName , 40);
		}
	}

	/**
	 * 检验字段fieldName的值value 的长度
	 *
	 **/
	public static function checkMaxLength($value,$maxLength,$fieldName){		
		if(!self::checkEmpty($value) && mb_strlen($value , "UTF-8") > $maxLength){
			throw new Exception("client-check-error:Invalid Arguments:the length of " .$fieldName . " can not be larger than " . $maxLength . "." , 41);
		}
	}

	/**
	 * 检验字段fieldName的值value的最大列表长度
	 *
	 **/
	public static function checkMaxListSize($value,$maxSize,$fieldName) {	

		if(self::checkEmpty($value))
			return ;

		$list=preg_split("/,/",$value);
		if(count($list) > $maxSize){
				throw new Exception("client-check-error:Invalid Arguments:the listsize(the string split by \",\") of ". $fieldName . " must be less than " . $maxSize . " ." , 41);
		}
	}

	/**
	 * 检验字段fieldName的值value 的最大值
	 *
	 **/
	public static function checkMaxValue($value,$maxValue,$fieldName){	

		if(self::checkEmpty($value))
			return ;

		self::checkNumeric($value,$fieldName);

		if($value > $maxValue){
				throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " can not be larger than " . $maxValue ." ." , 41);
		}
	}

	/**
	 * 检验字段fieldName的值value 的最小值
	 *
	 **/
	public static function checkMinValue($value,$minValue,$fieldName) {
		
		if(self::checkEmpty($value))
			return ;

		self::checkNumeric($value,$fieldName);
		
		if($value < $minValue){
				throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " can not be less than " . $minValue . " ." , 41);
		}
	}

	/**
	 * 检验字段fieldName的值value是否是number
	 *
	 **/
	public static function checkNumeric($value,$fieldName) {
        if (self::checkEmpty($value))
            return;

		if(!is_numeric($value))
			throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not number" , 41);
	}

    /**
     * 检验字段fieldName的值value是否是boolean
     *
     **/
    public static function checkBoolean($value,$fieldName) {
        if (self::checkEmpty($value))
            return;
        if(!is_bool($value))
            throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not boolean" , 41);
    }

    /**
     * 检验字段fieldName的值value是否是String
     *
     **/
    public static function checkString($value,$fieldName) {
        if (self::checkEmpty($value))
            return;
        if(!is_string($value))
            throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not string" , 41);
    }

    /**
     * 检验字段fieldName的值value是否是日期对象
     *
     **/
    public static function checkDate($value,$fieldName) {
        if (self::checkEmpty($value))
            return;
        if (!(is_object($value) and method_exists($value, "format")))
            throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not DateTime" , 41);
    }

    /**
     * 检验字段fieldName的值value是否是Array
     *
     **/
    public static function checkArray($value,$fieldName) {
        if (self::checkEmpty($value))
            return;
        if (!is_array($value))
            throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not array", 41);
    }

    /**
     * 检验字段fieldName的值value是否是Object
     *
     **/
    public static function checkObject($value,$fieldName) {
        if (self::checkEmpty($value))
            return;
        if (!is_object($value))
            throw new Exception("client-check-error:Invalid Arguments:the value of " . $fieldName . " is not object", 41);
    }

	/**
	 * 校验$value是否非空
	 *  if not set ,return true;
	 *	if is null , return true;
	 *	
	 *
	 **/
	public static function checkEmpty($value) {
		if(!isset($value))
			return true ;
		if($value === null )
			return true;
		if(is_string($value) and trim($value) === "")
			return true;
		return false;
	}

}
?>
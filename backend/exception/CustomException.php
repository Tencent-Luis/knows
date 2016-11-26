<?php
namespace backend\exception;
/**
 * Description of CustomException
 * 自定义异常类
 * @author Lu
 * @time 2016-10-31
 */
use yii\web\HttpException;

class CustomException extends HttpException
{
    public function __construct($status, $message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct($status, $message, $code, $previous);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/2
 * Time: 15:05
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code=400;
    public $msg='参数错误';
    public $errCode=10000;

}
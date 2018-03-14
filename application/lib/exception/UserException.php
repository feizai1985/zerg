<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 16:41
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    //状态码 200 400.。
    public $code = 400;
    //错误信息
    public $msg = '当前用户不存在';
    //自定义错误码
    public $errCode = 10000;
}
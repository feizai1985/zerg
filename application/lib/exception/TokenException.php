<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 15:44
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    //状态码 200 400.。
    public $code = 401;
    //错误信息
    public $msg = 'Token已过期或无效Token';
    //自定义错误码
    public $errCode = 10001;
}
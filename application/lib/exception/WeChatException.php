<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 10:33
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    //状态码 200 400.。
    public $code = 400;
    //错误信息
    public $msg = '微信调用错误';
    //自定义错误码
    public $errCode = 10000;
}
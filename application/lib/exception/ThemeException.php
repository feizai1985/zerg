<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9
 * Time: 9:15
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    //状态码 200 400.。
    public $code = 404;
    //错误信息
    public $msg = '指定的主题不存在';
    //自定义错误码
    public $errCode = 30000;
}
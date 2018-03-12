<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 10:24
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    //状态码 200 400.。
    public $code = 400;
    //错误信息
    public $msg = '指定的商品部存在，请检查参数';
    //自定义错误码
    public $errCode = 20000;

}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 16:44
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    //状态码 200 400.。
    public $code = 400;
    //错误信息
    public $msg = '获取分类信息错误';
    //自定义错误码
    public $errCode = 50000;

}
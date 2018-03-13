<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/13
 * Time: 15:21
 */

namespace app\api\service;


use think\Request;

class Token
{
    public static function generateToken(){
        //32个字符组成随机字符串
        $randChars=getRandChar(32);
        //用三组字符串，进行MD5加密
        $timestamp=$_SERVER['REQUEST_TIME_FLOAT'];
        //salt 盐
        $salt=config('secure.token_salt');
        return md5($randChars.$timestamp.$salt);
    }

}
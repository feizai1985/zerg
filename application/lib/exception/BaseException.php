<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/2
 * Time: 10:39
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    //状态码 200 400.。
    public $code = 400;
    //错误信息
    public $msg = '参数错误';
    //自定义错误码
    public $errCode = 10000;

    /**
     * BaseException constructor.
     * @param int $code
     */
    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return;
        }

        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errCode', $params)) {
            $this->errCode = $params['errCode'];
        }
    }


}
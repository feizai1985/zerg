<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/2
 * Time: 10:31
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errcode;

    public function render(\Exception $e)
    {
        if ($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errcode = $e->errCode;

        } else {
            if (config('app_debug')) {
                return parent::render($e);
            } else {
                $this->code = 500;
                $this->msg = '服务器内部错误';
                $this->errcode = 999;
                $this->recordErrorLog($e);
            }

        }

        $result = [
            'code' => $this->code,
            'msg' => $this->msg,
            'errcode' => $this->errcode,
            'url' => Request::instance()->url(),
        ];

        return json($result, $this->code);
    }

    private function recordErrorLog(\Exception $e)
    {
        Log::init([
            'type' => 'File',
        ]);
        Log::record($e->getMessage(), 'error');

    }
}
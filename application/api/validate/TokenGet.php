<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 17:48
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
  protected $rule=[
    'code'=>'require|isNotEmpty'
  ];

 protected $message=[
     'code'=>'没有code不能获取Token'
 ];
}
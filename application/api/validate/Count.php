<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 10:14
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule=[
      'count'=>'isPositiveInteger|between:1,15'
    ];

}
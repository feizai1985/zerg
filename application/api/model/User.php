<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 17:56
 */

namespace app\api\model;


class User extends BaseModel
{

    public static function getByOpenId($openid)
    {
        $user = self::where('openid', '=', $openid)->find();
        return $user;
    }

    public function address()
    {
        return $this->hasOne('UserAddress', 'user_id', 'id');
    }

}
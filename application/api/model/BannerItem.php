<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/6
 * Time: 14:54
 */

namespace app\api\model;


use think\Model;

class BannerItem extends Model
{
    public function img()
    {
        return $this->belongsTo('Image','img_id','id');
    }

}
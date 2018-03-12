<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 16:37
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden=[
      'update_time','delete_time','create_time'
    ];
    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }

}
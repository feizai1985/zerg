<?php

namespace app\api\model;


class Product extends BaseModel
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/3/8
     * Time: 16:57
     */
{
protected $hidden=[
    'update_time',
    'delete_time',
    'main_img_id',
    'pivot',
    'from',
    'category_id',
    'create_time'
];
}
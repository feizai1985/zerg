<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14
 * Time: 14:58
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
protected $hidden=[
  'product_id','create_time','update_time','delete_time'
];
}
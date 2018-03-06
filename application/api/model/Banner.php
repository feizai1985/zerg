<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/2
 * Time: 9:35
 */

namespace app\api\model;


use think\Db;

class Banner
{
  public static function getBannerById($id){

//       $result=Db::query('select * from banner_item where banner_id=? ',[$id]);
//       return $result;

    $result=Db::table('banner_item')->where('banner_id','=',$id)->select();
    return $result;
  }
}
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/2
 * Time: 9:35
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{

    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
  public static function getBannerById($id){

//       $result=Db::query('select * from banner_item where banner_id=? ',[$id]);
//       return $result;

    $result=Db::table('banner_item')->where('banner_id','=',$id)->select();
    return $result;
  }
}
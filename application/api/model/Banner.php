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

class Banner extends BaseModel
{
     protected $hidden=['update_time','delete_time'];
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
  public static function getBannerById($id){

  $banner=self::with(['items','items.img'])->find($id);
    return $banner;
  }
}
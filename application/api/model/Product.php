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
public function imgs(){
   return  $this->hasMany('ProductImage','product_id','id');
}

public function properties(){
  return  $this->hasMany('ProductProperty','product_id','id');
}

public function getMainImgUrlAttr($value,$data){
    return $this->prefixImgUrl($value,$data);
}

  public static function getMostRecent($count){
    $prducts=self::limit($count)->order('create_time desc')->select();
    return $prducts;
  }
  public static function getAllInCategory($id){
    $products=self::where('category_id','=',$id)->select();
    return $products;
  }

  public static function getProductDetail($id){
       $product=self::with(['imgs'=>function($query){
           $query->with(['imgUrl'])->order('order','asc');
       }])->with(['properties'])->find($id);
       return $product;
  }
}
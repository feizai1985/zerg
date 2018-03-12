<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 10:11
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ProductException;

class Product
{
  public function getRecent($count=15){

      (new Count())->goCheck();
      $products=ProductModel::getMostRecent($count);
      if($products->isEmpty()){
          throw new ProductException;
      }
      $products=$products->hidden(['summary']);
      return $products;

  }

  public function getAllInCategory($id){
      (new IDMustBePositiveInt())->goCheck();
        $products=ProductModel::getAllInCategory($id);
        if($products->isEmpty()){
            throw new ProductException();
        }
        return $products;
  }
}
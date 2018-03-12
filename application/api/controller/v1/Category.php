<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/12
 * Time: 16:36
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
 public function getAllCategorys(){

//    $categorys= CategoryModel::all([],['img']);
     $categorys=CategoryModel::with('img')->select();
    if($categorys->isEmpty()){

        throw new CategoryException();
    }
    return $categorys;

 }
}
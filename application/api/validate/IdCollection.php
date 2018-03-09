<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 17:15
 */

namespace app\api\validate;


class IdCollection extends BaseValidate

{

     protected $rule=[
       'ids'=>'require|checkIDs'
     ];
     protected $message=[
       'ids'=>'ids是以，分隔的正整数'
     ];

     protected function checkIDs($value){
         $values=explode(',',$value);
         if(empty($values)){
             return false;
         }
         foreach ($values as $id){
              if(!$this->isPositiveInteger($id)){
                  return false;
              }
         }
         return true;
     }
}
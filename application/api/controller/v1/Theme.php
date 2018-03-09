<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/8
 * Time: 16:56
 */

namespace app\api\controller\v1;


use app\api\validate\IdCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;

class Theme
{

    public function getSimpleList($ids = '')
    {

        (new IdCollection())->goCheck();
        $result=ThemeModel::with(['topicImg','headImg'])->select($ids);
        if(!$result){
            throw new ThemeException();
        }
        return $result;

    }

    public  function getComplexOne($id){
        (new IDMustBePositiveInt())->goCheck();
        $theme=ThemeModel::getThemeWithProducts($id);
        if(!$theme){
            throw new ThemeException();
        }
        return $theme;
    }

}
<?php

namespace app\index\model;

use think\Model;

class User extends Model
{
    //
    public static function  getNameById($id){
        return self::where('id',$id)->value('nickname');
    }
}

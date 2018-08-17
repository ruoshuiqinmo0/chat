<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/17
 * Time: 17:44
 */

namespace app\index\controller;


use app\index\model\Communication;
use app\index\model\User;
use think\Controller;
use think\Request;

class Chat extends Controller
{
    public function save_message(){
        $requst = Request::instance();
        if($requst->isAjax()){
            $data = input('message');
            $data['isread'] = 1;
            $data['fromname'] = User::getNameById($data['fromid']);
            $data['toname'] = User::getNameById($data['toid']);
            $data['time '] = time();
            if(Communication::create($data)){
                return json(['status'=>'ok'],200);
            };
        }
        return json(['status'=>'ok'],404);
    }
}
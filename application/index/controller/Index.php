<?php
namespace app\index\controller;

use think\Controller;

class Index  extends  Controller
{
    public function index()
    {
        $toID = input("toid");
        $fromID = input("fromID");
        $this->assign("fromid",$fromID);
        $this->assign("toid",$toID);
        return $this->fetch();
    }
}

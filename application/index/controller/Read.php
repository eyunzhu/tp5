<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Read extends Controller
{
    public function index()
    {
    	
        $data = Db::name('think_data')->find();
        $this->assign('result', $data);
        return $this->fetch();
    }
}
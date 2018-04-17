<?php
namespace app\index\controller;

//使用use进行了别名导入
use think\Controller;

class Index extends Controller
{
    public function hello($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
    public function index($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
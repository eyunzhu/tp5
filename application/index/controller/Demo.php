<?php
namespace app\index\controller;

//使用use进行了别名导入
use think\Controller;

class Demo extends Controller
{
    
    public function index($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
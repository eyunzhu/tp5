<?php
namespace app\index\controller;

//使用use进行了别名导入
use think\Controller;

class Login extends Controller
{
    public function login($name = 'thinkphp' ,$psw = '123')
    {
        $this->assign('name', $name);
        $this->assign('psw', $psw);
        return $this->fetch();
    }
    public function index($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
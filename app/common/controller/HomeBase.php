<?php
namespace app\common\controller;

use app\BaseController;
use think\facade\Db;

//获取config数据
class HomeBase extends BaseController{
    protected function initialize(){
        parent::initialize(); // TODO: Change the autogenerated stub
        $config = Db::name('config')->select()->toArray();
        $this->config = array_column($config,'value','name');
    }
}
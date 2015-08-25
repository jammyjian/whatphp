<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +--------------------------- -------------------------------------------

// Admin 应用入口文件
header('content-type:text/html;charset=utf-8');
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
error_reporting(E_ALL);

//$_GET['m'] = 'Admin';//绑定Admin模块到当前入口文件（旧版本写法）
define('BIND_MODULE', 'Admin');//绑定Admin模块到当前入口文件(3.2.1以上版本写法)

// 定义应用目录
define('APP_PATH','./Apps/');

//自定义几个常量

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单
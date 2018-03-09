<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./App/');

// 引入ThinkPHP入口文件
if(defined('BUILD_LITE_FILE') && BUILD_LITE_FILE  && file_exists('./App/Runtime/lite.php')){
    require './App/Runtime/lite.php';
}else{
    require './ThinkPHP/ThinkPHP.php';
}


if($_SERVER['SERVER_NAME']=='paytest.itcitylife.com') {//后台

    define('APP_NAME','Home');

}elseif($_SERVER['SERVER_NAME']=='llpay.itcitylife.com') {//连连支付接口

    define('APP_NAME','Llpay');

}elseif($_SERVER['SERVER_NAME']=='alipay.itcitylife.com') {//支付宝支付接口

    define('APP_NAME','Alipay');

}elseif($_SERVER['SERVER_NAME']=='wexinpay.itcitylife.com') {//微信支付接口

    define('APP_NAME','Wexinpay');

}


// 亲^_^ 后面不需要任何代码了 就是如此简单
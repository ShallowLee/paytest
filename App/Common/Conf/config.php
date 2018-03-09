<?php
return array(
    'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名配置
    'APP_SUB_DOMAIN_RULES'    =>    array(//隐藏模块名称
        'llpay.itcitylife.com'        => 'Llpay',//pc门户站
    ),
    'LOG_RECORD'               =>  false,   // 默认不记录日志
    //'TMPL_FILE_DEPR'=>'_',//
    'TMPL_TEMPLATE_SUFFIX'     => '.html',//默认文件后缀
    'URL_HTML_SUFFIX'          => '.htm',//伪静态
//    'SHOW_PAGE_TRACE'=>true,// 显示页面Trace信息
    'URL_PARAMS_BIND'          => true, // URL变量绑定到操作方法作为参数
    'DEFAULT_CONTROLLER'       => 'Index', // 默认控制器名称
    'URL_ROUTER_ON'            => true, // 开启路由

    'URL_MODEL'                => '2', // 开启路由
//    'URL_ROUTE_RULES'          => array( //路由正则
////访问地址http://www.xxx.com/index.php/Home/News/add/id/3.html
////短地址http://www.xxx.com/add_3.html
////短链接php里 U('/add_3'); html里 {:U('/add_3')}
//        '/^add_(\d{0,2})$/'               => 'Home/News/add?id=:1',
////访问地址http://www.xxx.com/index.php/Home/News/add/name/aa/id/3.html
////短地址http://www.xxx.com/add/aa/3.html
////短链接php里U('/add/aa/3'); html里 {:U('/add/aa/3')}
//        '/^add\/(\w+)\/(\d{0,2})$/'       => 'Home/News/add?name=:1&id=:2',
////访问地址http://www.xxx.com/index.php/Home/News/add/id/3.html
////短地址http://www.xxx.com/3.html
////短链接php里U('/3'); html里 {:U('/3')}
//        '/^(\d{0,2})$/'                   =>'Home/News/add?id=:1',
////访问地址http://www.xxx.com/index.php/Home/News/add?name/aa/id/3.html
////短地址http://www.xxx.com/aa/3.html
////短链接php里U('/aa/3'); html里 {:U('/aa/3')}
//        '/^(\w+)\/(\d{0,2})$/'            => 'Home/News/add?name=:1&id=:2',
////访问地址http://www.xxx.com/index.php/Home/News/add?id/上海(北京)
////短地址http://www.xxx.com/上海.html
////短链接php里U('/上海'); html里 {:U('/上海')}
//        '/^([\x{4e00}-\x{9fa5}]+)$/u'     => 'Home/News/add?id=:1',
//
//    ),

    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '116.62.170.115', // 服务器地址
    'DB_NAME'   => 'pay08', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'show1028', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

    'MSG_TYPE' => array(
        'PUSH_LOGISTICS' => 'SMS_80035060',  //推送给物流公司短信，让他们去知道我们的门户网站
        'TEST'           => 'SMS_70540156',  //测试
        'VALIDATE'       => 'SMS_27300149',
    ),

    'DATA_CACHE_PREFIX' => 'Redis_logistics',//缓存前缀
    'DATA_CACHE_TYPE'=>'Redis',//默认动态缓存为Redis
    'REDIS_RW_SEPARATE' => true, //Redis读写分离 true 开启
    'REDIS_HOST'=>'116.62.148.75', //redis服务器ip，多台用逗号隔开；读写分离开启时，第一台负责写，其它[随机]负责读；
    'REDIS_PORT'=>'6379',//端口号
    'REDIS_TIMEOUT'=>'300',//超时时间
    'REDIS_PERSISTENT'=>false,//是否长连接 false=短连接
    'REDIS_AUTH'=>'',//AUTH认证密码
);
<?php
namespace Llpay\Controller;
use Think\Controller;
/* *
 * 连连支付接口公用函数
 * 详细：该类是请求、通知返回两个文件所调用的公用函数核心处理文件
 * 版本：1.1
 * 日期：2014-04-16
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 */

/**
 * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
 * @param $para 需要拼接的数组
 * return 拼接完成以后的字符串
 */
class Md5Controller extends Controller
{

    function md5Sign($prestr, $key) {
        $logstr = $prestr."&key=************************";
        $prestr = $prestr ."&key=". $key;
        //file_put_contents("log.txt","签名原串:".$logstr."\n", FILE_APPEND);
        return md5($prestr);
    }

    /**
     * 验证签名
     * @param $prestr 需要签名的字符串
     * @param $sign 签名结果
     * @param $key 私钥
     * return 签名结果
     */
    function md5Verify($prestr, $sign, $key) {
        $logstr = $prestr."&key=************************";
        $prestr = $prestr ."&key=". $key;
        //file_put_contents("log.txt","prestr:".$logstr."\n", FILE_APPEND);
        $mysgin = md5($prestr);
        //file_put_contents("log.txt","1:".$mysgin."\n", FILE_APPEND);
        if($mysgin == $sign) {
            return true;
        }
        else {
            return false;
        }
    }
}

?>
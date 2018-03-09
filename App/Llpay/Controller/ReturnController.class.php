<?php


?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php
    //计算得出通知验证结果
    $llpayNotify = new LLpayNotify($llpay_config);
    $verify_result = $llpayNotify->verifyReturn();
    if($verify_result) {//验证成功
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //请在这里加上商户的业务逻辑程序代码

        //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
        //获取连连支付的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
        $json = new JSON;
        $res_data = $_POST["res_data"];


        //商户编号
        $oid_partner = $json->decode($res_data)-> {'oid_partner' };

        //商户订单号
        $no_order = $json->decode($res_data)-> {'no_order' };

        //支付结果
        $result_pay =  $json->decode($res_data)-> {'result_pay' };

        if($result_pay == 'SUCCESS') {
            //判断该笔订单是否在商户网站中已经做过处理
            //如果没有做过处理，根据订单号（no_order）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
            //如果有做过处理，不执行商户的业务程序
        }
        else {
            echo "result_pay=".$result_pay;
        }

        echo "验证成功<br />";

        //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    }
    else {
        //验证失败
        //如要调试，请看llpay_notify.php页面的verifyReturn函数
        echo "验证失败";
    }
    ?>
    <title>连连支付wap交易接口</title>
</head>
<body>
</body>
</html>

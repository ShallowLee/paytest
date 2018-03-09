<?php
namespace Llpay\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $ConfigController = new  ConfigController();
        $CoreController   = new  CoreController();
        $llpaySubmit      = new  SubmitController();

        $llpay_config = $ConfigController->msg();


        if (!$_POST){
            $this->display();
        }else{
//商户用户唯一编号
        $user_id = $_POST['user_id'];

//支付类型
        $busi_partner = $_POST['busi_partner'];

//商户订单号
        $no_order = $_POST['no_order'];
//商户网站订单系统中唯一订单号，必填

//付款金额
        $money_order = $_POST['money_order'];
//必填

//商品名称
        $name_goods = $_POST['name_goods'];

//订单描述
        $info_order = $_POST['info_order'];

//卡号
        $card_no = $_POST['card_no'];

//姓名
        $acct_name = $_POST['acct_name'];

//身份证号
        $id_no = $_POST['id_no'];

//协议号
        $no_agree = $_POST['no_agree'];

//风险控制参数
        $risk_item = $_POST['risk_item'];

//订单有效期
        $valid_order = $_POST['valid_order'];

//        $user_id = "12313433";
//
////支付类型
//        $busi_partner = "101001";
//
////商户订单号
//        $no_order = "20140444434534";
////商户网站订单系统中唯一订单号，必填
//
////付款金额
//        $money_order = "0.01";
////必填
//
////商品名称
//        $name_goods = "测试商品";
//
////订单描述
//        $info_order = "测试商品测试商品测试商品";
//
////卡号
//        $card_no = "6212261202024692569";
//
////姓名
//        $acct_name = "胡长涛";
//
////身份证号
//        $id_no = "500233198904144430";
//
////协议号
//        $no_agree = "";
//
////风险控制参数
//        $risk_item = "{'frms_ware_category':'2009','user_info_mercht_userno':'123456','user_info_dt_register':'20141015165530','user_info_full_name':'张三','user_info_id_no':'3306821990012121221','user_info_identify_type':'1','user_info_identify_state':'1'}";
//
////订单有效期
//        $valid_order = 10080;
//
////服务器异步通知页面路径
        $notify_url = "http://10.10.110.246/llpay/notify_url.php";
////需http://格式的完整路径，不能加?id=123这类自定义参数
//
////页面跳转同步通知页面路径
        $return_url = "http://10.10.110.246/llpay/return_url.php";
////需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/
////exit();
//        /************************************************************/
////        require_once ("llpay.config.php");
////        require_once ("lib/llpay_submit.class.php");
////构造要请求的参数数组，无需改动


        $parameter = array (
            "oid_partner" => trim($llpay_config['oid_partner']),
            "app_request" => trim($llpay_config['app_request']),
            "sign_type" => trim($llpay_config['sign_type']),
            "valid_order" => trim($llpay_config['valid_order']),
            "user_id" => $user_id,
            "busi_partner" => $busi_partner,
            "no_order" => $no_order,
            "dt_order" => $CoreController->local_date('YmdHis', time()),
            "name_goods" => $name_goods,
            "info_order" => $info_order,
            "money_order" => $money_order,
            "notify_url" => $notify_url,
            "url_return" => $return_url,
            "card_no" => $card_no,
            "acct_name" => $acct_name,
            "id_no" => $id_no,
            "no_agree" => $no_agree,
            "risk_item" => $risk_item,
            "valid_order" => $valid_order
        );

//        var_dump($parameter);
//        exit();
//建立请求

//        $llpaySubmit = new LLpaySubmit();
        $html_text = $llpaySubmit->buildRequestForm($parameter, "post", "确认");
        echo $html_text;
        }

    }
}
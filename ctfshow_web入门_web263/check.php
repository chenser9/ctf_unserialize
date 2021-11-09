<?php


error_reporting(0);
require_once 'inc/inc.php';
$GET = array("u"=>$_GET['u'],"pass"=>$_GET['pass']);


if($GET){

    $data= $db->get('admin',
        [	'id',
            'UserName0'
        ],[
            "AND"=>[
                "UserName0[=]"=>$GET['u'],
                "PassWord1[=]"=>$GET['pass'] //密码必须为128位大小写字母+数字+特殊符号，防止爆破
            ]
        ]);
    if($data['id']){
        //登陆成功取消次数累计
        $_SESSION['limit']= 0;
        echo json_encode(array("success","msg"=>"欢迎您".$data['UserName0']));
    }else{
        //登陆失败累计次数加1
        $_COOKIE['limit'] = base64_encode(base64_decode($_COOKIE['limit'])+1);
        echo json_encode(array("error","msg"=>"登陆失败"));
    }
}



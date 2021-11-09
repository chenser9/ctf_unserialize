<?php

error_reporting(0);
session_start();
//超过5次禁止登陆
if(isset($_SESSION['limit'])){
    $_SESSION['limti']>5?die("登陆失败次数超过限制"):$_SESSION['limit']=base64_decode($_COOKIE['limit']);
    $_COOKIE['limit'] = base64_encode(base64_decode($_COOKIE['limit']) +1);
}else{
    setcookie("limit",base64_encode('1'));
    $_SESSION['limit']= 1;
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1, minimum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ctfshow登陆</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="pc-kk-form">
    <center><h1>CTFshow 登陆</h1></center><br><br>
    <form action="" onsubmit="return false;">
        <div class="pc-kk-form-list">
            <input id="u" type="text" placeholder="用户名">
        </div>
        <div class="pc-kk-form-list">
            <input id="pass" type="password" placeholder="密码">
        </div>

        <div class="pc-kk-form-btn">
            <button onclick="check();">登陆</button>
        </div>
    </form>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>

<script>

    function check(){
        $.ajax({
            url:'check.php',
            type: 'GET',
            data:{
                'u':$('#u').val(),
                'pass':$('#pass').val()
            },
            success:function(data){
                alert(JSON.parse(data).msg);
            },
            error:function(data){
                alert(JSON.parse(data).msg);
            }

        });
    }


</script>

</body>
</html>


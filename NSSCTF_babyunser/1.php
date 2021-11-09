<?php
class HaHaHa{


    public $admin;
    public $passwd;

    public function __construct(){
        $this->admin ="admin";
        $this->passwd = "wllm";
    }

    public function __wakeup(){
        $this->passwd = sha1($this->passwd);
    }

    public function __destruct(){
        if($this->admin === "admin" && $this->passwd === "wllm"){
            include("flag.php");
            #echo $flag;
        }else{
            echo $this->passwd;
            echo "No wake up";
        }
    }
}
$a=new Hahaha();
echo serialize($a);

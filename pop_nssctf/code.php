<?php


error_reporting(0);
show_source("index.php");

class w44m
{

    private $admin = 'aaa';
    protected $passwd = '123456';

    public function Getflag()
    {
        if ($this->admin === 'w44m' && $this->passwd === '08067') {
            include('flag.php');
            echo $flag;
        } else {
            echo $this->admin;
            echo $this->passwd;
            echo 'nono';
        }
    }
}

class w22m
{
    public $w00m;

    public function __destruct()
    {
        echo $this->w00m;
    }
}

class w33m
{
    public $w00m;
    public $w22m;

    public function __toString()
    {
        $this->w00m->{$this->w22m}();
        return 0;
    }
}

$w00m = $_GET['w00m'];
unserialize($w00m);


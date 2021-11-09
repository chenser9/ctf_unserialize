<?php
error_reporting(0);

class catalogue{
    public $class;
    public $data;
    public function __construct()
    {
        $this->class = "error";
        $this->data = "hacker";
    }
    public function __destruct()
    {
        echo new $this->class($this->data);
    }
}
class error{
    public function __construct($OTL)
    {
        $this->OTL = $OTL;
        echo ("hello ".$this->OTL);
    }
}
class escape{
    public $name = 'OTL';
    public $phone = '123666';
    public $email = 'sweet@OTL.com';
}
function abscond($string) {
    $filter = array('NSS', 'CTF', 'OTL_QAQ', 'hello');
    $filter = '/' . implode('|', $filter) . '/i';
    return preg_replace($filter, 'hacker', $string);
}
if(isset($_GET['cata'])){
    if(!preg_match('/object/i',$_GET['cata'])){
        unserialize($_GET['cata']);
    }
    else{
        $cc = new catalogue();
        unserialize(serialize($cc));
    }
    if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])){
        if (preg_match("/flag/i",$_POST['email'])){
            die("nonono,you can not do that!");
        }
        $abscond = new escape();
        $abscond->name = $_POST['name'];
        $abscond->phone = $_POST['phone'];
        $abscond->email = $_POST['email'];
        $abscond = serialize($abscond);
        $escape = get_object_vars(unserialize(abscond($abscond)));
        if(is_array($escape['phone'])){
            echo base64_encode(file_get_contents($escape['email']));
        }
        else{
            echo "I'm sorry to tell you that you are wrong";
        }
    }
}
else{
    highlight_file(__FILE__);
}
?>

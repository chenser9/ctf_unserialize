<?php
class aa{
    public $name;

    public function __construct(){
        $this->name='aa';
    }

    public function __destruct(){
        $this->name=strtolower($this->name);
    }
}

class ff{
    private $content;
    public $func;

    public function __construct(){
        $this->content="\<?php @eval(\$_POST[1]);?>";
    }

    public function __get($key){
        $this->$key->{$this->func}($_POST['cmd']);
    }
}

class zz{
    public $filename;
    public $content='surprise';

    public function __construct($filename){
        $this->filename=$filename;
    }

    public function filter(){
        if(preg_match('/^\/|php:|data|zip|\.\.\//i',$this->filename)){
            die('这不合理');
        }
    }

    public function write($var){
        $filename=$this->filename;
        $lt=$this->filename->$var;
        //此功能废弃，不想写了
    }

    public function getFile(){
        $this->filter();
        $contents=file_get_contents($this->filename);
        if(!empty($contents)){
            return $contents;
        }else{
            die("404 not found");
        }
    }

    public function __toString(){
        $this->{$_POST['method']}($_POST['var']);
        return $this->content;
    }
}

class xx{
    public $name;
    public $arg;

    public function __construct(){
        $this->name='eval';
        $this->arg='phpinfo();';
    }

    public function __call($name,$arg){
        $name($arg[0]);
    }
}

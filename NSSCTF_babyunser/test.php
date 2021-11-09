<?php
//
//class test{
//
//    public $name = 'lcx';
//
//    function __construct(){
//        echo "__construct()";
//        echo "<br><br>";
//    }
//
//    function __destruct(){
//        echo "__destruct()";
//        echo "<br><br>";
//    }
//
//    function __wakeup(){
//        echo "__wakeup()";
//        echo "<br><br>";
//    }
//
//    function __toString(){
//        return "__toString()"."<br><br>";
//    }
//
//    function __sleep(){
//        echo "__sleep()";
//        echo "<br><br>";
//        return array("name");
//    }
//
//}
//
//$test1 = new test();
//$test2 = serialize($test1);
//print($test2);
//$test3 = unserialize($test2);
//print($test3);
class Test{
    public function __construct()
    {
        $this->system("ls");
    }
}
$a=new Test();
printf(); "abv";
?>


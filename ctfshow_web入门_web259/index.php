<?php
highlight_file(__FILE__);
$vip = unserialize($_GET['vip']);
//vip can get flag one key
$vip->getFlag();    //调用不存在的方法触发SoapClient类中的__call魔术方法
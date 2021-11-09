<?php
@error_reporting(0);
require_once "common.php";
require_once "class.php";

@$player = unserialize(read(check(file_get_contents("caches/".md5($_SERVER['REMOTE_ADDR'])))));
print_r($player);
if ($player->get_admin() === 1){
    echo "FPX Champion\n";
}
else{
    echo "The Shy unstoppable\n";
}
?>

<?php
@error_reporting(0);
require_once "common.php";
require_once "class.php";

if (isset($_GET['username']) && isset($_GET['password'])){
    $username = $_GET['username'];
    $password = $_GET['password'];
    $player = new player($username, $password);
    file_put_contents("caches/".md5($_SERVER['REMOTE_ADDR']), write(serialize($player)));
    echo sprintf('Welcome %s, your ip is %s\n', $username, $_SERVER['REMOTE_ADDR']);
}
else{
    echo "Please input the username or password!\n";
}

?>

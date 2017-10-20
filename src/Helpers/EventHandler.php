<?php

namespace Noisim\SSEvent\Helpers;

use Sse\Event;

class EventHandler implements Event
{
    private $closure;

    public function __construct($closure)
    {
        $this->closure = $closure;
    }

    public function update()
    {
        if ($this->is_closure($this->closure)) {
            $closure = $this->closure;
            return $closure();
        }
    }

    public function check()
    {
        if ($this->is_closure($this->closure)) {
            return true;
        }
    }

    private function is_closure($c)
    {
        return is_object($c) && ($c instanceof \Closure);
    }
}
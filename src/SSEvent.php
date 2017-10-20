<?php

namespace Noisim\SSEvent;

use Noisim\SSEvent\Helpers\EventHandler;
use Sse\Event;
use Sse\SSE;
use Symfony\Component\HttpFoundation\Request;

class SSEvent extends SSE
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->exec_limit = config("ss-event.exec_limit");
        $this->sleep_time = config("ss-event.sleep_time");
        $this->client_reconnect = config("ss-event.client_reconnect");
        $this->use_chunked_encodung = config("ss-event.use_chunked_encodung");
        $this->keep_alive_time = config("ss-event.keep_alive_time");
        $this->allow_cors = config("ss-event.allow_cors");
    }

    public function addEvent($eventName, $closure)
    {
        if ($closure instanceof Event) {
            $this->addEventListener($eventName, $closure);
            return $this;
        }

        $this->addEventListener($eventName, new EventHandler($closure));
        return $this;
    }

    public function sleepTime($seconds)
    {
        $this->sleep_time = $seconds;
        return $this;
    }

    public function execLimit($seconds)
    {
        $this->exec_limit = $seconds;
        return $this;
    }

    public function clientReconnect($clReconnect)
    {
        $this->client_reconnect = $clReconnect;
        return $this;
    }

    public function useChunkedEncodung($chEnc)
    {
        $this->use_chunked_encodung = $chEnc;
        return $this;
    }

    public function keepAliveTime($seconds)
    {
        $this->keep_alive_time = $seconds;
        return $this;
    }

    public function allowCors($allow)
    {
        $this->allow_cors = $allow;
        return $this;
    }
}
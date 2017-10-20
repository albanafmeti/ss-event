<?php

namespace Noisim\Facades;

use Illuminate\Support\Facades\Facade;

class SSEvent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ss-event';
    }
}
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Seconds to sleep after the data has been sent
    |--------------------------------------------------------------------------
    |
    */

    'sleep_time' => 0.5,

    /*
    |--------------------------------------------------------------------------
    | The time limit of the script in seconds
    |--------------------------------------------------------------------------
    |
    */

    'exec_limit' => 600,

    /*
    |--------------------------------------------------------------------------
    | The time client to reconnect after connection has lost in seconds
    |--------------------------------------------------------------------------
    |
    */

    'client_reconnect' => 600,

    /*
    |--------------------------------------------------------------------------
    | Allow Cross-Origin Access
    |--------------------------------------------------------------------------
    |
    */

    'allow_cors' => false,

    /*
    |--------------------------------------------------------------------------
    | The interval of sending a signal to keep the connection alive
    |--------------------------------------------------------------------------
    |
    */

    'keep_alive_time' => 300,

    /*
    |--------------------------------------------------------------------------
    | Allow chunked encoding
    |--------------------------------------------------------------------------
    |
    */

    'use_chunked_encoding' => false
];

This library provides Server Sent Event for Laravel. Tested on Laravel 5.5.

## How to use

This package is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "noisim/ss-event": "dev-master"
    }
}
```

and run composer to update the dependencies `composer update`.

Then open your Laravel config file config/app.php and in the `$providers` array add the service provider for this package.

```php
\Noisim\SSEvent\SSEventServiceProvider::class
```

Finally generate the configuration file running in the console:
```
php artisan vendor:publish --tag=config
```

Laravel Controller:

```php
<?php
namespace App\Http\Controllers;

use Noisim\SSEvent\SSEvent;

class TestController extends Controller
{
    public function test()
    {
        $sse = new SSEvent();
        return $sse->sleepTime(10)->addEvent("event_name", function () {
            return json_encode(["hello" => "world"]);
        })->start();
    }
}
```

Route
```php
<?php

Route::get('test', 'TestController@test')->name("test");
```

Client Javascript:

```js

var source = new EventSource('/test');
source.addEventListener('event_name', function(event) {
     console.log(event);
}, false);
```

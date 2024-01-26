# Package to handle the js logs within laravel

Please note that this is just the laravel handler for the logs, 
you will have to execute a client side request to the route provided from this package to
write the logs

## Setup

### Download package

`composer require yogesmhrj\laravel-jslogs`

### Setup service providers

Once the composer has completed the package download, head on to `config\app.php` and add the following line to the `providers` array.

    Yogesmhrj\LaravelJslogs\Providers\JsLogServiceProvider::class


### Endpoint for ajax calls

Once the setup is complete, you can call ajax with POST method to the endpoint `hop/store/js/logs` to store your logs.   

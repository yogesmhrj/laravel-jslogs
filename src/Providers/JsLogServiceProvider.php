<?php
/**
 * Created by Yogesh on 26/01/2024
 */
namespace Yogesmhrj\LaravelJslogs\Providers;

use Illuminate\Support\ServiceProvider;

class JsLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

}

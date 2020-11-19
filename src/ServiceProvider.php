<?php


namespace MaxZhang\JttSdk;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(DefaultJttClient::class, function () {
            return new DefaultJttClient(
                config('services.jttSdk.appKey'),
                config('services.jttSdk.appSecret')
            );
        });

        $this->app->alias(DefaultJttClient::class, 'jttSdk');
    }

    public function provides()
    {
        return [DefaultJttClient::class, 'jttSdk'];
    }
}
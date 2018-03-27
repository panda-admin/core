<?php

namespace PandaAdmin\Core;


use Illuminate\Support\ServiceProvider;
use PandaAdmin\Core\Contenttypes\Config;
use Symfony\Component\Yaml\Yaml;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Config::class, function($app) {
            return new Config(Yaml::parseFile(config_path('panda-admin/contenttypes.yml')));
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../dist' => public_path('vendor/panda-admin'),
            __DIR__ . '/../config/panda-admin.php' => config_path('panda-admin/panda-admin.php'),
            __DIR__ . '/../config/contenttypes.yml' => config_path('panda-admin/contenttypes.yml'),
        ], 'panda-admin');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'panda-admin');
    }
}
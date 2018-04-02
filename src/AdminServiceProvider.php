<?php

namespace PandaAdmin\Core;


use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use PandaAdmin\Core\Contenttypes\Config;
use PandaAdmin\Core\Contenttypes\Form\FormBuilder;
use PandaAdmin\Core\Contenttypes\Fields\FieldMap;
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
        $this->app->singleton(Config::class, function($app) {
            return new Config(Yaml::parseFile(config_path('panda-admin/contenttypes.yml')));
        });

        // TODO: Make fieldmap consume custom fields
        $this->app->singleton(FieldMap::class, function($app) {
            return new FieldMap();
        });

        $this->app->bind(FormBuilder::class, function (Application $app) {
            return new FormBuilder($app->make(FieldMap::class));
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
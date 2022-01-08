<?php

namespace Weiaibaicai\OperationLog;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Weiaibaicai\OperationLog\Http\Middleware\OperationLogMiddleware;

class OperationLogServiceProvider extends ServiceProvider
{
    protected $middleware = [
        'middle' => [
            OperationLogMiddleware::class,
        ],
    ];

    public function init()
    {
        $this->app->booted(function () {
            Admin::app()->routes(function ($router) {
                $attributes = array_merge([
                    'prefix'     => config('admin.route.prefix'),
                    'middleware' => config('admin.route.middleware'),
                ], $this->config('route', []));

                $router->group($attributes, __DIR__ . '/Http/routes.php');
            });
        });

        $this->publishes([
            __DIR__.'/../config/operation-log.php' => config_path('operation-log.php'),
        ]);

        parent::init();
    }


    public function settingForm()
    {
        return new Setting($this);
    }
}

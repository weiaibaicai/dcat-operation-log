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

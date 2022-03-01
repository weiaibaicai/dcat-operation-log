<?php

return [
    //需要排除的路由
    'except' => [
        'auth/operation-logs*', //操作日志的路由

    ],

    //需要保密的字段
    'secret_fields' => [
        'password',
        'password_confirmation',
    ],

    //允许的方法
    'allowed_methods' => ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'TRACE', 'PATCH'],

    //多后台用户表与其模型命名空间的映射关系
    'users_map' => [
        'admin_users' => 'App\Models\AdminUser',
    ]
];

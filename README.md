# Dcat Admin Extension  管理员操作日志扩展

## 依赖
- php  | >= 7.4.0
- dcat/laravel-admin  | >= ~2.0


## 安装

### composer 安装

```
composer require weiaibaicai/dcat-operation-log
```

### 启用插件
```
开发工具 -> 扩展 -> weiaibaicai.dcat-operation-log -> 升级 -> 启用
```

### 发布配置 operation-log.php

```
php artisan vendor:publish --provider="Weiaibaicai\OperationLog\OperationLogServiceProvider"
```

## 方法使用
```
1、添加日志菜单，路径为`auth/operation-logs`即可
2、详细使用，可以查看配置`operation-log.php`
```

## 安装问题
1. 发布文件时可能存在权限问题，记得给足权限。可在项目根目录执行 `chmod -R 755 public/vendor`
2. 读取不到已经发布的配置，可清空一下缓存 `php artisan config:clear`

<?php

use Weiaibaicai\OperationLog\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Weiaibaicai\OperationLog\Models\OperationLog;

if (OperationLog::withRoutes()) {
    Route::get('auth/operation-logs', Controllers\LogController::class.'@index')->name('dcat-admin.operation-log.index');
    Route::delete('auth/operation-logs/{id}', Controllers\LogController::class.'@destroy')->name('dcat-admin.operation-log.destroy');
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAppTypeToAdminOperationLogTable extends Migration
{
    public function getConnection()
    {
        return config('database.connection') ?: config('database.default');
    }

    public function up()
    {
        if (Schema::hasTable('admin_operation_log')) {
            Schema::table('admin_operation_log', function (Blueprint $table) {
                $table->string('app_type')->default('');
                $table->string('target_type')->default('');
            });
        }
    }

    public function down()
    {
        if (! Schema::hasTable('admin_operation_log')) {
            Schema::dropColumns('admin_operation_log', 'app_type');
            Schema::dropColumns('admin_operation_log', 'target_type');
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            // إضافة حقل الحالة (مفعل/معطل)
            $table->tinyInteger('status')->default(1)->after('email');
            
            // إضافة تاريخ آخر دخول
            $table->timestamp('last_login_at')->nullable()->after('status');
            
            // إضافة IP آخر دخول
            $table->string('last_login_ip')->nullable()->after('last_login_at');
            
            // تغيير الحقول لتصبح NOT NULL
            $table->string('name')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
        });
    }

    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn(['status', 'last_login_at', 'last_login_ip']);
        });
    }
};
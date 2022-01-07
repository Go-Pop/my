<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 30)->unique()->comment('登陆名  唯一不能重复');
            $table->string('real_name',30)->comment('真实姓名');
            $table->string('password',60)->comment('密码');
            $table->string('face',255)->comment('头像地址');
            $table->string('tel',11)->comment('手机号码');
            $table->string('card_id',100)->comment('银行卡号');
            $table->string('email',50)->comment('邮箱');
            $table->tinyInteger('is_stock')->comment('1表示可以接收入库');
            $table->tinyInteger('is_receptionist')->comment('1表示可以接收入库');
            $table->tinyInteger('is_driver')->comment('1表示为司机');
            $table->tinyInteger('is_salesperson')->comment('1为销售人员');
            $table->tinyInteger('is_job')->comment('1表示在职 0表示离职');
            $table->tinyInteger('status')->comment('1表示允许登录0表示禁止登录');
            $table->string('last_login_ip',16)->comment('最后登录ip');
            $table->timestamp('last_login_time')->comment('最后登录时间');
            $table->string('last_login_area',30)->nullable()->comment('最后登陆地址');
            $table->smallInteger('login_count')->nullable()->comment('用户总登陆次数');

            //加入 created_at 和 updated_at 字段
            $table->timestamps();
            //加入 deleted_at 字段于软删除使用
            $table->softDeletes();

            $table->index('id');
            $table->index('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

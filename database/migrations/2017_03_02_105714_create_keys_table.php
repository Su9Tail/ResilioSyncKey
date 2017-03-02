<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keys', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('title')->comment('标题');
            $table->longText('content')->comment('内容');
            $table->string('link')->comment('链接');
            $table->string('key')->comment('密钥');
            $table->string('qr_code')->comment('二维码');
            $table->integer('like')->comment('赞');
            $table->integer('user_id')->comment('用户ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keys');
    }
}

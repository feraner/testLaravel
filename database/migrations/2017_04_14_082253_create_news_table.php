<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->increments('id');
            $table->string('title', 100)->default('')->index();
            $table->string('keyword', 45)->default('');
            $table->string('content');
            $table->timestamps();
            $table->tinyInteger('status')->comment('文章状态');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

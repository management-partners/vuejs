<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name', 20);
            $table->string('full_name', 100);
            $table->string('email', 191)->unique();
            $table->dateTime('birdthday');
            $table->boolean('sex')->default(false);
            $table->string('icon', 50);
            $table->string('password', 60);
            $table->string('address');
            $table->boolean('is_activated')->default(false);
            // $table->string('remember_token')->rememberToken();
            $table->rememberToken();
            $table->boolean('flag')->default(false);
            $table->bigInteger('created_user')->nullable(false);
            $table->bigInteger('updated_user')->nullable(true);
            $table->bigInteger('deleted_user')->nullable(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_user');
    }
}

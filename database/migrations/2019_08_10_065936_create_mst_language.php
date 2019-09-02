<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstLanguage extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_language', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('short_name', 2)->nullable(false);
            $table->string('long_name', 20)->nullable(false);
            $table->string('icon', 50);
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
        Schema::dropIfExists('mst_language');
    }
}

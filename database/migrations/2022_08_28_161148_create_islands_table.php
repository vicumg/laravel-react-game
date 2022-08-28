<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('islands', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title', 50);
            $table->integer('point_x');
            $table->integer('point_y');
            $table->integer('gold');
            $table->integer('population');

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
        Schema::dropIfExists('island');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 500)->nullable();
            $table->string('eslogan', 500)->nullable();
            $table->string('mision', 500)->nullable();
            $table->string('vision', 500)->nullable();
            $table->string('aboutme', 500)->nullable();
            $table->string('video',500)->nullable();
            $table->string('imagen',500)->nullable();
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
        Schema::dropIfExists('publicidads');
    }
}

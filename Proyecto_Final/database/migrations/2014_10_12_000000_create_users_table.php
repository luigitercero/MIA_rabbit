<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
           
            $table->string('email')->unique();
            $table->string('password');
            $table->string('DIRECCION', 50)->nullable();
			$table->binary('FOTO')->nullable();
			$table->date('FREGISTRO')->nullable();
			$table->integer('GENERO')->nullable();
			$table->integer('GENERO_COD');
			
			$table->date('NACIMIENTO')->nullable();
			$table->string('name');
			$table->integer('ROLL_COD');
			$table->integer('TELEFONO')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUSUARIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('USUARIO', function(Blueprint $table)
		{
			$table->string('CORREO', 50)->nullable();
			$table->string('DIRECCION', 50)->nullable();
			$table->binary('FOTO')->nullable();
			$table->date('FREGISTRO')->nullable();
			$table->integer('GENERO')->nullable();
			$table->integer('GENERO_COD');
			$table->integer('ID')->primary('primary');
			$table->date('NACIMIENTO')->nullable();
			$table->string('NOMBRE', 50)->nullable();
			$table->string('PASWWORD', 20)->nullable();
			$table->integer('ROLL_COD');
			$table->integer('TELEFONO')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('USUARIO');
	}

}

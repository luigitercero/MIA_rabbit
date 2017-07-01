<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDIRECTORIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DIRECTORIO', function(Blueprint $table)
		{
			$table->integer('COD')->primary('primary');
			$table->integer('CONTENIDO_COD')->nullable();
			$table->integer('DIRECTORIO_COD')->nullable();
			$table->char('NOMBRE', 25);
			$table->integer('PERMISO')->nullable();
			$table->integer('TIPO_COD');
			$table->integer('USUARIO_ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DIRECTORIO');
	}

}

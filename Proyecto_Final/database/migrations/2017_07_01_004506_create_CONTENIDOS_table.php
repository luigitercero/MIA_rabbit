<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCONTENIDOSTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CONTENIDO', function(Blueprint $table)
		{
			$table->dateTime('CREATED_AT')->nullable();
			$table->integer('COD')->primary('primary');
			$table->integer('CONTENIDO_COD')->nullable();
			$table->string('char', 12)->nullable();
			$table->dateTime('UPDATED_AT')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CONTENIDOS');
	}

}

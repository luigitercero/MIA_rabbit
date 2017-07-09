<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCONTENIDOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('CONTENIDO', function(Blueprint $table)
		{
			$table->foreign('CONTENIDO_COD', 'CONTENIDO_CONTENIDO_FK')->references('COD')->on('CONTENIDO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('CONTENIDO', function(Blueprint $table)
		{
			$table->dropForeign('CONTENIDO_CONTENIDO_FK');
		});
	}

}

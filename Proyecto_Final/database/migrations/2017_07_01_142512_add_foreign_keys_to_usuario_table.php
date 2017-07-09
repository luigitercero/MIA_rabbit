<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
			$table->foreign('GENERO_COD', 'USUARIO_GENERO_FK')->references('COD')->on('GENERO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ROLL_COD', 'USUARIO_ROLL_FK')->references('COD')->on('ROLL')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
			$table->dropForeign('USUARIO_GENERO_FK');
			$table->dropForeign('USUARIO_ROLL_FK');
		});
	}

}

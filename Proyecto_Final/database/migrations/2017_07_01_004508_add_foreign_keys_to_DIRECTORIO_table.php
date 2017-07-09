<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDIRECTORIOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DIRECTORIO', function(Blueprint $table)
		{
			$table->foreign('CONTENIDO_COD', 'DIRECTORIO_CONTENIDO_FK')->references('COD')->on('CONTENIDO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('DIRECTORIO_COD', 'DIRECTORIO_DIRECTORIO_FK')->references('COD')->on('DIRECTORIO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('TIPO_COD', 'DIRECTORIO_TIPO_FK')->references('COD')->on('TIPO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('USUARIO_ID', 'DIRECTORIO_USUARIO_FK')->references('ID')->on('USUARIO')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DIRECTORIO', function(Blueprint $table)
		{
			$table->dropForeign('DIRECTORIO_CONTENIDO_FK');
			$table->dropForeign('DIRECTORIO_DIRECTORIO_FK');
			$table->dropForeign('DIRECTORIO_TIPO_FK');
			$table->dropForeign('DIRECTORIO_USUARIO_FK');
		});
	}

}

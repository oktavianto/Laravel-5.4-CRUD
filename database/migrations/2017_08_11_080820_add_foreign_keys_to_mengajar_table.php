<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMengajarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mengajar', function(Blueprint $table)
		{
			$table->foreign('nip')->references('nip')->on('guru')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_mapel')->references('id_mapel')->on('mapel')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mengajar', function(Blueprint $table)
		{
			$table->dropForeign('mengajar_nip_foreign');
			$table->dropForeign('mengajar_id_mapel_foreign');
		});
	}

}

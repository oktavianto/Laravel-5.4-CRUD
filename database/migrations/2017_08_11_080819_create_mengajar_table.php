<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMengajarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mengajar', function(Blueprint $table)
		{
			$table->integer('id_mengajar', true);
			$table->integer('id_mapel')->index();
			$table->integer('nip')->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mengajar');
	}

}

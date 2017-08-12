<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jurusan', function(Blueprint $table)
		{
			$table->integer('id_jurusan', true);
			$table->string('nama_jurusan');
			$table->integer('kaprog')->comment('nis kaprog');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jurusan');
	}

}

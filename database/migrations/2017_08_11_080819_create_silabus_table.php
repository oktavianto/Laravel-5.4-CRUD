<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSilabusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('silabus', function(Blueprint $table)
		{
			$table->integer('id_silabus', true);
			$table->string('semester');
			$table->string('tingkat');
			$table->integer('id_mapel');
			$table->integer('id_kd');
			$table->integer('id_indikator');
			$table->integer('id_mp');
			$table->integer('id_kp');
			$table->integer('id_penilaian');
			$table->integer('id_aw');
			$table->integer('id_pk');
			$table->integer('id_sb');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('silabus');
	}

}

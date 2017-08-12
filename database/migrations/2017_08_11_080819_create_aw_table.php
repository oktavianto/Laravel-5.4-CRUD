<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aw', function(Blueprint $table)
		{
			$table->integer('id_aw', true);
			$table->string('isi_tm', 2);
			$table->string('isi_ps', 2);
			$table->string('isi_pi', 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aw');
	}

}

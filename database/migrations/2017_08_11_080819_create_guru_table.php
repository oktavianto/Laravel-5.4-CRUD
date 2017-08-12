<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuruTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guru', function(Blueprint $table)
		{
			$table->integer('id_guru', true);
			$table->string('nama_guru', 50);
			$table->integer('nip')->index();
			$table->string('password', 70);
			$table->string('tempat_lahir', 20);
			$table->date('tanggal_lahir');
			$table->text('alamat', 65535);
			$table->string('no_telp', 14);
			$table->string('level')->comment('1. kepsek, waka 2. walas 3. kaprog 4. guru');
			$table->string('email', 40);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guru');
	}

}

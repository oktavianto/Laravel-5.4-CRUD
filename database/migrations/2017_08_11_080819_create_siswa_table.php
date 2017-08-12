<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiswaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siswa', function(Blueprint $table)
		{
			$table->integer('id_siswa', true);
			$table->integer('id_ortu_wali');
			$table->string('nisn', 15);
			$table->integer('nipd');
			$table->string('nama_siswa', 40);
			$table->date('tgl_lahir');
			$table->text('alamat', 65535);
			$table->string('email', 40);
			$table->string('telp', 13);
			$table->string('agama');
			$table->string('jenis_kelamin');
			$table->string('asal_sekolah', 35);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('siswa');
	}

}

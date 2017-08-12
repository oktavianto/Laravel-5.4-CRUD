<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSekolahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sekolah', function(Blueprint $table)
		{
			$table->integer('id_identitas_sekolah', true);
			$table->string('nama_sekolah', 35);
			$table->text('alamat', 65535);
			$table->string('kota', 20);
			$table->integer('kode_pos');
			$table->string('telp', 13);
			$table->string('website', 35);
			$table->string('email', 35);
			$table->integer('nss');
			$table->integer('npsn');
			$table->string('nama_kepsek', 40);
			$table->integer('nip_kepsek');
			$table->string('nama_wks_kurikulum', 40);
			$table->integer('nip_wks_kurikulum');
			$table->integer('fax');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sekolah');
	}

}

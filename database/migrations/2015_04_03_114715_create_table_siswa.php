
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siswa', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('nis')->unsigned();
			$table->string('nama');
			$table->string('tempat');
			$table->date('tgl_lahir');
			$table->string('nama_ortu');
			$table->text('alamat');
			$table->string('hp');
			$table->integer('biaya_pendaftaran')->unsigned();
			$table->timestamps();
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTotalBayar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('total_bayar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_siswa')->unsigned();
			$table->integer('id_paket')->unsigned();
			$table->integer('biaya_paket')->unsigned();
			$table->integer('sisa')->unsigned();
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
		Schema::drop('total_bayar');
	}

}

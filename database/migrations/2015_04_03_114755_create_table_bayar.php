<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBayar extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bayar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_total_bayar')->unsigned();
			$table->integer('id_siswa')->unsigned();
			$table->integer('jumlah')->unsigned();
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
		Schema::drop('bayar');
	}

}

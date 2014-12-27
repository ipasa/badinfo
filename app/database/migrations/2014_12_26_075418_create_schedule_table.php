<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('schedules', function($table){
			$table->increments('match_id');

			$table->integer('teamName1')->unsigned();
			$table->foreign('teamName1')->references('id')->on('teamDescriptions');

			$table->integer('teamName2')->unsigned();
			$table->foreign('teamName2')->references('id')->on('teamDescriptions');

			$table->integer('winner')->unsigned();
			$table->foreign('winner')->references('id')->on('teamDescriptions');
			
			$table->date('match_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schedules');
	}

}

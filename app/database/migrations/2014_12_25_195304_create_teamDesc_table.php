<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamDescTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('teamDescriptions', function($table){
			$table->increments('id');

			$table->text('teamName');
			$table->text('teamMemOneName');
			$table->text('teamMemOneImg');
			$table->text('teamMemtwoName');
			$table->text('teamMemtwoImg');
			$table->text('teamEmail');
			$table->text('batch');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
		Schema::drop('teamDescription');
	}

}

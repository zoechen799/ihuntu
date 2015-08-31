<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_visits', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('user_id');
                        $table->integer('job_id')->nullable();
                        $table->integer('company_id')->nullable();
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
		Schema::drop('user_visits');
	}

}

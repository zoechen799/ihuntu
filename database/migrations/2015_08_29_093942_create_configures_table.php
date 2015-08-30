<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configures', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('key')->unique();
                        $table->string('stringvalue')->nullable();
                        $table->integer('intvalue')->nullable();
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
		Schema::drop('configures');
	}

}

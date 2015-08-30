<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobDescriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_descriptions', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('title');
                        $table->integer('city_id');
                        $table->integer('company_id');
                        $table->integer('job_category_id');
                        $table->text('responsibility');
                        $table->integer('degree_id')->nullable();
                        $table->integer('workyears')->nullable();
                        $table->integer('agestart')->nullable();
                        $table->integer('ageend')->nullable();
                        $table->integer('minsalary')->nullable();
                        $table->integer('maxsalary')->nullable();
                        $table->integer('visited')->default(0);
                        $table->text('requirement');
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
		Schema::drop('job_descriptions');
	}

}

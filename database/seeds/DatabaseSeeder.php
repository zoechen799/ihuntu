<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CityTableSeeder');
                $this->call('CompanyNatureTableSeeder');
                $this->call('CompanySizeTableSeeder');
                $this->call('CompanyTableSeeder');
                $this->call('DegreeTableSeeder');
                $this->call('JobDescriptionTableSeeder');
                $this->call('JobCategoryTableSeeder');
                $this->call('JdGroupTableSeeder');
                $this->call('ConfigureTableSeeder');
	}

}

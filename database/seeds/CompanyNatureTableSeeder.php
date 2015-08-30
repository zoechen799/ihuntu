<?php

use Illuminate\Database\Seeder;
use App\CompanyNature;

class CompanyNatureTableSeeder extends Seeder {

  public function run()
  {
    DB::table('company_natures')->delete();
    
    CompanyNature::create([
       'id' => 1, 
       'name' => '外资'
    ]);
    CompanyNature::create([
        'id' => 2,
       'name' => '民营'
    ]);
    CompanyNature::create([
        'id' => 3,
       'name' => '国资'
    ]);
  }

}

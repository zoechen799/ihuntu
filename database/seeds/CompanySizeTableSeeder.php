<?php

use Illuminate\Database\Seeder;
use App\CompanySize;

class CompanySizeTableSeeder extends Seeder {

  public function run()
  {
    DB::table('company_sizes')->delete();

    CompanySize::create([
        'id' => 1, 
       'name' => '50人以下',
       'level' => 1
    ]);
    CompanySize::create([
        'id' => 2, 
       'name' => '50 - 200 人',
       'level' => 2
    ]);
    CompanySize::create([
        'id' => 3, 
       'name' => '200 - 1000人',
       'level' => 3
    ]);
    CompanySize::create([
        'id' => 4, 
       'name' => '1000人以上',
       'level' => 4
    ]);
  }

}

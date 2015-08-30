<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder {

  public function run()
  {
    DB::table('cities')->delete();

    City::create([
       'id' =>1, 
       'name' => '上海'
    ]);
    City::create([
        'id' =>2,
       'name' => '北京'
    ]);
    City::create([
        'id' =>3,
       'name' => '南京'
    ]);
    City::create([
        'id' =>4,
       'name' => '深圳'
    ]);
    City::create([
        'id' =>5,
       'name' => '成都'
    ]);
    City::create([
        'id' =>6,
       'name' => '大连'
    ]);
    City::create([
        'id' =>7,
       'name' => '苏州'
    ]);
  }

}

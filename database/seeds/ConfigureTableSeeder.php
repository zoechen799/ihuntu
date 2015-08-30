<?php

use Illuminate\Database\Seeder;
use App\Configure;

class ConfigureTableSeeder extends Seeder {

  public function run()
  {
    DB::table('configures')->delete();

    Configure::create([
       'key' => 'carouselsize',
       'intvalue'=> 5
    ]);
    
    Configure::create([
       'key' => 'jdshowmaxlength',
       'intvalue'=> 20
    ]);
  }
}

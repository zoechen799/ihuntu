<?php

use Illuminate\Database\Seeder;
use App\Degree;

class DegreeTableSeeder extends Seeder {

  public function run()
  {
    DB::table('degrees')->delete();

    Degree::create([
       'id' => 1, 
       'name' => '高中',
       'level' => 1
    ]);
    
    Degree::create([
       'id' => 2, 
       'name' => '大专',
       'level' => 2
    ]);
    
    Degree::create([
       'id' => 3, 
       'name' => '本科',
       'level' => 3
    ]);
    
    Degree::create([
       'id' => 4,  
       'name' => '硕士',
       'level' => 4
    ]);
  }

}

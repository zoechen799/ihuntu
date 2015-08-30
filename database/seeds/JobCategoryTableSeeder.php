<?php

use Illuminate\Database\Seeder;
use App\JobCategory;

class JobCategoryTableSeeder extends Seeder {

  public function run()
  {
    DB::table('job_categories')->delete();

    JobCategory::create([
       'id' => 1, 
       'name' => '技术',
       'level' => 0
    ]);
    
    JobCategory::create([
       'id' => 2, 
       'name' => '产品',
       'level' => 0
    ]);
    
    JobCategory::create([
       'id' => 3, 
       'name' => '设计',
       'level' => 0
    ]);
    
    JobCategory::create([
       'id' => 4, 
       'name' => '运营',
       'level' => 0
    ]);
    
    JobCategory::create([
       'id' => 5, 
       'name' => '市场与销售',
       'level' => 0
    ]);
    
    JobCategory::create([
       'id' => 6, 
       'name' => '职能',
       'level' => 0
    ]);
    
    
    JobCategory::create([
       'id' => 101, 
       'name' => 'Java',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 102, 
       'name' => 'PHP',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 103, 
       'name' => '前端H5',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 104, 
       'name' => 'iOS',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 105, 
       'name' => 'Android',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 106, 
       'name' => '测试',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 107, 
       'name' => 'C/C++',
       'level' => 1,
       'parent_id' => 1
    ]);
    
  }

}

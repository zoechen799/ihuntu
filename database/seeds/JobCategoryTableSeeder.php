<?php

use Illuminate\Database\Seeder;
use App\JobCategory;
use Illuminate\Database\Eloquent\Model;

class JobCategoryTableSeeder extends Seeder {

  public function run()
  {
    Model::unguard();
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
    
    JobCategory::create([
       'id' => 108, 
       'name' => '技术经理',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 109, 
       'name' => '架构师',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 110, 
       'name' => 'CTO',
       'level' => 1,
       'parent_id' => 1
    ]);
    
    JobCategory::create([
       'id' => 201, 
       'name' => '产品总监',
       'level' => 1,
       'parent_id' => 2
    ]);
    
    JobCategory::create([
       'id' => 202, 
       'name' => '产品经理',
       'level' => 1,
       'parent_id' => 2
    ]);
    
    JobCategory::create([
       'id' => 203, 
       'name' => '游戏策划',
       'level' => 1,
       'parent_id' => 2
    ]);
    
    
    JobCategory::create([
       'id' => 301, 
       'name' => '设计总监',
       'level' => 1,
       'parent_id' => 3
    ]);
    
    JobCategory::create([
       'id' => 302, 
       'name' => '交互设计',
       'level' => 1,
       'parent_id' => 3
    ]);
    
    JobCategory::create([
       'id' => 303, 
       'name' => '视觉设计',
       'level' => 1,
       'parent_id' => 3
    ]);
    
    JobCategory::create([
       'id' => 401, 
       'name' => '运维DevOps',
       'level' => 1,
       'parent_id' => 4
    ]);
    
    JobCategory::create([
       'id' => 402, 
       'name' => '新媒体运营',
       'level' => 1,
       'parent_id' => 4
    ]);
    
    JobCategory::create([
       'id' => 403, 
       'name' => '数据运营',
       'level' => 1,
       'parent_id' => 4
    ]);
    
    JobCategory::create([
       'id' => 404, 
       'name' => '运维经理',
       'level' => 1,
       'parent_id' => 4
    ]);
    
    JobCategory::create([
       'id' => 405, 
       'name' => 'COO',
       'level' => 1,
       'parent_id' => 4
    ]);
    
    JobCategory::create([
       'id' => 406, 
       'name' => '编辑',
       'level' => 1,
       'parent_id' => 4
    ]);
    
    JobCategory::create([
       'id' => 501, 
       'name' => '市场推广',
       'level' => 1,
       'parent_id' => 5
    ]);
    
    JobCategory::create([
       'id' => 502, 
       'name' => '市场策划',
       'level' => 1,
       'parent_id' => 5
    ]);
    
    JobCategory::create([
       'id' => 503, 
       'name' => '销售',
       'level' => 1,
       'parent_id' => 5
    ]);
    
    JobCategory::create([
       'id' => 504, 
       'name' => '销售总监',
       'level' => 1,
       'parent_id' => 5
    ]);
    
    JobCategory::create([
       'id' => 505, 
       'name' => '市场总监',
       'level' => 1,
       'parent_id' => 5
    ]);
    
    
    JobCategory::create([
       'id' => 601, 
       'name' => 'HR',
       'level' => 1,
       'parent_id' => 6
    ]);
    
    JobCategory::create([
       'id' => 602, 
       'name' => '行政',
       'level' => 1,
       'parent_id' => 6
    ]);
    
    JobCategory::create([
       'id' => 603, 
       'name' => '会计',
       'level' => 1,
       'parent_id' => 6
    ]);
    
    JobCategory::create([
       'id' => 604, 
       'name' => '出纳',
       'level' => 1,
       'parent_id' => 6
    ]);
  }

}

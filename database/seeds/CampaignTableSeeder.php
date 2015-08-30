<?php

use Illuminate\Database\Seeder;
use App\Campaign;

class CampaignTableSeeder extends Seeder {

  public function run()
  {
    DB::table('campaigns')->delete();

    Campaign::create([
       'title' => 'wifi万能钥匙热招中',
       'imageurl'=>'upload/2015/08/2wifi.png',
       'active' => true,
       'link'=>'#'
    ]);
    
    Campaign::create([
       'title' => 'Autodesk急招高级移动开发/高级UX',
       'imageurl'=>'upload/2015/08/autodesk.jpg',
       'active' => true,
       'link'=>'#'
    ]);
    
    Campaign::create([
       'title' => '大数据分析公司Splunk 高薪招聘',
       'imageurl'=>'upload/2015/08/splunk.jpg',
       'active' => true,
       'link'=>'#'
    ]);
    
    Campaign::create([
       'title' => '百度大数据部门招人~',
       'imageurl'=>'upload/2015/08/baidulogo1.jpg',
       'active' => true,
       'link'=>'#'
    ]);
    
    Campaign::create([
       'title' => '唯品会急招~~',
       'imageurl'=>'upload/2015/08/唯品会.jpg',
       'active' => true,
       'link'=>'#'
    ]);
    
    Campaign::create([
       'title' => '花旗银行职位',
       'imageurl'=>'upload/2015/08/花旗银行.jpg',
       'active' => true,
       'link'=>'#'
    ]);
    
    Campaign::create([
       'title' => 'AWS 销售/BD类热招',
       'imageurl'=>'upload/2015/08/AWS-Logo-sm.png',
       'active' => true,
       'link'=>'#'
    ]);
    
  }
}

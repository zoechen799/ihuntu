<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Degree;
use App\City;
use App\Company;
use App\JobCategory;

class JobDescription extends Model {
    
    public function belongsToCompany(){
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }
    
    public function belongsToCategory(){
        return $this->belongsTo('App\JobCategory', 'job_category_id', 'id');
    }
    
    public function belongsToCity(){
        return $this->belongsTo('App\City', 'city_id', 'id');
    }
    
    public function belongsToDegree(){
        return $this->belongsTo('App\Degree', 'degree_id', 'id');
    }
}

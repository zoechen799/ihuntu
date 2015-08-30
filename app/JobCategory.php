<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model {

    public function hasManyJobCategories()
    {
       return $this->hasMany('App\JobCategory', 'parent_id', 'id');
    }

}

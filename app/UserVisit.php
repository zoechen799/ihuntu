<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class UserVisit extends Model {

    protected $fillable = ['user_id', 'job_id'];
    public static function userVisitJobDescription($userId, $jdId){
        $exists = static::where('user_id', $userId)->where('job_id', $jdId)->get();
        if($exists != null && count($exists) ==0){
            UserVisit::create([
               'user_id' => (int)$userId,
               'job_id' => (int)$jdId
            ]);
        }
    }
    
    public static function visitCount($jdId){
        $visits = static::where('job_id', $jdId)->get();
        if($visits != null){
            return count($visits);
        }else{
            return 0;
        }
    }

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLike extends Model {
    protected $fillable = ['user_id', 'job_id'];
    public static function userLikeJobDescription($userId, $jdId){
        $exists = static::where('user_id', $userId)->where('job_id', $jdId)->get();
        if($exists != null && count($exists) ==0){
            UserLike::create([
               'user_id' => (int)$userId,
               'job_id' => (int)$jdId
            ]);
        }
    }
    
    public static function likeCount($jdId){
        $visits = static::where('job_id', $jdId)->get();
        if($visits != null){
            return count($visits);
        }else{
            return 0;
        }
    }

}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $primaryKey = 'userId';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

   //查
    public function userTest(){
//        return $this->where('status','3')->get(); //条件查询
        return $this->get();
    }
    //增
    public function userAdd(){
        $data = ['account'=>'123213','password'=>'666'];
        $this->fill($data);
        $this->save();
    }
    //改
    public function userSave(){

        $users = $this->where('userId','>','1');
        $users->update(['account'=>'123123']);
//        $user->account='521';
//        $user->save();
    }
}

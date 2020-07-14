<?php

namespace App;

use App\Models\ImageUpload;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $connection = 'mother_site';

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

    public function b(){

    }

    public function image(){
        return url('img/user.png');
    }

    public function getUpload($uuid){
        return ImageUpload::where('model_id', $uuid)->get();
    }
}

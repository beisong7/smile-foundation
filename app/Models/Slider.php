<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $fillable = [
        'uuid',
        'title',
        'main_title',
        'sub_title',
        'donate',
        'menu',
        'image',
        'active',
        'menu_type',
    ];

    public function getPhotoAttribute(){
        if(file_exists($this->image)){
            return url($this->image);
        }else{
            return url('images/user.png');
        }
    }
}

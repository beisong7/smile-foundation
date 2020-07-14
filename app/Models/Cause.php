<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = [
        'uuid',
        'title',
        'small_title',
        'user_id',
        'location',
        'hits',
        'featured',
        'intro',
        'info',
        'goal',
        'tags',
        'youtube',
        'active',
    ];

    public function getImageAttribute(){
        $upload = ImageUpload::where('model_id', $this->uuid)->first();
        return !empty($upload)?$upload->photo():url('img/user.png');
    }

    public function uploads(){
        return $this->hasMany(ImageUpload::class, 'model_id', 'uuid');
    }
}

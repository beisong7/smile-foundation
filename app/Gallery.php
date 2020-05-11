<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $connection = 'mysqlLive';

    protected $fillable = [
        'url','size','type','file_name'
    ];

    public function banner(){
        return $this->hasOne(Banner::class);
    }


}

<?php

namespace App;

use App\Models\Banner;
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

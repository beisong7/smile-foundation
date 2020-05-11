<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $connection = 'mysqlLive';

    public function gallery(){

        return $this->belongsTo(Gallery::class);
    }



}

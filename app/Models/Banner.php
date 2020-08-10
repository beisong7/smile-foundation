<?php

namespace App\Models;

use App\Gallery;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [

    ];


    public function gallery(){

        return $this->belongsTo(Gallery::class);
    }

}

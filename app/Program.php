<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{

    protected $connection = 'mother_site';

    public function pic(){
        $url = 'https://smileplanetef.org/api/get/image/'.$this->gallery_id.'/token';
//        $url = 'http://127.0.0.1:8001/api/get/image/'.$this->gallery_id.'/token';

        //Use file_get_contents to GET the URL in question.
        $contents = @file_get_contents($url);// use @ to ignore error throwback

        //If $contents is not a boolean FALSE value.
        if($contents !== false){
            //Print out the contents.
            return $contents;
        }

    }

    public function shortInfo(){
        return Str::words($this->detail, 25, '. . .');
        //{{ Str::words($program->detail, 45, '  . . . ') }}
        //Illuminate\Support\Str;
    }

    public function link(){
        return 'https://smileplanetef.org/project/'.$this->title;
//        return 'http://127.0.0.1:8001/project/'.$this->title;
    }
}

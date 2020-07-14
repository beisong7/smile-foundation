<?php

namespace App\Traits\General;

use Illuminate\Support\Str;

trait Utility{
    public function generateId($prefix, $int){
        $token = "";
        $codes = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codes .= "-_";
        $codes .= "abcdefghijklmnopqrstuvwxyz";
        $codes .= "0123456789";
        $max = strlen($codes);
        for($i=0; $i < $int; $i++){
            $token.= $codes[random_int(0, $max-1)];
        }
        return $prefix.$token.uniqid("", false);
    }

    public function createUuid(){
        return (string)Str::uuid();
    }
}
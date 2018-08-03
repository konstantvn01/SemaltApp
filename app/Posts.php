<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public static function task4(){
        $a=10;
        $b=3;
        return $a%$b;
    }


}

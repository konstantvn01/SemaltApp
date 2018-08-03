<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class bids extends Model
{
    public static function biggestPrice(){

        $biggest=DB::select('Select bids.name 
                                    from bids
                                    where bids.price=(select max(price)from bids)');
        return $biggest;
    }
    public static function getBids(){
        $get=DB::select('Select * from bids');
        return $get;
    }

}

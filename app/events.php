<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class events extends Model
{
    public static function noOrder(){
        $order=DB::select('Select events.caption 
                                  from events 
                                  where NOT EXISTS (SELECT bids.id 
                                                from bids 
                                                where events.id=bids.id_event)');

        return $order;
    }
    public static function more3order(){
        $order=DB::select('SELECT events.caption
                                  FROM events
                                  WHERE 2<(SELECT COUNT(id_event)
                                             FROM bids
                                             where bids.id_event=events.id)');
        return $order;

    }
    public static function biggestOrder(){
        $bOrder=DB::select('SELECT events.caption, COUNT(id_event)AS countId
                                    FROM events INNER JOIN bids on bids.id_event=events.id
                                    GROUP BY events.caption
                                    ORDER BY countID desc 
                                    LIMIT 1');
        return $bOrder;
    }
    public static function getEvents(){
        $get=DB::select('Select * from events');
        return $get;
    }
}

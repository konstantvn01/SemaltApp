@extends('layouts')
@section('content')
    <div class="container">
    <h5>5. Напишите запрос, который выберет название мероприятия (events.caption), по
        которому больше всего заявок</h5>
    <h4 class="center">Table bids</h4>
    <table>
        <tr class="row">
            <th class="center">id</th>
            <th class="center">id_event</th>
            <th class="center">name</th>
            <th class="center">email</th>
            <th class="center">price</th>
        </tr>
        <?php foreach($getBids as $row){?>
        <tr class="row">
            <td class="center"><?php echo $row->id;?></td>
            <td class="center"><?php echo $row->id_event;?></td>
            <td class="center"><?php echo $row->name;?></td>
            <td class="center"><?php echo $row->email;?></td>
            <td class="center"><?php echo $row->price;}?></td>
        </tr>

    </table>
    <h4 class="center">Table events</h4>
    <table>
        <tr class="">
            <th class="">id</th>
            <th class="">caption</th>
        </tr>
        <?php foreach($getEvents as $rows){?>
        <tr class="">
            <td class=" "><?php echo $rows->id;?></td>
            <td class=" "><?php echo $rows->caption;}?></td>

        </tr>

    </table><br><br>
    <h4>Decision</h4>
        <h5>
    <?php

    foreach ($bigOrders as $order){
        echo $order->caption;
    }
    ?></h5>
        <ul class="collapsible expanded">
            <li>
                <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>

                <div class="collapsible-body">
                    <h4>Model</h4><hr>
                    <h5>public static function <b>biggestOrder()</b>{<br><br>
                        $bOrder=DB::select('SELECT events.caption, COUNT(id_event)AS countId<br><br>
                        FROM events INNER JOIN bids on bids.id_event=events.id<br><br>
                        GROUP BY events.caption<br><br>
                        ORDER BY countID desc<br><br>
                        LIMIT 1');<br><br>
                        return $bOrder;
                        }</h5>
                    <h4>Controller</h4><hr>
                    <h5> public function <b>sqlTask5()</b>{<br><br>
                        $bigOrders=events::biggestOrder();<br><br>
                        $getBids=bids::getBids();<br><br>
                        $getEvents=events::getEvents();<br><br>
                        return view('sql.sqlTask5',compact('bigOrders',"getBids","getEvents"));
                        }</h5>
                </div>
            </li>
        </ul>
    </div>
@endsection



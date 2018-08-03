@extends('layouts')
@section('content')
    <div class="container">
        <h5>4. Напишите запрос, который выберет название мероприятия (events.caption), по
            которому больше трех заявок</h5>
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

    foreach ($more3order as $order){
        echo $order->caption;
    }
    ?></h5>
        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>

                <div class="collapsible-body">
                    <h4>Model</h4><hr>
                    <h5>
                        public static function <b>more3order()</b>{<br><br>
                        $order=DB::select('SELECT events.caption<br><br>
                        FROM events<br><br>
                        WHERE 2<(SELECT COUNT(id_event)<br><br>
                        FROM bids<br><br>
                        where bids.id_event=events.id)');<br><br>
                        return $order;}<br><br>

                    </h5>
                    <h4>Controller</h4><hr>
                    <h5>public function <b>sqlTask4()</b>{<br><br>
                        $more3order=events::more3order();<br><br>
                        $getBids=bids::getBids();<br><br>
                        $getEvents=events::getEvents();<br><br>
                        return view('sql.sqlTask4', compact('more3order',"getBids","getEvents"));
                        }</h5>
                </div>
            </li>
        </ul>

    </div>
@endsection

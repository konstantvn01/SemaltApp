@extends('layouts')
@section('content')
    <div class="container">
        <h5>2. Напишите запрос, который выберет имя пользователя (bids.name) с самой
            высокой ценой заявки (bids.price)</h5><br>
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

        <h4>Decision</h4>
                <h5><?php
        foreach ($price as $bprice){
            echo $bprice->name;
        }
        ?></h5><br><br>
        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>

                <div class="collapsible-body">
                    <h4>Model</h4><hr>
                    <h5> public static function <b>biggestPrice()</b>{<br><br>

                        $biggest=DB::select('Select bids.name<br><br>
                        from bids<br><br>
                        where bids.price=(select max(price)from bids)');<br><br>
                        return $biggest;}<br><br><br>


                        public static function <b>getBids()</b>{<br><br>
                        $get=DB::select('Select * from bids');<br><br>
                        return $get;}<br><br><br></h5>


                    <h4>Controller</h4><hr>
                    <h5>
                        public function <b>sqlTask2()</b>{<br><br>
                        $price=bids::biggestPrice();<br><br>
                        $getBids=bids::getBids();<br><br>
                        return view('sql.sqlTask2', compact("price","getBids"));
                        }
                    </h5>
                </div>
            </li>
        </ul>

    </div>

@endsection
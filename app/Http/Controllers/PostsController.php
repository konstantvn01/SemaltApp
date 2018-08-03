<?php

namespace App\Http\Controllers;

use App\events;
use Illuminate\Http\Request;
use App\bids;
use Illuminate\Support\Facades\DB;
use App\Posts;

class PostsController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(){
        return view('posts.show');
    }

    //--------------TASKS----------------


    //----------------1---------------------
    public function task1(){
        $student=28;
        $sport_student=$student*(0.75);
        $array=array($student,$sport_student);

        return view('tasks.task1', compact('array'));
    }

    //----------------2---------------------
    public function task2(){

        $string="This server has 386 GB RAM and 5000 GB storage";

        preg_match_all('!\d+!', $string, $newstring);

        return view('tasks.task2',compact('newstring'));
    }


    //----------------3---------------------
    public function task3(){
        $arr=array(2,3,56,65,56,44,34,45,3,5,35,345,3,5);

        return view('tasks.task3',compact('arr'));
    }


    //----------------4---------------------
    public function task4(){
        $rest=Posts::task4();
        return view('tasks.task4', compact('rest'));
    }


    //----------------5---------------------
    public function task5(){
        return view('tasks.task5,1');
    }


    //----------------6---------------------
    public function task6(){
        return view('tasks.task6');
    }


    //----------------7---------------------
    public function task7(){
        return view('tasks.task7');
    }


    //----------------8---------------------
    public function task8(){
        return view('tasks.task8');
    }


    //----------------9---------------------
    public function task9(){
        return view('tasks.task9');
    }



    //--------------SQL TASKS--------------
    public function sqlTask1(){


        return view('sql.sqlTask1');
    }

    //----------------2---------------------
    public function sqlTask2(){
        $price=bids::biggestPrice();
        $getBids=bids::getBids();
        return view('sql.sqlTask2', compact("price","getBids"));
    }

    //----------------3---------------------
    public function sqlTask3(){
        $noOrder=events::noOrder();
        $getBids=bids::getBids();
        $getEvents=events::getEvents();
        return view('sql.sqlTask3', compact('noOrder',"getBids","getEvents"));
    }

    //----------------4---------------------
    public function sqlTask4(){
        $more3order=events::more3order();
        $getBids=bids::getBids();
        $getEvents=events::getEvents();
        return view('sql.sqlTask4', compact('more3order',"getBids","getEvents"));
    }

    //----------------5---------------------
    public function sqlTask5(){
        $bigOrders=events::biggestOrder();
        $getBids=bids::getBids();
        $getEvents=events::getEvents();
        return view('sql.sqlTask5',compact('bigOrders',"getBids","getEvents"));
    }


}



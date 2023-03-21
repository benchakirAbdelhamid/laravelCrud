<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use Illuminate\Http\Request;
// use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

class c3 extends Controller
{
    //
    public function gatDataFromDataBase(){
        $m = DB::select('select * from module');
        // return $m;
        return view('pages.readData',[
            'modules'=> $m
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c2 extends Controller
{
    //get database
    public function getDataFromDB(){
        $m=DB::select('select * from Module where codeM = 20');
        return $m;
    }
    public function getDataFromTable(){
        $m=DB::select('select * from Module');
        return $m;
    }

}

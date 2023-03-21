<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomControleur extends Controller
{
    //
    public function test()
    {
        echo 'i am methode test of controller ';
    }
    public function view()
    {
        return view('test');
    }

    public function testvue()
    {
        return view('test', ['name' => 'hamid']);
    }
    public function testvuevalue($x)
    {
        return view('test', ['name' => $x, 'value' => 20]);
    }
    public function testadmine($p)
    {
        return view('admin.admi', ['p' => $p]);
    }
}

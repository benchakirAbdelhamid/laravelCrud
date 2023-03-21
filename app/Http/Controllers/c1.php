<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c1 extends Controller
{
    //

    public function getData(Request $request){
        $request->validate([
            'prenomNom'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $data = [];
        $data['name']=$request->input('prenomNom');
        $data['email']=$request->input('email');
        $data['password']=$request->input('password');
        return view('pages.homePage',$data);
    }
}

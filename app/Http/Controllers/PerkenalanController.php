<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkenalanController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        //dd($request->all());
        $first_name=$request["first-name"];
        $last_name=$request["last-name"];
        $nama="$first_name $last_name";
        return view('welcome',["nama"=>"$nama"]);
        
    }
    //
}

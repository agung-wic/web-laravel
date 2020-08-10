<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    //
    public function create (){
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'judul'=>'required|unique:pertanyaan',
            'isi'=>'required',
        ]);
        $query= DB::table('pertanyaan')->insert([
           "judul"=>$request["judul"],
           "isi"=>$request["isi"], 
        ]);
        return redirect('/pertanyaan/create');
    }
    public function index(){
        $pertanyaan= DB::table('pertanyaan')->get();
        dd($pertanyaan);
        return view('pertanyaan.index');
    }
}
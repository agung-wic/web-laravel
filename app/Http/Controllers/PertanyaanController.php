<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
           "tanggal_dibuat"=>Carbon::now(),
           "tanggal_diprbarui"=>Carbon::now(),
        ]);
        return redirect('/pertanyaan')->with('success','Pertanyaan berhasil disimpan!');
    }
    public function index(){
        $pertanyaan= DB::table('pertanyaan')->get();
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($pertanyaan_id){
        $pertanyaan=DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.show',compact('pertanyaan'));

    }

    public function edit($pertanyaan_id){
        $pertanyaan=DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.edit',compact('pertanyaan'));

    }

    public function update($pertanyaan_id, Request $request){
        $request->validate([
            'judul'=>'required|unique:pertanyaan',
            'isi'=>'required',
        ]);

        $query=DB::table('pertanyaan')->where('id',$pertanyaan_id)->update([
            'judul'=>$request['judul'],
            'isi'=>$request['isi'],
            'tanggal_diprbarui'=>Carbon::now(),
        ]);
        return redirect('/pertanyaan')->with('success','Berhasil memperbarui pertanyaan!');
    }

    public function destroy($pertanyaan_id){
        $query=DB::table('pertanyaan')->where('id',$pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success','Berhasil menghapus pertanyaan!');
    }
}
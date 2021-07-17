<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_murid = \App\Models\Murid::where('nama', 'LIKE', '%'. $request->cari .'%')->get();
        }else{
            $data_murid = \App\Models\Murid::all();
        }

        
        return view('murid.index',['data_murid' => $data_murid]);
    }

    public function add(){
        return view('murid.add');
    }

    public function create(Request $request){
        \App\Models\Murid::create($request->all());
        return redirect('/murid')->with('sukses','Data berhasil di input');
    }

    public function edit($id){
        $data_murid = \App\Models\Murid::find($id);
        return view('murid.edit',['murid' => $data_murid]);
    }

    public function update(Request $request, $id){
        $data_murid = \App\Models\Murid::find($id);
        $data_murid->update($request->all());
        return redirect('murid')->with('sukses','Data berhasil di update');
    }

    public function delete($id){
        $data_murid = \App\Models\Murid::find($id);
        $data_murid->delete();
        return redirect('/murid')->with('sukses','Data berhasil di hapus');
    }

    public function contact(){
        return view('murid.contact');
    }

    public function jadwal(){
        return view('murid.jadwal');
    }
}

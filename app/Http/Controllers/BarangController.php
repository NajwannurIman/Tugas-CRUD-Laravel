<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang= Barang::get();
        
        return view('barang.index',['barang'=>$barang]);
    }

    public function tambah(){
        return view('barang.form');
    }   
    public function indek()
{
    $item = Barang::all();
    return view('dashboard', ['barang' => $item]);
}
    public function simpan(Request $request){
        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'foto_barang'=>$request->foto_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
        ];
        $barang = Barang::create($data); // create a new record in the database
        if($request->hasFile('foto_barang')){
            $request->file('foto_barang')->move('fotobarang/',$request->file('foto_barang')->getClientOriginalName());
            $barang->foto_barang = $request->file('foto_barang')->getClientOriginalName(); // save the filename to the database
            $barang->save();
        }
        return redirect()->route('barang');
    }
    

    public function edit($id){
        $barang = Barang::where('id',$id)->first();
        return view('barang.form',['barang'=> $barang]);
    }

    public function update($id,Request $request){

        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'foto_barang'=>$request->foto_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
        ];

        $barang = Barang::find($id)->update($data);

        return redirect()->route('barang');
    }

    public function hapus($id){
        Barang:: find($id)->delete();

        return redirect()->route('barang');
    }


}

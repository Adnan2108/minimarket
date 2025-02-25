<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
   public function index(){
    // $data = barang::all();
// $data=barang::latest()->get(); (JIKA DATANYA LOOPING MENGGUNAKAN GET, SEDANGKAN JIKA DATA HANYA 1 MENGGUNAKAN FIRST)
$data=Barang::latest()->paginate(10);
    // dd($data);
    return view("barang.index",compact("data"));
   }

   public function create()
   {
      return view('barang.create');


   }

   public function store(Request $request)


   {
    $imageName = time().'.'.$request->image->getClientOriginalExtension();
    $request->image->move(public_path('images'),$imageName);

    $qurey=Barang::create([
        'nama'=>$request->nama,
        'supplier'=>$request->supplier,
        'merk'=>$request->merk,
        'image'=> 'images/'.$imageName,
    ]);
    return redirect()->route('barang.index')->with('message', 'berhasil di tambah');


   }

   public function destroy($id){
    $qurey=Barang::where('id','=',$id)->delete();
    return redirect()->route('barang.index')->with('message', 'berhasil di Hapus');
   }

   public function edit($id){
    $ad=Barang::where('id','=',$id)->first();
    return view('barang.edit', compact('ad'));
   }

   public function update(Request $request,$id)
   {
    // dd($request->all());


    if($request->image == null){
        $ay=Barang::where("id",'=',$id)
        ->update([
            'nama'=>$request->nama,
            'supplier'=>$request->supplier,
            'merk'=>$request->merk,

        ]);
    }
    else{
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'),$imageName);
        $ay=Barang::where("id",'=',$id)
        ->update([
            'nama'=>$request->nama,
            'supplier'=>$request->supplier,
            'merk'=>$request->merk,
            'image'=> 'images/'.$imageName,
        ]);
    }




    return redirect()->route('barang.index')->with('message', 'berhasil di update');
   }
}

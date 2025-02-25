<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
   public function index(){
    // $data = Biodata::all();
// $data=Biodata::latest()->get(); (JIKA DATANYA LOOPING MENGGUNAKAN GET, SEDANGKAN JIKA DATA HANYA 1 MENGGUNAKAN FIRST)
$data=Biodata::latest()->paginate(10);
    // dd($data);
    return view("biodata.index",compact("data"));
   }

   public function create()
   {
      return view('biodata.create');


   }

   public function store(Request $request)

   {
    $imageName = time().'.'.$request->image->getClientOriginalExtension();
    $request->image->move(public_path('images'),$imageName);

    $qurey=Biodata::create([
        'name'=>$request->name,
        'tanggal_lahir'=>$request->tanggal_lahir,
        'umur'=>$request->umur,
        'image'=> 'images/'.$imageName,
    ]);
    return redirect()->route('biodata.index')->with('message', 'berhasil di tambah');


   }

   public function destroy($id){
    $qurey=Biodata::where('id','=',$id)->delete();
    return redirect()->route('biodata.index')->with('message', 'berhasil di Hapus');
   }

   public function edit($id){
    $ad=Biodata::where('id','=',$id)->first();
    return view('biodata.edit', compact('ad'));
   }

   public function update(Request $request,$id)
   {
    if($request->image == null){
    $ay=Biodata::where("id",'=',$id)
    ->update([
        'name'=>$request->name,
        'tanggal_lahir'=>$request->tanggal_lahir,
        'umur'=>$request->umur,
    ]);
}
    else{
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'),$imageName);
        $ay=Biodata::where("id",'=',$id)
        ->update([
            'name'=>$request->name,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'umur'=>$request->umur,
            'image'=> 'images/'.$imageName,
    ]);
    }

    return redirect()->route('biodata.index')->with('message', 'berhasil di update');
   }
}

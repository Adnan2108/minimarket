<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // $data = Biodata::all();
    // $data=Biodata::latest()->get(); (JIKA DATANYA LOOPING MENGGUNAKAN GET, SEDANGKAN JIKA DATA HANYA 1 MENGGUNAKAN FIRST)
    $data=User::latest()->paginate(10);
        // dd($data);
        return view("user.index",compact("data"));
       }

       public function create()
       {
          return view('user.create');


       }

       public function store(Request $requst)

       {
        $qurey=User::create([
            'name'=>$requst->name,
            'email'=>$requst->email,
            'password'=>$requst->password,
        ]);
        return redirect()->route('user.index')->with('message', 'berhasil di tambah');


       }

       public function destroy($id){
        $qurey=User::where('id','=',$id)->delete();
        return redirect()->route('user.index')->with('message', 'berhasil di Hapus');
       }

       public function edit($id){
        $ad=User::where('id','=',$id)->first();
        return view('user.edit', compact('ad'));
       }

       public function update(Request $request,$id)
       {
        if($request->password == null){
        $ay=User::where("id",'=',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
    } else {
        $ay=User::where("id",'=',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
    }
        return redirect()->route('user.index')->with('message', 'berhasil di update');
       }
    }



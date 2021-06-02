<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    public function data(){
        $data=DB::table('testimoni')->paginate(100);
        return view('Admin/testimoni',['datatestimoni'=>$data]);
    }
    public function index(){
        return view('komponen/testimoni');
    }
    public function simpan(Request $request){
        DB::table('testimoni')->insert([

            'nama'=>$request->nama,
            'logo'=>$request->logo,
            'ket'=>$request->ket,
        ]);
        return redirect('/datatestimoni');
    }
    public function edit($nama){
        $data=  DB::table('testimoni')->where('nama',$nama)->get();
              return view('edit/edittestimoni',['testimoni'=>$data]);
          }

      public function update(Request $request){
         DB::table('testimoni')->where('nama', $request->nama )->update([

            'nama'=>$request->nama,
            'logo'=>$request->logo,
            'ket'=>$request->ket,

         ]);
         return redirect('/datatestimoni');
      }
    public function hapus($nama){
        DB::table('testimoni')->where('nama', $nama)->delete();

        return redirect('/datatestimoni');
    }
}

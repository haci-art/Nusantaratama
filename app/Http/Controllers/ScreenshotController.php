<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScreenshotController extends Controller
{
    public function data(){
        $data=DB::table('screenshot')->paginate(100);
        return view('Admin/screenshot',['datascreenshot'=>$data]);
    }
    public function tampil(){
        return view('komponen/ss');
    }
    public function store(Request $request){
        DB::table('screenshot')->insert([
            'kode'=>$request->kode,
            'judul'=>$request->judul,
            'gambar'=>$request->gambar,

        ]);
        return redirect('/datascreenshot');
    }
    public function editss($kode){
        $data=  DB::table('screenshot')->where('kode',$kode)->get();
              return view('edit/editss',['screenshot'=>$data]);
          }

      public function updatess(Request $request){
         DB::table('screenshot')->where('kode', $request->kode )->update([
            'kode'=>$request->kode,
            'judul'=>$request->judul,
            'gambar'=>$request->gambar,
         ]);
         return redirect('/datascreenshot');
      }
    public function hapusss($kode){
        DB::table('screenshot')->where('kode', $kode)->delete();

        return redirect('/datascreenshot');
    }
}

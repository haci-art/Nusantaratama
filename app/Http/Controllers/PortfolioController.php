<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function dataportfolio(){
        $data=DB::table('portofolio')->paginate(10);
        return view('Admin/portfolio',['portofolio'=>$data]);
    }
    public function tambahptf(){
        return view('komponen/portfolio');
    }
    public function simpanptf(Request $request){
        DB::table('portofolio')->insert([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'logo'=>$request->logo,
            'ket'=>$request->ket,
        ]);
        return redirect('/dataportfolio');
    }
    public function hapusptf($nama){
        DB::table('portofolio')->where('nama', $nama)->delete();

        return redirect('/dataportfolio');
    }
   public function Editptf($nama){
        $data=  DB::table('portofolio')->where('nama',$nama)->get();
              return view('layouts/Editptf',['portofolioedit'=>$data]);
          }

      public function updateptf(Request $request){
         DB::table('portofolio')->where('nama', $request->nama )->update([
            'kode'=>$request->kode,
            'nama'=>$request->nama,
            'logo'=>$request->logo,
            'ket'=>$request->ket,

         ]);
         return redirect('/dataportfolio');
      }
}

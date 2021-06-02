<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    // public function __construct()
     //{
         //$this->middleware('auth');
  //}
  public function databanner(){
    $data=DB::table('banner')->paginate(150);
    return view('Admin/banner',['databanner'=>$data]);
}
public function index(){
    return view('komponen/bnr');
}
public function simpanbanner(Request $request){
    DB::table('banner')->insert([
        'judul_banner'=>$request->judul_banner,
        'ket'=>$request->ket,
        'upload'=>$request->upload,
    ]);
    return redirect('/databanner');
}
public function editbanner($judul_banner){
    $data=  DB::table('banner')->where('judul_banner',$judul_banner)->get();
          return view('edit/editbnr',['banner'=>$data]);
      }

  public function updatebanner(Request $request){
     DB::table('banner')->where('judul_banner', $request->judul_banner)->update([
        'judul_banner'=>$request->judul_banner,
        'ket'=>$request->ket,
        'upload'=>$request->upload,
    ]);
     return redirect('/databanner');
  }
public function hapusbanner($judul_banner){
    DB::table('banner')->where('judul_banner', $judul_banner)->delete();

    return redirect('/databanner');
}

}

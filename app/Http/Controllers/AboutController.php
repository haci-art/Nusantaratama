<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function about(){
        $data=DB::table('about')->paginate(150);
        return view('Admin/about',['dataabout'=>$data]);
    }
    public function editabout($id){
        $data=  DB::table('about')->where('id',$id)->get();
              return view('komponen/about',['about'=>$data]);
          }

      public function updateabout(Request $request){
         DB::table('about')->where('id', $request->id)->update([
            'id'=>$request->id,
            'deskripsi'=>$request->deskripsi,
            'sub_about'=>$request->sub_about,
        ]);
         return redirect('/about');
      }
}

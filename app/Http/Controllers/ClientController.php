<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function dataclient(){
        $data=DB::table('client')->paginate(150);
        return view('Admin/client',['dataclient'=>$data]);
    }
    public function index(){
        return view('komponen/client');
    }
    public function simpanClient(Request $request){
        DB::table('client')->insert([
            'nama_client'=>$request->nama_client,
            'logo_client'=>$request->logo_client,
            'link'=>$request->link,
        ]);
        return redirect('/dataclient');
    }
    public function editclient($nama_client){
        $data=  DB::table('client')->where('nama_client',$nama_client)->get();
              return view('edit/editclient',['client'=>$data]);
          }

      public function updateclient(Request $request){
         DB::table('client')->where('nama_client', $request->nama_client)->update([
            'nama_client'=>$request->nama_client,
            'logo_client'=>$request->logo_client,
            'link'=>$request->link,
         ]);
         return redirect('/dataclient');
      }
    public function hapusclient($nama_client){
        DB::table('client')->where('nama_client', $nama_client)->delete();

        return redirect('/dataclient');
    }

}

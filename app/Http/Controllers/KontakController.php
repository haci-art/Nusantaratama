<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function datapesan(){
        $data=DB::table('kontak')->paginate(100);
        return view('komponen/contak',['kiriman'=>$data]);
    }
    public function index(){
        return view('Admin/kontak');
    }
    public function simpanpesan(Request $request){
        DB::table('kontak')->insert([

            'nama'=>$request->nama,
            'email'=>$request->email,
            'pesan'=>$request->pesan,
            'komentar'=>$request->komentar,

        ]);
        return redirect('/kiriman');
    }
    public function hapuspesan($email){
        DB::table('kontak')->where('email', $email)->delete();

        return redirect('/kiriman');
}
}

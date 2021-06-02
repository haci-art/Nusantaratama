<?php

namespace App\Http\Controllers;

use Validator;
use Hash;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AuthController extends Controller
{


    public function home()
    {
        return view('home.index');
    }

    public function login(Request $req, User $user)
    {
        if (Auth::check()) {
            return redirect('Ahome');
        } else {
            Session::flash('error', 'name or password are incorrect');
            return redirect('login');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vwregis()
    {
        return view('akun/regis');
    }

    public function regis(Request $req)
    {
        $rules = array([
            'name' => 'required|string|min:3|',
            'email' => 'required|unique:{user}|email',
            'password' => 'required|min:5'
        ]);
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            Redirect::to('register')->with_errors($validator);
        } else {
            $User = new User;
            $User->name = $req->input('name');
            $User->email = $req->input('email');
            $User->password = $req->input('password');
            $result = $User->save();
            if ($result) {
                Session::flash('success', 'Register Berhasil! Silahkan login kembali.');
                return redirect('login');
            } else {
                Session::flash('errors', ['' => 'Registration Failed!']);
                return redirect('regis');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function respas()
    {
        return view('akun/respass');
    }

    public function chgrespas($name, Request $req)
    {
        $user = User::find($name);
        $result = $user->exists();
        if ($result) {
            return redirect('edtrespas');
        } else {
            return redirect('respas');
        }
    }
    public function Admin()
    {
        if (Auth::check()) {
            return view('Admin/Ahome');
        } else {
            return redirect('home');
        }
    }
}

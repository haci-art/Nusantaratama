<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        return view('home/index');
    }
    public function Ahome()
    {
        return view('admin/Ahome');
    }
    public function adminhome()
    {
        return view('Admin/homeadmin');
    }
}

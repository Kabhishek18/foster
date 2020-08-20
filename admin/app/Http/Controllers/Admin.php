<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function Dashboard()
    {
        return view('test');
       
    }



}

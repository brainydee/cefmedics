<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');    
    }

    public function test()
    {
        return view('auth.test');
    }

    
    public function oncology()
    {
        return view('pages.oncology');    
    }

    public function psycooncology()
    {
        return view('pages.psyco-oncology');    
    }
}

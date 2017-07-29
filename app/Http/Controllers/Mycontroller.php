<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orangtua;

class Mycontroller extends Controller
{
    //
    public function index()
    {
    	$a ="Bagas Alvi Pramaditya";
    	return $a;

    }

    public function tampilmodel()
    {
    	$ortu = Orangtua::all();
    	return $ortu;
    }

    public function tampilview()
    {
    	return view('about');
    }

    public function coba()
    {
    	$ortu = Orangtua::all();
    	return view('index', compact('ortu'));
    }

}

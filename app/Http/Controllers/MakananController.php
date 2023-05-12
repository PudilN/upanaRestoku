<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MakananController extends Controller
{
    public function index()
    {
   
    	$makanan = DB::table('makanan')->get();

    	return view('index',['makanan' => $makanan]);

    }
}

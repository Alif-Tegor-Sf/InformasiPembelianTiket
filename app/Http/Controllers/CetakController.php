<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Cetak()
    {
        return view('/Cetak');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Pembayaran()
    {
        return view('/Pembayaran');
    }
}

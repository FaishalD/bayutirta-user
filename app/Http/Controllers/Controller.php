<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\UlasanController;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Layanan;
use App\Models\Artikel;
use App\Models\Ulasan;

class Controller extends BaseController
{
    public function index()
    {
        $artikel = Artikel::all();
        $ulasan = Ulasan::all();
        $layanans = Layanan::all();
        // return response()->json([
        //             'layanan' => $layanans,
        //             'artikel' => $artikel,
        //             'ulasan' => $ulasan]);
        return view('home',[
            'layanan' => $layanans,
            'artikel' => $artikel,
            'ulasan' => $ulasan]);
    }
}

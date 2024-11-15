<?php

namespace App\Http\Controllers;

use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $jenis_pelatihans = JenisPelatihan::all();
        return view('pages.landing.home', compact('jenis_pelatihans'));
    }
}

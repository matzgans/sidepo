<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        $datas = Peserta::with('pelatihans')
            ->has('pelatihans')->get();
        $jenis_pelatihans = JenisPelatihan::all();
        $articles = Article::where('is_status', 1)->get();
        return view('pages.landing.home', compact('jenis_pelatihans', 'articles', 'datas'));
    }
}

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
        // $jenis_pelatihans = JenisPelatihan::all();
        $articles = Article::where('is_status', 1)->get();
        $jenis_pelatihans = JenisPelatihan::with('pelatihans')->get();
        return view('pages.landing.home', compact('jenis_pelatihans', 'articles', 'datas'));
    }

    public function detail_article(string $uuid)
    {
        $article = Article::where('uuid', $uuid)->first();
        $recomendationArticles = Article::where('is_status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('pages.landing.detail_article', compact('article', 'recomendationArticles'));
    }
}

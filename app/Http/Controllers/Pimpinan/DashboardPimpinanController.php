<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Http\Request;

class DashboardPimpinanController extends Controller
{
    public function dashboard()
    {
        $datas = Peserta::with('pelatihans')
            ->has('pelatihans')->get();
        $count_pesertas = Peserta::count();
        $count_jenis_pelatihans = JenisPelatihan::count();
        $count_telah_pelatihans = Pelatihan::where('is_status', 3)->count();
        return view('pages.pimpinan.dashboard', compact('datas', 'count_pesertas', 'count_jenis_pelatihans', 'count_telah_pelatihans'));
    }
}
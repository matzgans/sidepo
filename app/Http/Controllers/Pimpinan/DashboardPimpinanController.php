<?php

namespace App\Http\Controllers\Pimpinan;

use App\Http\Controllers\Controller;
use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPimpinanController extends Controller
{
    public function dashboard()
    {
        $datas = Peserta::with('pelatihans')
            ->has('pelatihans')->get();
        $count_pesertas = Peserta::count();
        $count_jenis_pelatihans = JenisPelatihan::count();
        $count_telah_pelatihans = Pelatihan::where('is_status', 3)->count();

        // data bar-chart
        $data_bar_chart = DB::table('jenis_pelatihans')
            ->leftJoin('pelatihans', 'jenis_pelatihans.id', '=', 'pelatihans.jenis_pelatihan_id')
            ->select('jenis_pelatihans.title', DB::raw('COUNT(DISTINCT pelatihans.peserta_id) as jumlah_peserta'))
            ->groupBy('jenis_pelatihans.id', 'jenis_pelatihans.title')
            ->get();

        $data_pie_chart_jk = Peserta::select('gender as title', DB::raw('count(*) as jumlah_peserta'))
            ->whereIn('gender', ['Laki - Laki', 'Perempuan'])
            ->groupBy('gender')
            ->get();


        $data_pie_chart_status = Pelatihan::select(
            DB::raw('
                    CASE 
                        WHEN is_status = "0" THEN "Pelatihan Belum selesai" 
                        WHEN is_status = "1" THEN "Pelatihan Tidak Selesai" 
                        WHEN is_status = "2" THEN "Pelatihan Selesai" 
                    END as status
                '),
            DB::raw('count(*) as Jumlah')
        )
            ->whereIn('is_status', ["0", "1", "2"])  // Pastikan tipe data string untuk ENUM
            ->groupBy('is_status')
            ->get();




        // dd($data_pie_chart_jk);
        return view('pages.pimpinan.dashboard', compact('data_pie_chart_status', 'data_pie_chart_jk', 'data_bar_chart', 'datas', 'count_pesertas', 'count_jenis_pelatihans', 'count_telah_pelatihans'));
    }
}

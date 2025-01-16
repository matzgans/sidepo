<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jenis_pelatihans = JenisPelatihan::with('pelatihans')->get();

        return view("pages.admin.pelatihan.index", compact('jenis_pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis_pelatihans = JenisPelatihan::get();
        $pesertas = Peserta::get();
        return view("pages.admin.pelatihan.create", compact('jenis_pelatihans', 'pesertas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'peserta_id' => 'required|exists:pesertas,id',
            'jenis_pelatihan_id' => 'required|array|min:1',
            'jenis_pelatihan_id.*' => 'exists:jenis_pelatihans,id',
            'score_absensi' => 'required|array',
            'score_absensi.*' => 'numeric|min:0|max:100',
            'score_tugas' => 'required|array',
            'score_tugas.*' => 'numeric|min:0|max:100',
            'score_test' => 'required|array',
            'score_test.*' => 'numeric|min:0|max:100',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Looping untuk menyimpan data pelatihan
        foreach ($request->jenis_pelatihan_id as $index => $item) {
            $existing = Pelatihan::where('peserta_id', $request->peserta_id)
                ->where('jenis_pelatihan_id', $item)
                ->exists();

            if ($existing) {
                return redirect()->back()->withErrors([
                    'jenis_pelatihan_id' => 'Peserta ini sudah memilih jenis pelatihan ini sebelumnya.'
                ]);
            }

            // Ambil data jenis pelatihan
            $jenisPelatihan = JenisPelatihan::findOrFail($item);

            // Hitung total nilai
            $totalScore = ($request->score_absensi[$index] ?? 0) + ($request->score_tugas[$index] ?? 0) + ($request->score_test[$index] ?? 0);

            // Tentukan status berdasarkan totalScore vs standar_value
            $status = $totalScore >= $jenisPelatihan->pelatihan_standart_value ? 2 : 1;

            // Simpan data pelatihan
            Pelatihan::create([
                'peserta_id' => $request->peserta_id,
                'jenis_pelatihan_id' => $item,
                'score_absensi' => $request->score_absensi[$index] ?? 0,
                'score_tugas' => $request->score_tugas[$index] ?? 0,
                'score_test' => $request->score_test[$index] ?? 0,
                'is_status' => $status,
            ]);
        }

        // Redirect dengan pesan sukses
        return redirect()->route('admin.pelatihan.index')->with('success', "Data Jenis Pelatihan Berhasil Ditambahkan");
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPelatihan $pelatihan)
    {
        $jenis_pelatihan = $pelatihan->load('pelatihans');
        // $jenis_pelatihan = JenisPelatihan::findOrFail($id)->with('pelatihans')->first();
        return view('pages.admin.pelatihan.edit', compact('jenis_pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function edit_score(Pelatihan $pelatihan)
    {
        return view('pages.admin.pelatihan.score.edit', compact('pelatihan'));
    }
    public function update_score(Request $request, Pelatihan $pelatihan)
    {
        $validator = Validator::make($request->all(), [
            'score_absensi' => 'required|numeric',
            'score_tugas' => 'required|numeric',
            'score_test' => 'required|numeric',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mendapatkan nilai standar pelatihan
        $pelatihanStandartValue = $pelatihan->jenisPelatihan->pelatihan_standart_value;

        // Menjumlahkan semua skor
        $totalScore = $request->score_absensi + $request->score_tugas + $request->score_test;

        // Memeriksa apakah total skor lebih besar atau sama dengan nilai standar
        if ($totalScore >= $pelatihanStandartValue) {
            // Set is_status menjadi 2 jika total skor memenuhi syarat
            $pelatihan->score_absensi = $request->score_absensi;
            $pelatihan->score_tugas = $request->score_tugas;
            $pelatihan->score_test = $request->score_test;
            $pelatihan->is_status = 2;
            $pelatihan->save();
        }

        // Redirect ke halaman edit pelatihan
        return redirect()->route('admin.pelatihan.edit', ['pelatihan' => $pelatihan->jenisPelatihan->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatihan = Pelatihan::where('jenis_pelatihan_id', $id);
        if ($pelatihan->exists()) {
            $pelatihan->delete();
        } else {
            dd("Data kosong");
        }
        return redirect()->back()->with('success', "Berhasi Mengapus Data Pelatihan");
    }
    public function update_status(Request $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'status' => 'required|integer',
        ]);
        $pelatihan->is_status = $request->status;
        $pelatihan->save();
        return back()->with('success', 'Status updated successfully');
    }
    public function update_status_all($id)
    {
        $jenis_pelatihan = Pelatihan::where('jenis_pelatihan_id', $id)->get();

        foreach ($jenis_pelatihan as $item) {
            $item->is_status = 2; // Perbarui nilai is_status secara langsung
            $item->save(); // Simpan perubahan ke database
        }

        return back()->with('success', 'Status updated successfully');
    }
    public function peserta_destroy($id)
    {
        $pelatihan_peserta_id = Pelatihan::where('peserta_id', $id)->first();
        if ($pelatihan_peserta_id) {
            $pelatihan_peserta_id->delete();
        }
        return redirect()->back()->with('success', "Data Jenis Pelatihan Berhasil Dihapus");
    }
}

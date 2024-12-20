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
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Looping untuk menyimpan data pelatihan
        foreach ($request->jenis_pelatihan_id as $item) {
            $existing = Pelatihan::where('peserta_id', $request->peserta_id)
                ->where('jenis_pelatihan_id', $item)
                ->exists();

            if ($existing) {
                return redirect()->back()->withErrors([
                    'jenis_pelatihan_id' => 'Peserta ini sudah memilih jenis pelatihan ini sebelumnya.'
                ]);
            }

            // Simpan data jenis pelatihan jika tidak ada duplikasi
            Pelatihan::create([
                'peserta_id' => $request->peserta_id,
                'jenis_pelatihan_id' => $item,
                'is_status' => 1
            ]);
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', "Data Jenis Pelatihan Berhasil Ditambahkan");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Peserta::with('pelatihans')
            ->has('pelatihans'); // Hanya tampilkan data yang memiliki relasi pelatihans

        // Memeriksa apakah ada query pencarian
        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;

            // Menambahkan kondisi pencarian untuk beberapa kolom
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('nik', 'LIKE', "%{$searchTerm}%");
            });
        }

        $pesertas = $query->paginate(3)->appends(['search' => $request->search]);

        return view("pages.admin.pelatihan.index", compact('pesertas'));
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
        // Debugging, lihat isi request (Hapus dd() setelah selesai debugging)
        // dd($request);

        // Validasi input
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
    public function edit(string $id)
    {
        //
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
        $pelatihan = Pelatihan::where('peserta_id', $id)->get();
        foreach ($pelatihan as $item) {
            $item->delete();
        }
        return redirect()->back()->with('success', "Data Jenis Pelatihan Berhasil Menghapus Semua data Pelatihan");
    }
    public function update_status(string $update_status)
    {
        $pelatihan = Pelatihan::where('id', $update_status)->first();
        if ($pelatihan->is_status == 3) {
            $pelatihan->update([
                'is_status' => 1,
            ]);
        } else {

            $pelatihan->update([
                'is_status' => 3,
            ]);
        }
        return redirect()->back()->with('success', "Data Jenis Pelatihan Berhasil menyelesaikan pelatihan");
    }
    public function delete_status(string $delete_status)
    {
        $pelatihan = Pelatihan::where('id', $delete_status)->first();
        $pelatihan->delete();
        return redirect()->back()->with('success', "Data Jenis Pelatihan Berhasil menyelesaikan pelatihan");
    }
}

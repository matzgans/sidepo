<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPelatihan;
use App\Models\Pelatihan;
use App\Models\Peserta;
use Illuminate\Http\Request;

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

        $pesertas = $query->paginate(5)->appends(['search' => $request->search]);

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
        foreach ($request->jenis_pelatihan_id as $item) {
            # code...
            Pelatihan::create([
                'peserta_id' => $request->peserta_id,
                'jenis_pelatihan_id' => $item,
            ]);
        }

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

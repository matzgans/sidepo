<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JenisPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = JenisPelatihan::query();

        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;
            $query->where('title', 'LIKE', "%{$searchTerm}%");
        }

        $jenis_pelatihans = $query->paginate(3)->appends(['search' => $request->search]);
        return view("pages.admin.jenis_pelatihan.index", compact('jenis_pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.admin.jenis_pelatihan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|min:6|unique:jenis_pelatihans',
            'desc' => 'required|string|max:500|min:6',
            'pelatihan_standart_value' => 'required|numeric',
            'pelatihan_start' => 'required|date',
            'pelatihan_end' => 'required|date',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        JenisPelatihan::create([
            'title' => $request->title,
            'pelatihan_standart_value' => $request->pelatihan_standart_value,
            'desc' => $request->desc,
            'pelatihan_start' => $request->pelatihan_start,
            'pelatihan_end' => $request->pelatihan_end,
        ]);

        return redirect()->route('admin.jenis_pelatihan.index')->with('success', "Data Jenis Pelatihan Berhasil Diubah");
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
    public function edit(JenisPelatihan $jenis_pelatihan)
    {
        return view("pages.admin.jenis_pelatihan.edit", compact('jenis_pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisPelatihan $jenis_pelatihan)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|min:6|unique:jenis_pelatihans,title,' . $jenis_pelatihan->id,
            'desc' => 'required|string|max:255|min:6',
            'pelatihan_standart_value' => 'required|numeric',
            'pelatihan_start' => 'required|date',
            'pelatihan_end' => 'required|date',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $jenis_pelatihan->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'pelatihan_standart_value' => $request->pelatihan_standart_value,
            'pelatihan_start' => $request->pelatihan_start,
            'pelatihan_end' => $request->pelatihan_end,
        ]);
        return redirect()->route('admin.jenis_pelatihan.index')->with('success', "Data Jenis Pelatihan Berhasil Diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisPelatihan $jenis_pelatihan)
    {
        $jenis_pelatihan->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.jenis_pelatihan.index')->with('success', 'Peserta berhasil dihapus.');
    }
}

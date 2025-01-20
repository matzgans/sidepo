<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Traits\UploadImage;
use App\View\Components\search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PesertaController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Peserta::query();

        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;
            $query->where('name', 'LIKE', "%{$searchTerm}%") // Replace column1 with actual column name
                ->orWhere('nik', 'LIKE', "%{$searchTerm}%"); // Add more columns if needed
        }

        $pesertas = $query->paginate(3)->appends(['search' => $request->search]);
        return view("pages.admin.peserta.index", compact('pesertas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.admin.peserta.create");
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {

        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:6',
            'nik' => 'required|numeric|digits:16|unique:pesertas,nik',
            'gender' => 'required',
            'birth' => 'required|date',
            'phone' => 'required',
            'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Mendukung 3 tipe file
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = $this->saveImage($file = $request->file('photo'), $path = 'profilephoto');
        Peserta::create([
            'name' => $request->name,
            'photo' => $imageName,
            'nik' => $request->nik,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.pesertas.index')->with('success', "Data Peserta Berhasil Ditambahkan");
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
    public function edit($id)
    {
        $peserta = Peserta::where('id', $id)->first();
        return view("pages.admin.peserta.edit", compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:6',
            'nik' => 'required|numeric|digits:16|unique:pesertas,nik,'  . $peserta->id,
            'gender' => 'required',
            'birth' => 'required|date',
            'phone' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // $id adalah ID peserta yang akan diupdate

        // Cek apakah ada file gambar baru
        $imageName = $peserta->photo; // Set default photo name to current photo

        if ($file = $request->file('photo')) {
            // Jika ada gambar baru, hapus gambar lama terlebih dahulu
            if (file_exists(public_path('profilephoto/' . $peserta->photo))) {
                unlink(public_path('profilephoto/' . $peserta->photo)); // Menghapus gambar lama
            }

            // Simpan gambar baru dan dapatkan nama file baru
            $imageName = $this->saveImage($file = $request->file('photo'), $path = 'profilephoto');
        }

        $peserta->update([
            'name' => $request->name,
            'photo' => $imageName, // Nama foto yang sudah disimpan
            'nik' => $request->nik,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.pesertas.index')->with('success', "Data Peserta Berhasil Di ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        if ($peserta->photo && file_exists(public_path('profilephoto/' . $peserta->photo))) {
            unlink(public_path('profilephoto/' . $peserta->photo)); // Menghapus gambar lama
        }

        $peserta->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.pesertas.index')->with('success', 'Peserta berhasil dihapus.');
    }
}

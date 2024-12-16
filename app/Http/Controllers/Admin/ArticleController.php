<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->has('search') && $request->search) {
            $searchTerm = $request->search;
            $query->where('title', 'LIKE', "%{$searchTerm}%"); // Add more columns if needed
        }

        $articles = $query->paginate(3)->appends(['search' => $request->search]);
        return view("pages.admin.article.index", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.admin.article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|min:6|unique:articles,title',
            'content' => 'required|string|max:3000|min:6',
            'author' => 'required|string|max:255|min:6',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Mendukung 3 tipe file
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = $this->saveImage($file = $request->file('thumbnail'), $path = 'thumbnail');
        Article::create([
            'uuid' => Str::uuid(),
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'thumbnail' => $imageName,
        ]);

        return redirect()->back()->with('success', "Data Peserta Berhasil Ditambahkan");
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
    public function edit(string $uuid)
    {
        $article = Article::where('uuid', $uuid)->first();

        return view("pages.admin.article.edit", compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        $article = Article::where('uuid', $uuid)->first();
        // Validasi input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|min:6|unique:articles,title,' . $article->id,
            'content' => 'required|string|max:500|min:6',
            'author' => 'required|string|max:255|min:6',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Mendukung 3 tipe file
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Cek apakah ada file gambar baru
        $imageName = $article->thumbnail; // Set default photo name to current photo

        if ($file = $request->file('thumbnail')) {
            // Jika ada gambar baru, hapus gambar lama terlebih dahulu
            if (file_exists(public_path('thumbnail/' . $article->thumbnail))) {
                unlink(public_path('thumbnail/' . $article->thumbnail)); // Menghapus gambar lama
            }

            // Simpan gambar baru dan dapatkan nama file baru
            $imageName = $this->saveImage($file = $request->file('thumbnail'), $path = 'thumbnail');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'thumbnail' => $imageName,
        ]);

        return redirect()->back()->with('success', "Data Peserta Berhasil Di ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $article = Article::where('uuid', $uuid)->first();

        if ($article->thumbnail && file_exists(public_path('thumbnail/' . $article->thumbnail))) {
            unlink(public_path('thumbnail/' . $article->thumbnail)); // Menghapus gambar lama
        }

        $article->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.article.index')->with('success', 'article berhasil dihapus.');
    }

    public function update_status(Request $request, String $uuid)
    {

        if ($request->is_status == null) {

            $data = Article::where('uuid', $uuid)->first();
            $data->is_status = 0;
            $data->save();
        } else {

            $data = Article::where('uuid', $uuid)->first();
            $data->is_status = $request->is_status;
            $data->save();
        }


        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Status Berhasil Diubah');
    }
}

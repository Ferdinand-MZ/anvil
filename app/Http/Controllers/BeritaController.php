<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(): View
    {
        return view('authority.berita.index', [
            'title' => 'HIMATIKOM POLSUB | Berita',
            'beritas' => Berita::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('authority.berita.create', [
        'title' => 'HIMATIKOM POLSUB | Berita Create',
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'foto' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'isi' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'foto.required' => 'Foto wajib diisi!',
            'isi.required' => 'Isi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->foto->extension();
        $request->file('foto')->storeAs('public/artikel', $fileName);

        # Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->isi, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'foto' => $fileName,
            'isi' => $dom->saveHTML(),
        ]);

        return redirect(route('halaman-artikel'))->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('authority.berita.edit', [
        'title' => 'HIMATIKOM POLSUB | Berita Edit',
        'berita' => $berita,  // Pastikan variabel berita dikirim ke view
    ]);
}


public function update(Request $request, $id)
{
    $artikel = Blog::find($id);

    # Jika ada image baru
    if ($request->hasFile('foto')) {
        $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
    } else {
        $fileCheck = '';
    }

    $rules = [
        'judul' => 'required',
        'foto' => $fileCheck,
        'isi' => 'required|min:20',
    ];

    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'foto.required' => 'Foto wajib diisi!',
        'isi.required' => 'Isi wajib diisi!',
    ];

    $this->validate($request, $rules, $messages);

    // Cek jika ada image baru
    if ($request->hasFile('foto')) {
        if (\File::exists('storage/artikel/' . $berita->image)) {
            \File::delete('storage/artikel/' . $request->old_image);
        }
        $fileName = time() . '.' . $request->image->extension();
        $request->file('foto')->storeAs('public/artikel', $fileName);
    }

    if ($request->hasFile('image')) {
        $checkFileName = $fileName;
    } else {
        $checkFileName = $request->old_image;
    }

    // Artikel
    $storage = "storage/content-artikel";
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
    libxml_clear_errors();

    $images = $dom->getElementsByTagName('img');

    foreach ($images as $img) {
        $src = $img->getAttribute('src');
        if (preg_match('/data:image/', $src)) {
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimetype = $groups['mime'];
            $fileNameContent = uniqid();
            $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
            $filePath = ("$storage/$fileNameContentRand.$mimetype");
            $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
            $new_src = asset($filePath);
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    $artikel->update([
        'judul' => $request->judul,
        'image' => $checkFileName,
        'desc' => $dom->saveHTML(),
    ]);

    return redirect(route('blog'))->with('success', 'data berhasil di update');
}

    public function destroy($id) 
    {

    }
}

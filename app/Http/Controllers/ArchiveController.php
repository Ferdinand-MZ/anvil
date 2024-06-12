<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\ArchiveCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Backtrace\Arguments\ReducedArgument\ReducedArgument;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archives = Archive::all()->map(function($archive) {
            // Menggunakan basename() untuk mendapatkan nama file dari path
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        $data = [
            'title' => 'HIMATIKOM | Dashboard Admin',
            'archives' => $archives,
        ];
        return view('arsip.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'HIMATIKOM | Create Archive',
            'categories' => ArchiveCategory::all()
        ];
        return view('arsip.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'filename' => 'required|string|max:255',
        'archive_category_id' => 'required|integer',
        'filepath' => 'required|file|mimes:pdf,xlsx,xls,csv,docx|max:2048',
    ]);

    $uploadedFile = $request->file('filepath');
    $originalName = $uploadedFile->getClientOriginalName();
    $filepath = $uploadedFile->storeAs('archives', $originalName, 'public');

    Archive::create([
        'uuid' => uuid_create(),
        'user_id' => auth()->user()->id,
        'filename' => $request->filename,
        'filepath' => "storage/$filepath",
        'archive_category_id' => $request->archive_category_id
    ]);

    return redirect()->route('archive.index')->with('success', 'File berhasil diupload.');
}


    /**
     * Display the specified resource.
     */
    public function show(Archive $archive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archive $archive)
    {
        $data = [
            'title' => 'HIMATIKOM | Edit Archive',
            'archive' => $archive,
            'categories' => ArchiveCategory::all()
        ];
        return view('arsip.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Archive $archive): RedirectResponse
    {
        $validatedData = $request->validate([
            'filename' => 'required|string|max:255',
            'archive_category_id' => 'required|integer',
            'filepath' => 'nullable|file|mimes:pdf,xlsx,xls,csv,docx|max:2048',
        ]);

        if ($request->hasFile('filepath')) {
            // Hapus file lama jika ada
            if ($request->oldFilepath) {
                Storage::disk('public')->delete(str_replace('storage/', '', $request->oldFilepath));
            }

            // Simpan file baru
            $uploadedFile = $request->file('filepath');
            $originalName = $uploadedFile->getClientOriginalName();
            $filepath = $uploadedFile->storeAs('archives', $originalName, 'public');
            $validatedData['filepath'] = "storage/$filepath";
        } else {
            $validatedData['filepath'] = $archive->filepath;
        }

        $archive->update($validatedData);

        return redirect()->route('archive.index')->with('success', 'File berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archive $archive)
    {
        $archive->delete();
        return redirect()->route('archive.index')->with('success', 'File berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\ArchiveCategory;
use App\Models\LetterType;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchivesController extends Controller
{
    public function index_archive()
    {
        $archives = Archive::orderBy('date_at', 'desc')->get()
            ->map(function($archive) {
                // Menggunakan basename() untuk mendapatkan nama file dari path
                $archive->filename = basename($archive->filepath);
                return $archive;
            });

        $data = [
            'title' => 'HIMATIKOM | Data Arsip',
            'archives' => $archives,
        ];
        return view('arsip.index', $data);
    }


    public function create_archive()
    {
        $data = [
            'title' => 'HIMATIKOM | Create Archive',
            'categories' => ArchiveCategory::all(),
            'lettertypes' => LetterType::all()
        ];
        return view('arsip.tambah', $data);
    }

    public function store_archive(Request $request): RedirectResponse
    {

        // Corrected validation rules
        $request->validate([
            'letter_type_id' => 'required|integer',
            'archive_category_id' => 'required|integer',
            'letter_from' => 'required|string|max:255',
            'description' => 'required|string|max:255', // Fixed typo
            'filepath' => 'required|file|mimes:pdf,xlsx,xls,csv,docx|max:2048',
        ]);



        // Handle the file upload
        $uploadedFile = $request->file('filepath');
        $originalName = $uploadedFile->getClientOriginalName();
        $filepath = $uploadedFile->storeAs('archives', $originalName, 'public');



        // Insert data into the database
        Archive::insert([
            'uuid' => uuid_create(),
            'user_id' => auth()->user()->id,
            'letter_type_id' => $request->letter_type_id,
            'archive_category_id' => $request->archive_category_id,
            'date_at' => $request->date_at ?? null,
            'letter_from' => $request->letter_from,
            'description' => $request->description,
            'filepath' => "storage/$filepath",
        ]);

        return redirect()->route('archive.index')->with([
            'title' => 'Menambahkan Data Arsip',
            'icon' => 'success',
            'text' => 'Berhasil menambahkan Data'
        ]);
    }

    public function edit_archive(Archive $archive)
    {
        $data = [
            'title' => 'HIMATIKOM | Edit Archive',
            'archive' => $archive,
            'categories' => ArchiveCategory::all(),
            'lettertypes' => LetterType::all()
        ];
        return view('arsip.edit', $data);
    }

    public function update_archive(Request $request, Archive $archive): RedirectResponse
    {
        $validatedData = $request->validate([
            'letter_type_id' => 'required|integer',
            'archive_category_id' => 'required|integer',
            'letter_from' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'date_at' => 'nullable',
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

        return redirect()->route('archive.index')->with([
            'title' => 'Update Data Arsip',
            'icon' => 'success',
            'text' => 'Berhasil Update Data'
        ]);
    }

    public function inbox(): View
    {
        $archives = Archive::where([
            ['letter_type_id', 1],
            ['archive_category_id', 3]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        return view('arsip.inbox', [
            'title' => 'HIMATIKOM | Inbox',
            'archives' => $archives,
        ]);
    }

    public function inbox_print()
    {
        $archives = Archive::where([
            ['letter_type_id', 1],
            ['archive_category_id', 3]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        $pdf = new Pdf;
        $pdf = Pdf::loadView('print.surat-masuk', [
            'title' => 'HIMATIKOM | Inbox',
            'archives' => $archives,
        ])->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('inbox.pdf');
    }


    public function outbox(): View
    {
        $archives = Archive::where([
            ['letter_type_id', 2],
            ['archive_category_id', 3]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        return view('arsip.outbox', [
            'title' => 'HIMATIKOM | Outbox', // Mengubah judul sesuai dengan konteks
            'archives' => $archives,
        ]);

    }

    public function outbox_print()
    {
        $archives = Archive::where([
            ['letter_type_id', 2],
            ['archive_category_id', 3]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        $pdf = new Pdf;
        $pdf = Pdf::loadView('print.surat-masuk', [
            'title' => 'HIMATIKOM | Outbox',
            'archives' => $archives,
        ])->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('outbox.pdf');
    }

    public function proposal()
    {
        $proposals = Archive::where([
            ['archive_category_id', 2]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        return view('arsip.proposal', [
            'title' => 'HIMATIKOM | Proposal',
            'proposals' => $proposals,
        ]);
    }

    public function proposal_print()
    {
        $proposals = Archive::where([
            ['archive_category_id', 2]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        $pdf = new Pdf;
        $pdf = Pdf::loadView('print.proposal-print', [
            'title' => 'HIMATIKOM | Prpposal',
            'proposals' => $proposals,
        ])->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('proposal.pdf');
    }

    public function sertifikat()
    {
        $certificates = Archive::where([
            ['archive_category_id', 1]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        return view('arsip.sertifikat', [
            'title' => 'HIMATIKOM | Sertifikat',
            'certificates' => $certificates,
        ]);
    }

    public function sertifikat_print()
    {
        $certificates = Archive::where([
            ['archive_category_id', 1]
        ])->orderBy('date_at', 'desc')
        ->get()->map(function ($archive) {
            $archive->filename = basename($archive->filepath);
            return $archive;
        });

        $pdf = new Pdf;
        $pdf = Pdf::loadView('print.sertifikat-print', [
            'title' => 'HIMATIKOM | Sertifikat',
            'certificates' => $certificates,
        ])->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        return $pdf->stream('sertifikat.pdf');
    }
}

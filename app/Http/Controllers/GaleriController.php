<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class GaleriController extends Controller
{
    //

    public function index()
    {
        $galeri = Galeri::where('statusenabled', true)->get();

        $galeri = DB::table('galeri_m as ga')
        ->leftjoin('file_m as fl', 'ga.file_uuid', 'fl.uuid')
        ->select('ga.uuid', 'ga.statusenabled', 'fl.path')
        ->where('ga.statusenabled', true)->get();

        return view('dashboard.galeri.index', compact('galeri'));
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,avi,mov|max:10240', // Maksimal 10MB
        ]);

        try {
            $fileRecord = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Menyimpan file ke storage dan mendapatkan path
                $path = $file->store('file', 'public');

                // Menyimpan informasi file ke tabel 'files'
                $fileRecord = new File();
                $fileRecord->uuid = (string) Uuid::uuid4()->toString();
                $fileRecord->name = $file->getClientOriginalName();
                $fileRecord->path = $path;
                $fileRecord->mime_type = $file->getMimeType();
                $fileRecord->size = $file->getSize();
                $fileRecord->format = $file->getClientOriginalExtension();
                $fileRecord->save();
            }

            Galeri::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'file_uuid' => $fileRecord->uuid,
            ]);


            return redirect()->route('galeri.index')->with('success','Galeri berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->route('galeri.index')->with('info','Galeri gagal ditambahkan'. $th->getMessage());
        }
    }

    public function delete($uuid)
    {
        try {
            Galeri::where('uuid', $uuid)->update([
                'statusenabled' => false,
            ]);

            return redirect()->back()->with('success', 'Hapus item berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Hapus item gagal...\n' . $th->getMessage()));
        }
    }
}

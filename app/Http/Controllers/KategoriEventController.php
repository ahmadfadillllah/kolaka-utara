<?php

namespace App\Http\Controllers;

use App\Models\KategoriEvent;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class KategoriEventController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriEvent::where('statusenabled', true)->get();
        return view('dashboard.kategori.index', compact('kategori'));
    }

    public function insert(Request $request)
    {
        try {
            KategoriEvent::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'nama' => $request->nama,
            ]);

            return redirect()->back()->with('success', 'Kategori event berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Kategori event gagal ditambahkan...\n' . $th->getMessage());
        }
    }

    public function update(Request $request, $uuid)
    {
        try {
            KategoriEvent::where('uuid', $uuid)->update([
                'nama' => $request->nama,
            ]);

            return redirect()->back()->with('success', 'Update item berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Update item gagal...\n' . $th->getMessage()));
        }
    }

    public function delete($uuid)
    {
        try {
            KategoriEvent::where('uuid', $uuid)->update([
                'statusenabled' => false,
            ]);

            return redirect()->back()->with('success', 'Hapus item berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Hapus item gagal...\n' . $th->getMessage()));
        }
    }
}

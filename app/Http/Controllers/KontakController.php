<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    //
    public function index()
    {
        $kontak = Kontak::where('statusenabled', true)->get();
        return view('dashboard.kontak.index', compact('kontak'));
    }

    public function delete($uuid)
    {
        try {
            Kontak::where('uuid', $uuid)->update([
                'statusenabled' => false,
            ]);

            return redirect()->back()->with('success', 'Hapus item berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Hapus item gagal...\n' . $th->getMessage()));
        }
    }
}

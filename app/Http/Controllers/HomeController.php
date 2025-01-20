<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{
    //
    public function index()
    {
        $ulasan = Ulasan::where('statusenabled', true)->get();
        return view('home.index', compact('ulasan'));
    }

    public function kontak()
    {
        return view('home.kontak');
    }

    public function kontak_post(Request $request)
    {
        // dd($request->all());

        try {

            Kontak::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'name' => $request->name,
                'subject' => $request->subject,
                'email' => $request->email,
                'no_wa' => $request->no_wa,
                'message' => $request->message,
            ]);

            return redirect()->back()->with('success', 'Berhasil mengirimkan pesan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Gagal mengirimkan pesan\n' . $th->getMessage());
        }
    }

    public function galeri()
    {
        $galeri = DB::table('galeri_m as ga')
        ->leftjoin('file_m as fl', 'ga.file_uuid', 'fl.uuid')
        ->select('ga.uuid', 'ga.statusenabled', 'fl.path')
        ->where('ga.statusenabled', true)->get();

        return view('home.galeri', compact('galeri'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function ulasan(Request $request)
    {
        try {

            Ulasan::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'nama' => $request->nama,
                'pekerjaan' => $request->pekerjaan,
                'ulasan' => $request->ulasan,
            ]);

            return redirect()->back()->with('success', 'Berhasil memberikan ulasan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Gagal memberikan ulasan\n' . $th->getMessage());
        }
    }
}

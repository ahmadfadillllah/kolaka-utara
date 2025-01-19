<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
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


}

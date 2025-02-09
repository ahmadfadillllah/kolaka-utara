<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TagsController extends Controller
{
    //
    public function index()
    {
        $tags = Tags::where('statusenabled', true)->get();
        return view('dashboard.tags.index', compact('tags'));
    }

    public function insert(Request $request)
    {
        try {
            Tags::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'nama' => $request->nama,
            ]);

            return redirect()->back()->with('success', 'Tags event berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Tags event gagal ditambahkan...\n' . $th->getMessage());
        }
    }

    public function update(Request $request, $uuid)
    {
        try {
            Tags::where('uuid', $uuid)->update([
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
            Tags::where('uuid', $uuid)->update([
                'statusenabled' => false,
            ]);

            return redirect()->back()->with('success', 'Hapus item berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Hapus item gagal...\n' . $th->getMessage()));
        }
    }
}

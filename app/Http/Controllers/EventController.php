<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\KategoriEvent;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class EventController extends Controller
{
    //
    public function index(Request $request)
    {
        $event = DB::table('event_m as ev')
        ->leftjoin('kategori_event_m as ka', 'ev.kategori_event_uuid', 'ka.uuid')
        ->select('ev.*', 'ka.nama as nama_kategori')
        ->where('ev.statusenabled', true);
        if(!empty($request->event)){
            $event = $event->where('ev.judul', 'LIKE', '%'.$request->event.'%');
        }
        $event = $event->get();

        return view('dashboard.event.index', compact('event'));
    }

    public function insert()
    {
        $kategori = KategoriEvent::where('statusenabled', true)->get();
        $tags = Tags::where('statusenabled', true)->get();
        return view('dashboard.event.insert', compact('kategori', 'tags'));
    }

    public function post(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,avi,mov|max:10240', // Maksimal 10MB
        ]);


        $tagsString = implode(',', $request->tags);

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

            Event::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'user_uuid' => Auth::user()->uuid,
                'kategori_event_uuid' => $request->kategori_event_uuid,
                'tags' => $tagsString,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'file_uuid' => $fileRecord->uuid,
            ]);


            return redirect()->route('event.index')->with('success','Event berhasil ditambahkan');

        } catch (\Throwable $th) {
            return redirect()->route('event.index')->with('info','Event gagal ditambahkan'. $th->getMessage());
        }
    }

    public function edit($uuid)
    {
        $kategori = KategoriEvent::where('statusenabled', true)->get();
        $tags = Tags::where('statusenabled', true)->get();

        $event = DB::table('event_m as ev')
        ->leftjoin('kategori_event_m as ka', 'ev.kategori_event_uuid', 'ka.uuid')
        ->leftjoin('file_m as fl', 'ev.file_uuid', 'fl.uuid')
        ->select('ev.*', 'ka.nama as nama_kategori', 'fl.path')

        ->where('ev.statusenabled', true)
        ->where('ev.uuid', $uuid)->first();

        // dd($event);

        return view('dashboard.event.edit', compact('event', 'kategori', 'tags'));
    }

    public function update(Request $request,$uuid)
    {
        // dd($request->all());
        $event = Event::where('uuid', $uuid)->first();
        // dd($event);

        // Mengubah string tags menjadi format yang benar
        $tagsString = implode(',', $request->tags);

        try {
            $fileRecord = null;

            // Jika ada file yang diupload, lakukan proses penyimpanan
            if ($request->hasFile('file')) {
                // Hapus file lama jika ada
                if ($event->file_uuid) {
                    $oldFile = File::find($event->file_uuid);
                    if ($oldFile) {
                        Storage::disk('public')->delete($oldFile->path);
                        $oldFile->delete();
                    }
                }

                // Menyimpan file baru
                $file = $request->file('file');
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

            // Update data event
            $event->update([
                'tags' => $tagsString,
                'judul' => $request->judul,
                'kategori_event_uuid' => $request->kategori_event_uuid,
                'deskripsi' => $request->deskripsi,
                'file_uuid' => $fileRecord ? $fileRecord->uuid : $event->file_uuid, // Jika tidak ada file baru, tetap pakai file lama
            ]);

            return redirect()->route('event.index')->with('success', 'Event berhasil diperbarui');
        } catch (\Throwable $th) {
            return redirect()->route('event.index')->with('error', 'Event gagal diperbarui. ' . $th->getMessage());
        }
    }

    public function delete($uuid)
    {
        try {
            Event::where('uuid', $uuid)->update([
                'statusenabled' => false,
            ]);

            return redirect()->back()->with('success', 'Hapus event berhasil');

        } catch (\Throwable $th) {
            return redirect()->back()->with('info', nl2br('Hapus event gagal...\n' . $th->getMessage()));
        }
    }

    public function done($uuid)
    {

        $event = Event::where('uuid', $uuid)->first();

        if($event->done == true){
            try {
                Event::where('uuid', $uuid)->update([
                    'done' => false,
                ]);

                return redirect()->back()->with('success', 'Update event berhasil');

            } catch (\Throwable $th) {
                return redirect()->back()->with('info', nl2br('Update event gagal...\n' . $th->getMessage()));
            }
        }else{
            try {
                Event::where('uuid', $uuid)->update([
                    'done' => true,
                ]);

                return redirect()->back()->with('success', 'Update event berhasil');

            } catch (\Throwable $th) {
                return redirect()->back()->with('info', nl2br('Update event gagal...\n' . $th->getMessage()));
            }
        }

    }
}

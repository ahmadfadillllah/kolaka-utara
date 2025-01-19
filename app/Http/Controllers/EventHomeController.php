<?php

namespace App\Http\Controllers;

use App\Models\FollowEvent;
use App\Models\KomentarEvent;
use App\Models\LihatEvent;
use App\Models\LikeEvent;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class EventHomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $tags = Tags::where('statusenabled', true)->get();
        $event = DB::table('event_m as ev')
        ->leftjoin('kategori_event_m as ka', 'ev.kategori_event_uuid', 'ka.uuid')
        ->leftjoin('file_m as fl', 'ev.file_uuid', 'fl.uuid')
        ->leftjoin('komentar_event_t as com', 'ev.uuid', '=', 'com.event_uuid')
        ->leftjoin('like_event_t as li', 'ev.uuid', '=', 'li.event_uuid')
        ->leftjoin('lihat_event_t as hat', 'ev.uuid', '=', 'hat.event_uuid')
        ->select(
            'ev.uuid',
            'ev.judul',
            'ev.deskripsi',
            'ev.created_at',
            'ev.statusenabled',
            'fl.path',
            'ka.nama as nama_kategori',
            DB::raw('COUNT(DISTINCT com.uuid) as jumlah_komentar'),
            DB::raw('COUNT(DISTINCT li.uuid) as jumlah_like'),
            DB::raw('COUNT(DISTINCT hat.uuid) as jumlah_lihat')
        )
        ->where('ev.statusenabled', true)
        ->groupBy(
            'ev.uuid', // Kolom yang dipilih dari ev
            'ev.judul',
            'ev.deskripsi',
            'ev.created_at',
            'ev.statusenabled',
            'fl.path',
            'ka.nama' // Kolom yang dipilih dari ka dan fl
        );
        if(!empty($request->event)){
            $event = $event->where('ev.judul', 'LIKE', '%'.$request->event.'%');
        }
        if(!empty($request->tags)){
            $event = $event->where('ev.tags', 'LIKE', '%'.$request->tags.'%');
        }
        if(!empty($request->kategori)){
            $event = $event->where('ka.nama', 'LIKE', '%'.$request->kategori.'%');
        }
        $event = $event->paginate(4);

        $kategori = DB::table('event_m as ev')
        ->leftJoin('kategori_event_m as ka', 'ev.kategori_event_uuid', 'ka.uuid')
        ->leftJoin('file_m as fl', 'ev.file_uuid', 'fl.uuid')
        ->select(
            'ka.nama as nama_kategori',
            DB::raw('COUNT(ev.uuid) as event_count')
        )
        ->where('ev.statusenabled', true)
        ->groupBy('ka.nama')
        ->get();


        $data = [
            'event' => $event,
            'tags' => $tags,
            'kategori' => $kategori,
        ];

        return view('home.event.index', compact('data'))->with([
            'event' => $event->appends($request->except('page'))
        ]);
    }

    public function show(Request $request,$uuid)
    {

        LihatEvent::create([
            'uuid' => (string) Uuid::uuid4()->toString(),
            'event_uuid' => $uuid,
            'ip_address' => $request->ip(),
        ]);

        $event = DB::table('event_m as ev')
        ->leftjoin('kategori_event_m as ka', 'ev.kategori_event_uuid', 'ka.uuid')
        ->leftjoin('users as us', 'ev.user_uuid', 'us.uuid')
        ->leftjoin('file_m as fl', 'ev.file_uuid', 'fl.uuid')
        ->select(
            'ev.*',
            'fl.path',
            'us.nama',
            'ka.nama as nama_kategori',
            )
        ->where('ev.uuid', $uuid)
        ->where('ev.statusenabled', true)->first();

        $tags = collect(explode(',', $event->tags));

        $komentar = DB::table('komentar_event_t as com')
        ->leftjoin('event_m as ev', 'com.event_uuid', 'ev.uuid')
        ->leftjoin('users as us', 'com.user_uuid', 'us.uuid')
        ->select(
            'com.komentar',
            'us.nama',
            'com.created_at',
        )
        ->where('com.event_uuid', $uuid)
        ->get();

        $feedback = DB::table('feedback_event_t as fee')
        ->leftjoin('event_m as ev', 'fee.event_uuid', 'ev.uuid')
        ->leftjoin('users as us', 'fee.user_uuid', 'us.uuid')
        ->select(
            'fee.rating',
            'us.nama',
            'fee.created_at',
        )
        ->where('fee.event_uuid', $uuid)
        ->get();

        $follow = DB::table('follow_event_t as fol')
        ->leftjoin('event_m as ev', 'fol.event_uuid', 'ev.uuid')
        ->select(
            'fol.ip_address'
        )
        ->where('fol.event_uuid', $uuid)
        ->get();

        $like = DB::table('like_event_t as like')
        ->leftjoin('event_m as ev', 'like.event_uuid', 'ev.uuid')
        ->select(
            'like.ip_address'
        )
        ->where('like.event_uuid', $uuid)
        ->get();

        $lihat = DB::table('lihat_event_t as lihat')
        ->leftjoin('event_m as ev', 'lihat.event_uuid', 'ev.uuid')
        ->select(
            'lihat.ip_address'
        )
        ->where('lihat.event_uuid', $uuid)
        ->get();

        $data = [
            'event' => $event,
            'tags' => $tags,
            'komentar' => $komentar,
            'feedback' => $feedback,
            'follow' => $follow,
            'like' => $like,
            'lihat' => $lihat,
        ];

        return view('home.event.show', compact('data'));
    }

    public function comment(Request $request)
    {

        // dd($request->all());
        try {
            KomentarEvent::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'event_uuid' => $request->event_uuid,
                'user_uuid' => Auth::user()->uuid,
                'komentar' => $request->komentar,
            ]);

            return redirect()->back()->with('success', 'Berhasil memberikan komentar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Gagal memberikan komentar...\n' . $th->getMessage());
        }
    }

    public function follow(Request $request, $uuid)
    {

        // dd($request->all());
        try {
            FollowEvent::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'event_uuid' => $uuid,
                'ip_address' => $request->ip(),
            ]);

            return redirect()->back()->with('success', 'Berhasil follow event');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Gagal follow event...\n' . $th->getMessage());
        }
    }

    public function like(Request $request, $uuid)
    {

        // dd($request->all());
        try {
            LikeEvent::create([
                'uuid' => (string) Uuid::uuid4()->toString(),
                'event_uuid' => $uuid,
                'ip_address' => $request->ip(),
            ]);

            return redirect()->back()->with('success', 'Berhasil sukai event');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Gagal sukai event...\n' . $th->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\FollowEvent;
use App\Models\LihatEvent;
use App\Models\LikeEvent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $lihat = LihatEvent::all();
        $like = LikeEvent::all();
        $follow = FollowEvent::all();

        $cpuUsage = exec("/usr/bin/top -bn1 | /bin/grep 'Cpu(s)' | /bin/sed 's/.*, *\([0-9.]*\)%* id.*/\1/' | /usr/bin/awk '{print 100 - $1 \"%\"}'", $output, $status);
        $memoryUsage = exec("/usr/bin/free | /bin/grep Mem | /usr/bin/awk '{print $3/$2 * 100.0 \"%\"}'", $output, $status);
        $diskUsage = exec("/bin/df -h | /bin/grep /dev/sda1 | /bin/awk '{print $5}'", $output, $status);


        $data = [
            'lihat' => $lihat,
            'like' => $like,
            'follow' => $follow,
            'cpuUsage' => $cpuUsage,
            'memoryUsage' => $memoryUsage,
            'diskUsage' => $diskUsage,
        ];

        return view('dashboard.index', compact('data'));
    }
}

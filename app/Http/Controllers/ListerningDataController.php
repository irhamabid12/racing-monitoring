<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Events\ListenDataEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class ListerningDataController extends Controller
{

    public function index(Request $request)
    {
        return view('index');
    }
    public function pushdata(Request $request)
    {   
        DB::table('data_monitoring')->insert([
            'speed' => $request->speed ?? null,
            'cadence' => $request->cadence ?? null,
            'heartbeat' => $request->heartbeat ?? null,
            'latitude' => $request->latitude ?? null,
            'longitude' => $request->longitude ?? null,
            'created_at' => Carbon::now()
        ]);

        $data = [
            'speed' => $request->speed ?? null,
            'cadence' => $request->cadence ?? null,
            'heartbeat' => $request->heartbeat ?? null,
            'latitude' => $request->latitude ?? null,
            'longitude' => $request->longitude ?? null,
            'created_at' => Carbon::now()
        ];

        return event(new ListenDataEvent($data));
    }
}

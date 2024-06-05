<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;

class MonitoringController extends Controller
{
    public function suhu()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('suhu', ['monitoring' => $monitoring]);
    }

    public function ph()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('ph', ['monitoring' => $monitoring]);
    }

    public function tds()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('tds', ['monitoring' => $monitoring]);
    }

    public function pompa()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('pompa', ['monitoring' => $monitoring]);
    }

    public function simpan () {
        Monitoring::where ('id', 1)->update ([
            'ph' => request ('ph'),
            'suhu' => request ('suhu'),
            'tds' => request ('tds'),
            'pompa' => request ('pompa'),
        ]);
    }
}

/**
 * Hidroponik
 * -
 */

<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\View\View;

class MonitoringController extends Controller
{
    public function ph(): View
    {
        $monitoring = Monitoring::select('*')->get();
        return view('ph', ['monitoring' => $monitoring]);
    }

    public function kelembaban(): View
    {
        $monitoring = Monitoring::select('*')->get();
        return view('kelembaban', ['monitoring' => $monitoring]);
    }

    public function temperatur(): View
    {
        $monitoring = Monitoring::select('*')->get();
        return view('temperatur', ['monitoring' => $monitoring]);
    }


    public function nitrogen(): View
    {
        $monitoring = Monitoring::select('*')->get();
        return view('nitrogen', ['monitoring' => $monitoring]);
    }

    public function fosfor(): View
    {
        $monitoring = Monitoring::select('*')->get();
        return view('fosfor', ['monitoring' => $monitoring]);
    }

    public function kalium(): View
    {
        $monitoring = Monitoring::select('*')->get();
        return view('kalium', ['monitoring' => $monitoring]);
    }

    public function simpan(): void
    {
        Monitoring::where('id', 1)->update([
            'ph' => request('ph'),
            'kelembaban' => request('kelembaban'),
            'temperatur' => request('temperatur'),
            'nitrogen' => request('nitrogen'),
            'fosfor' => request('fosfor'),
            'kalium' => request('kalium'),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Http\Requests\StoreMonitoringRequest;
use App\Http\Requests\UpdateMonitoringRequest;
use GuzzleHttp\Psr7\Request;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonitoringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitoring $monitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monitoring $monitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonitoringRequest $request, Monitoring $monitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitoring $monitoring)
    {
        //
    }

    public function pH()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('read-ph', ['monitoring' => $monitoring]);
    }

    public function kelembabanTanah()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('read-kelembaban-tanah', ['monitoring' => $monitoring]);
    }

    public function temperaturTanah()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('read-temperatur-tanah', ['monitoring' => $monitoring]);
    }


    public function kadarNutrisiTanah()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('read-kadar-nutrisi-tanah', ['monitoring' => $monitoring]);
    }

    public function simpan () {
        Monitoring::where('id', 1)->update ([
            'ph' => request ('ph'),
            'kelembaban_tanah' => request ('kelembaban-tanah'),
            'temperatur_tanah' => request ('temperatur-tanah'),
            'kadar_nutrisi_tanah' => request ('kadar-nutrisi-tanah'),
        ]);
    }
}

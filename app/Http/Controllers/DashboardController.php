<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Control;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $controls = Control::latest();

        if(request('filter')) {
            $controls->where('created_at', 'like', '%' . request('filter') . '%');
        } else {
            $controls->where('created_at', 'like', '%' . Carbon::now()->format('Y-m-d') . '%');
        }

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'today' => Carbon::now()->format('Y-m-d'),
            'controls' => $controls->get(),
        ]);
    }
}

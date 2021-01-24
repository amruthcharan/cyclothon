<?php

namespace App\Http\Controllers\Admin;

use App\Cyclothon;

class HomeController
{
    public function index()
    {
        $cyclthons = Cyclothon::all();
        $total = $cyclthons->count();
        $paid = $cyclthons->where('status','paid')->count();
        $cycles = $cyclthons->where('cycle_type','need cycle')->count();
        $amount = $cyclthons->where('status', 'paid')->sum('price');
        $small = $cyclthons->where('tshirt','small')->count();
        $medium = $cyclthons->where('tshirt','medium')->count();
        $large = $cyclthons->where('tshirt','large')->count();
        $xl = $cyclthons->where('tshirt','xl')->count();
        return view('home', compact(['total', 'paid', 'cycles', 'amount', 'small', 'medium', 'large', 'xl']));
    }
}

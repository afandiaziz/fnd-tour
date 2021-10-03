<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $travel_package = TravelPackage::where('slug', $slug)->with(['galleries'])->firstOrFail();
        return view('pages.detail', ['item' => $travel_package]);
    }
}

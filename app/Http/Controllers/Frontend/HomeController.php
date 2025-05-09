<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mountain;

class HomeController extends Controller
{
    public function index()
    {
        // fetch only active mountains
        $mountains = Mountain::where('status', 1)->get();
        return view('Frontend.front.home', compact('mountains'));
    }
}

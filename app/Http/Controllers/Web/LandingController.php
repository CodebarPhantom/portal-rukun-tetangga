<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\MasterController;
use App\Models\LocationCategory;

class LandingController extends MasterController
{
    public function index()
    {
        $categories = LocationCategory::all();
        return view('welcome', compact('categories'));
    }
}

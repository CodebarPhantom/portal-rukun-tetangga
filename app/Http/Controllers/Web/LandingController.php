<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\MasterController;
use App\Models\LocationCategory;
use App\Models\Location;

class LandingController extends MasterController
{
    public function index()
    {
        $categories = LocationCategory::all();
        return view('welcome', compact('categories'));
    }

    public function filter($categoryId)
    {
        // Get category by id
        $category = LocationCategory::findOrFail($categoryId);

        // Get locations filtered by category
        $locations = Location::where('location_category_id', $categoryId)->get();

        // Return view dengan data yang sudah difilter
        return view('filtered', [
            'category' => $category,
            'locations' => $locations,
        ]);
    }
}

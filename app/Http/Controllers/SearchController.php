<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Import the Project model

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Search for projects (or any model you want)
        $results = Project::where('title', 'LIKE', "%{$query}%")
                          ->orWhere('description', 'LIKE', "%{$query}%")
                          ->get();

        return view('search_results', compact('results', 'query'));
    }
}

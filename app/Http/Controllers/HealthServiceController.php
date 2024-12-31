<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthService;

class HealthServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        $healthServices = HealthService::when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', "%{$query}%")
                         ->orWhere('category', 'like', "%{$query}%")
                         ->orWhere('location', 'like', "%{$query}%");
        })->get();

        return view('health-services.index', compact('healthServices', 'query'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StartpageController extends Controller
{
    public function index()
    {
        return inertia('welcome', [
            'categories' => Category::query()->orderBy('sorting', 'desc')->withCount('elements')->get()
        ]);
    }
}

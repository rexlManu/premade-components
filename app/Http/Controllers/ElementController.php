<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function show(Element $element)
    {
        return inertia("elements/{$element->component}", compact('element'));
    }
}

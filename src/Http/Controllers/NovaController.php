<?php

namespace Salt\Nova\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Inertia\Inertia;

class NovaController extends Controller
{
    public function index()
    {
        // data
        return Inertia::render('Home', []);
    }
}

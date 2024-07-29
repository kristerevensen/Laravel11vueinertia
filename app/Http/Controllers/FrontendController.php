<?php

namespace App\Http\Controllers;

use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Inertia\Inertia;

class FrontendController extends Controller
{
    //
    public function Index()
    {
        return Inertia::render('Frontend/Home',[
            'title' => "Home Page"
        ]);
    }

    public function About()
    {
        return Inertia::render('Frontend/About',[
           'title' => "About us page"
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = config('app.name');
        $description = "Simple Social Network where users can share and see other users posts";
        return view('pages.index', compact('title', 'description'));
    }

    public function about() {
        $title = "About ".config('app.name');
        $description = "App for users to share and view posts built by Nonso on <strong>Laravel</strong> with so much love <i class='fa fa-heart'></i>.";
        $version = '1.0';
        return view('pages.about', compact('title', 'description', 'version'));
    }
}

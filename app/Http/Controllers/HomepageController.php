<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('frontend.v_layouts.index', [
            'judul' => 'Home Page',
        ]);
    }
}

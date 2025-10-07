<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // Method untuk menampilkan landing page
    public function index()
    {
        // Bisa kirim data ke blade jika perlu
        $data = [
            'title' => 'Welcome to Landing Page',
            'subtitle' => 'This is the CHD landing page',
        ];

        return view('front-end.index', $data);
    }
}

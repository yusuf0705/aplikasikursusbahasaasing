<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function landingpage()
    // {
    //     return view('landingpage');
    // }

    // public function dashboard()
    // {
    //     return view('dashboard');  // Pastikan file dashboard.blade.php ada di dalam folder resources/views
    // }
    

    public function dashboardadmin()
    {
        return view('dashboardadmin');
    }
}


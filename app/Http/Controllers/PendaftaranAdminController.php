<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranAdminController extends Controller
{
        public function index()
        {
            return view('pendaftaranadmin');
        }
}

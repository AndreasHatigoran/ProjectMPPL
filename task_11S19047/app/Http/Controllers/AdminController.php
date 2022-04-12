<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Show all pelanggaran
    public function listpelanggaran()
    {
        return view('administrator.listpelanggaran');
    }

    public function akun()
    {
        return view('administrator.listakun');
    }
}

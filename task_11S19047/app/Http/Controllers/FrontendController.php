<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $soal = Soal::all();
        // return view('LabCoding.Admin.Soal.index', compact('soal'));
        return view('users.indexMain', compact('soal')); //kevinUpdate
    }
}

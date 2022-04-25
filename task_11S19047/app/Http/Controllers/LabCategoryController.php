<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Category;
use Illuminate\Http\Request;

class LabCategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('LabCoding.lab.category', compact('category'));
    }

    public function daftarsoal($language)
    {
        $category = Category::where('language', $language)->first();
        $daftarsoal = Soal::where('category_id', $category->id)->get();
        // dd($daftarsoal);
        return view('LabCoding.lab.exercise.index', compact('daftarsoal', 'category'));
    }

    public function lab($id)
    {
        $soal = Soal::find($id);
        return view('LabCoding.lab.exercise.lab', compact('soal'));
    }
    public function cek(Request $request)
    {
        $data = Soal::find($request->id_soal);
        if ($data->answer == $request->jawaban) {
            session()->flash('success', 'true');
        } else {
            session()->flash('false', 'false');
        }

        return back();
    }
}

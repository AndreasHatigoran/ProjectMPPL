<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('LabCoding.Admin.Category.index', compact('category'));
    }

    public function add()
    {
        return view('LabCoding.Admin.Category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->language = $request->input('language');
        $category->save();
        return redirect('categories')->with('status', "Category Added Successfully");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('LabCoding.Admin.Category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category', $filename);
            $category->image = $filename;
        }

        $category->language = $request->input('language');
        $category->update();
        return redirect('categories')->with('status', "Category Updated Seccesfully");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->image) {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with('status', "Category Deleted Succesfully");
    }
}
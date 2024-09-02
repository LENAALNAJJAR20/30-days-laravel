<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
//        return view('posts.create', compact('category'));
        $category = Category::all();
        return view('category', compact('category'));

    }
    public function create()
    {
        $category = Category::all();
        return view('categories.create', compact('category'));
    }


    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
        ]);
        Category::create($request->all());

        return redirect('category');
    }
    public function edit(Category $category)
    {
//        $category = Category::all();
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',

        ]);

//        $category = Category::find($id);
        $category->update($request->all());
        return redirect('category');
    }

    public function destroy(Category $category)
    {
//        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('category');
    }
}

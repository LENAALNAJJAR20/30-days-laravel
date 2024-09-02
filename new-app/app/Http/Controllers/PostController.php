<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

//        return view('posts.create', compact('category'));
        $posts = Blog::all();
        return view('home', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('posts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'auth' => 'required',
            'description' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
        }
        Blog::create($request->all());

        return redirect('/');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Blog::findOrFail($id);
        return view('home', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        $category = Category::all();
        return view('posts.edit', compact('post','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'auth' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post=Blog::find($id);
        $post->update($request->all());
        return redirect('/');
//        return redirect()->route('')
//            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
        $post->delete();

        return redirect('/');
    }
}

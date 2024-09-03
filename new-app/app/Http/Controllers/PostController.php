<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

        public function index(Request $request)
    {
        $categoryId = $request->input('category');
        $categories = Category::all();
        if ($categoryId) {
            $posts = Blog::where('category_id', $categoryId)->with('category')->get();
        } else {
            $posts = Blog::with('category')->get();
//            $posts = Blog::with('category')->paginate(3);
        }
        return view('home', compact('posts','categories'));

    }


    public function create()
    {
        $category = Category::all();
        return view('posts.create', compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//        $request->validate([
//
//            'auth' => 'required',
//            'description' => 'required|max:255',
//            'category_id' => 'required|exists:categories,id',
//            'price' => 'required',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
////        if ($request->hasFile('image')) {
////            $image = $request->file('image');
////            $path = $image->store('image', 'public');
////        }
//
//        if ($request->hasFile('image')) {
//            $file = $request->file('image');
//            $fileName = time() . '.' . $file->getClientOriginalExtension();
//            $filePath = $file->storeAs('images', $fileName, 'public');
//
//            // If using a model to store image information
//            Blog::create($request->all());
//
//        }
//
//
////        Blog::create($request->all());
//
//        return redirect('/');
//    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'auth' => 'required',
            'description' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data['image'] = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('image', 'public');
        }


        // Create a new Blog record, including the image path
        Blog::create($data);


        // Create a new Blog record, including the image path
        Blog::create($data);
        return redirect('/');
    }


    public function show($id)
    {
        $post = Blog::findOrFail($id);
        return view('home', compact('post'));
    }

    public function edit($id)
    {
        $post = Blog::findOrFail($id);
        $category = Category::all();
        return view('posts.edit', compact('post', 'category'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $data = $request->validate([
            'auth' => 'required',
            'description' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        // Find the blog post
        $post = Blog::find($id);

        // Check if a new image file has been uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Store the new image and set the path in $data
            $data['image'] = $file->store('image', 'public');
        } else {
            // If no new image is uploaded, keep the existing image
            $data['image'] = $post->image;
        }
        $post->update($data);

        $post = Blog::find($id);
        $post->update($request->all());

        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
        $post->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class PostController extends Controller
{

    public function index(Request $request)
    {
        $categorySlug = $request->input('category');
        $categories = Category::all();

        if ($categorySlug) {
            $category = Category::where('slug', $categorySlug)->first();

            if ($category) {
                $posts = Blog::where('category_id', $category->id)->with('category')->paginate(3);
            } else {
                $posts = Blog::with('category')->paginate(3);
            }
        } else {
            $posts = Blog::with('category')->paginate(3);
        }
        return view('home', compact('posts', 'categories'));
    }

    public function create()
    {
        $user = User::all();
        $category = Category::all();
        return view('posts.create', compact('category','user'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'description' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data['image'] = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('image', 'public');
        }
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
                 //for GATE
//       Gate::authorize('edit-post', $post);
             // for policies
        Gate::authorize('edit', $post);
        $category = Category::all();
        return view('posts.edit', compact('post', 'category'));
    }


    public function update(Request $request, $id)
    {
        // Validate the request
        $data = $request->validate([
            'description' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the blog post
        $post = Blog::find($id);
        $data['image'] = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = $file->store('image', 'public');
        }
        $post->update($data);
        return redirect('/');
    }

    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
                //for GATE
        Gate::authorize('delete-post', $post);
        $post->delete();
        return redirect('/');
    }
}

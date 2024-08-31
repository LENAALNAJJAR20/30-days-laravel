<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('home', [
            'blogs' => Blog::all()
        ]);
    }

    public function aboutdetails($id)
    {
        $blog = Blog::find($id);
        //dd($blog);
        return view('blogesdetails', ['blog' => $blog]);
    }

//    public function show()
//    {
//        $name = 'Jane';
//        $title = 'Blog title';
//        return view('db', compact('name','title'));
//    }
}


<?php

namespace App\Http\Controllers;


use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
//    public function create()
//    {
//        $author = Author::all();
//        return view('authors.create', compact('author'));
//    }
//
//    public function store(Request $request)
//    {
//        $request->validate([
//
//            'name' => 'required',
//            'email' => 'required',
//            'bio' => 'required',
//        ]);
//        Author::create($request->all());
//
//        return redirect('author');
//    }
//
//
//    public function edit(Author $author)
//    {
//
//        return view('authors.edit', compact('author'));
//    }
//
//    public function update(Request $request, Author $author)
//    {
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'bio' => 'required',
//
//        ]);
//
//        $author->update($request->all());
//        return redirect('author');
//    }

}

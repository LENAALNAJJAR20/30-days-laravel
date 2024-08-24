<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Arr;
use App\Models\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // dd(\App\Models\User::all());
    return view('home',[
        'blogs'=>Blog::all()
        ]);
});

Route::get('/blogesdetails/{id}', function ($id) {

    $blog = Blog::find($id);
    //dd($blog);
    return view('blogesdetails', ['blog' => $blog]);
});

Route::get('/about', function () {

    return view('about',[
        'blogdetails'=>[
            [
                'description'=>'Smart technology refers to a range of advanced systems and devices that utilize digital connectivity, sensors, and artificial intelligence to improve efficiency, enhance functionality, and offer greater convenience. These technologies are characterized by their ability to collect and analyze data, make autonomous decisions, and adapt to user preferences or environmental changes.',
                'image' =>'image81.jpg',
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

<?php

use Illuminate\Support\Facades\Route;

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
        'blogs'=>[
            [
                'id'=>1,
                'image' =>'image51.jpg',
                'title'=>'Smart Watch',
                'auth'=>'lena alnajjar',
                'description'=>'When describing ,Smart Watch its helpful to consider various aspects that define their characteristics and performance.',
                'price'=>'1220'



            ],
            [
                'id'=>2,
                'image' =>'image6.jpg',
                'title'=>'Head Phone',
                'auth'=>'jak elmans',
                'description'=>'When describing headphones, its helpful to consider various aspects that define their characteristics and performance.',
                'price'=>'3220'
            ],
            [
                'id'=>3,
                'image' =>'image7.jpg',
                'title'=>'Laptop HP',
                'auth'=>'jon black',
                'description'=>'Describing an HP laptop involves detailing several key aspects to give a comprehensive overview of its features and performance.',
                'price'=>'4220'

            ]


        ]
    ]);
});

Route::get('/blogesdetails/{id}', function ($id) {
    $blogs = [
        [
            'id'=>1,
            'image' =>'image5.jpg',
            'title'=>'Smart Watch',
            'auth'=>'lena alnajjar',
            'description'=>'Many smartwatches come with sensors to monitor various health metrics such as heart rate, step count, calorie burn, sleep patterns, and even blood oxygen levels. Some models also offer advanced features like ECG electrocardiogram or blood pressure monitoring..'
        ],
        [

            'id'=>2,
            'image' =>'image61.jpg',
            'title'=>'Head Phone',
            'auth'=>'jak elmans',
            'description'=>'Headphones are a popular audio device designed to provide personal listening experiences. They consist of two small speakers, or drivers, that are worn on or over the ears, allowing users to enjoy music, podcasts, or other audio content without disturbing others. Here’s a more detailed breakdown of their features and types'
        ],
        [
            'id'=>3,
            'image' =>'image7.jpg',
            'title'=>'Laptop HP',
            'auth'=>'jon black',
            'description'=>'A laptop is a portable personal computer designed for flexibility and mobility, allowing users to perform computing tasks on the go. It combines the functionality of a desktop computer into a compact, all-in-one device with an integrated screen, keyboard, and trackpad or touchpad. Here’s a detailed description of a laptop’s features and components:'
        ]
    ];

    $blog = \Illuminate\Support\Arr::first( $blogs , fn($blog) => $blog['id'] == $id);
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

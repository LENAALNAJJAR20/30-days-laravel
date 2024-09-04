<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/blogesdetails/{id}', [BlogController::class, 'aboutdetails']);

Route::get('/about', function () {

    return view('about', [
        'blogdetails' => [
            [
                'description' => 'Smart technology refers to a range of advanced systems and devices that utilize digital connectivity, sensors, and artificial intelligence to improve efficiency, enhance functionality, and offer greater convenience. These technologies are characterized by their ability to collect and analyze data, make autonomous decisions, and adapt to user preferences or environmental changes.',
                'image' => 'image81.jpg',
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/db', function () {
    return view('db');
});

Route::resource('posts', PostController::class);


Route::get('category',[CategoryController::class, 'index'])->name('category.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


//Route::get('categories/create', [\App\Http\Controllers\AuthorController::class, 'create'])->name('author.create');
//Route::post('author', [AuthorController::class, 'store'])->name('author.store');
//Route::get('authors/{author}/edit', [AuthorController::class, 'edit'])->name('author.edit');
//Route::put('authors/{author}', [AuthorController::class, 'update'])->name('author.update');

//Route::get('test', function () {
//    $blog=DB::table('blogs')->get();
//    return view('test', [
//        'test'=>$blog
//    ]);
//});

//Route::get('/db', [BlogController::class, 'show']);

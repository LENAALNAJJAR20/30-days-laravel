<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//use Illuminate\Support\Arr;

class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'blogs';
    protected $fillable = ['image', 'category_id','title', 'auth', 'description', 'price'];
}

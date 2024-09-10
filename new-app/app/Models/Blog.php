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
    protected $fillable = ['image', 'category_id','user_id','status','title', 'auth', 'description', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

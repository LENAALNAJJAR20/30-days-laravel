<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $fillable = ['name','user_id','slug'];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    }

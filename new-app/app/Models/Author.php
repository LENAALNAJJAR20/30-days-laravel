<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User
use Illuminate\Notifications\Notifiable;

class Author extends Authenticatable
{
    use HasFactory , Notifiable;
    protected $fillable = ['name', 'email', 'password'];
//    protected $guarded = [];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'=>'hashed'
    ];
}

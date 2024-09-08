<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  Illuminate\Contracts\Auth\Authenticatable;
return new class extends Migration
{


    public function up(): void{
        Schema::create('authors', function (Blueprint $table)
        {
            $table->id();$table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
    });
    }




    public function down(): void{Schema::dropIfExists('authors');}
};

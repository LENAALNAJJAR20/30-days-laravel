<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {


    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
//            $table->unsignedBigInteger('category_id');
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
//            $table->string('auth');
            $table->foreignIdFor(\App\Models\Author::class)->constrained()->cascadeOnDelete();
            $table->string('description');
            $table->decimal('price');
            $table->string('image')->nullable();
            $table->integer('status')->default(1); // 1 avaible; 0 not avaible
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

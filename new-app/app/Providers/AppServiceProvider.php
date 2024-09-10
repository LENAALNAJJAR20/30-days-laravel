<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // for GATE
//        Gate::define('edit-post', function (User $user, $post) {
//            return $post->user_id == Auth::id();
//        });

        Gate::define('delete-post', function (User $user, $post) {
            return $post->user_id == Auth::id();
        });

        Gate::define('edit-category', function (User $user, Category $category) {
            return $category->user_id == Auth::id();
        });

        Gate::define('delete-category', function (User $user, Category $category) {
            return $category->user_id == Auth::id();
        });
    }
}

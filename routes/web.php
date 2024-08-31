<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Ahmaji Setiawan',
        'title' => 'About'
    ]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))
            ->latest()
            ->paginate(9)->withQueryString(),
        ]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('post', [
        'title' => count($user->posts) . ' Artikel Dari ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => 'Artikel in : ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

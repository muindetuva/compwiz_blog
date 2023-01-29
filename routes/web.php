<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome', [
        'posts' => Post::withoutGlobalScope('user')->take(3)->get()
    ]);
});

Route::get('/posts', function () {

    return view('posts.index', [
        'posts' => Post::withoutGlobalScope('user')->get()
    ]);
});

Route::get('/posts/{post}', function ($post) {
    return view('posts.show', [
        'post' => Post::withoutGlobalScope('user')->find($post)
    ]);
});

Route::get('/register', function () {

    return view('users.create');
});

Route::post('/register', function () {
    // Validate the data
    $attributes = Request::validate([
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required'],
    ]);

    // Create the user
    $user = User::create($attributes);

    // Log in the user
    auth()->login($user);

    return redirect('/admin');
});

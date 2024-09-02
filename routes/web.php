<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\AlpineDashboard;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Dashboard;
use App\Livewire\PostCreate;
use App\Livewire\PostEditQuill;
use App\Livewire\PostQuill;
use App\Livewire\TesAlpine;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/posts/create', PostCreate::class)->name('posts.create');
Route::get('/alpine', TesAlpine::class)->name('alpine');
Route::get('/alpineDashboard', AlpineDashboard::class)->name('alpine.dashboard');
Route::get('/posts/create/quill', PostQuill::class)->name('posts.quill');
Route::get('/posts/{id}/edit', PostEditQuill::class)->name('posts.edit.quill');

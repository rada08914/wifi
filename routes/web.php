<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('/',[
    App\Http\Controllers\UserController::class,
    'index'
])->name('home');

route::get('/signup',[
    App\Http\Controllers\UserController::class,
    'signup'
])->name('signup');

route::post('/create/save',[
    App\Http\Controllers\UserController::class,
    'createsave'
])->name('create.save');
route::get('/login',[
    App\Http\Controllers\UserController::class,
    'login'
])->name('login');
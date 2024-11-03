<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
class frontendcontroller extends Controller
{
    public function index(){
        return Inertia::render('front/index', [
            'canLogin' => Route::has('login'),
           
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);

    }

    public function contact(){
        return inertia::render('front/contact');
    }
}

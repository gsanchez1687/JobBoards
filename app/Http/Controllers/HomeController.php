<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return Inertia::render('home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}

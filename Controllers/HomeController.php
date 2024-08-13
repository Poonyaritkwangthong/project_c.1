<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $cars = Car::take(5)->get();
        return view('/home',compact('cars'));
    }
}

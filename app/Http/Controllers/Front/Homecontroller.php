<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function ugc()
    {
        return view('front.ugc');
    }
}

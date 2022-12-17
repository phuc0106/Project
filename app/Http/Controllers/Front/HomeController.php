<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show view homepage
     */
    public function index () {

    }

    /**
     * Show view contact
     */
    public function contact () {
        return view('front.contact');

    }
}

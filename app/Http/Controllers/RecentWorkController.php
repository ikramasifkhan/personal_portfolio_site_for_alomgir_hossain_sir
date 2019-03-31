<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecentWorkController extends Controller
{
    public function index(){
        return view('front-end.work.work');
    }
}

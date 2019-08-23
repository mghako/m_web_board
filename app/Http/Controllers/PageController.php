<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $boards = \App\Board::latest()->get();
        return view('welcome', compact('boards'));
    }
}

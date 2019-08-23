<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $boards = \App\Board::all();
        return view('welcome', compact('boards'));
    }
}

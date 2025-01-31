<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symbol;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        $symbols = Symbol::all();
        return view('home', compact('symbols'));
    }
}

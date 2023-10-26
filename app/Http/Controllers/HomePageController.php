<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index (){
        $categories = Category::orderBy('id', 'asc')->get();

        return view('index')
            ->with('categories', $categories);
    }
}

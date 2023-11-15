<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'asc')->with('subcategories')->get();
        $aboutUs = AboutUs::all();
        return view('about', ['title' => 'Մեր մասին'])
            ->with(['aboutUs' => $aboutUs, 'categories' => $categories]);
    }
}

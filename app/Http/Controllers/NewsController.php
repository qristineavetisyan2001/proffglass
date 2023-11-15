<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->with('subcategories')->get();
        $news = News::all();
        return view('news', ['title' => 'ՆՈՐՈՒԹՅՈՒՆՆԵՐ', 'categories' => $categories])
            ->with('news', $news);
    }

    public function show($id)
    {
        $categories = Category::orderBy('id', 'asc')->with('subcategories')->get();
        $new = News::findOrFail($id);
        $news = News::where('id', '!=', $id)->get();
        return view('new', [
            'categories' => $categories,
            'title' => 'ՆՈՐՈՒԹՅՈՒՆՆԵՐ',
            'subtitle' => $new->title,
            'new' => $new,
            'news' => $news
        ]);

    }
}

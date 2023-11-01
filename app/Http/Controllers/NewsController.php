<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news', ['title' => 'ՆՈՐՈՒԹՅՈՒՆՆԵՐ'])
            ->with('news', $news);
    }

    public function show($id)
    {
        $new = News::findOrFail($id);
        $news = News::all();
        return view('new', [
            'title' => 'ՆՈՐՈՒԹՅՈՒՆՆԵՐ',
            'subtitle' => $new->title,
            'new' => $new,
            'news' => $news
        ]);

    }
}

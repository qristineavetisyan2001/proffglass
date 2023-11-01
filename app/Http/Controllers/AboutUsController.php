<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::all();
        return view('about', ['title' => 'ՆՈՐՈՒԹՅՈՒՆՆԵՐ', 'subtitle' => 'Գլխավոր > Արտադրանք'])
            ->with('aboutUs', $aboutUs);
    }
}

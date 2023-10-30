<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($id){
        $category = Category::whereHas('subcategories', function ($querry) use($id){
            $querry->where('id', $id);
        })->firstOrFail();
        $subcategory = Subcategory::where('id', $id)
        ->with('products')
            ->orderBy('id', 'asc')
            ->firstOrFail();
        $products = Product::where('subcategory_id', $id)->get();

        return view('products', ['products' => $products, 'title' => $category->title, 'subtitle' => $category->title.' > '.$subcategory->title]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($id){
        $categories = Category::orderBy('id', 'asc')->with('subcategories')->get();
        $category = Category::whereHas('subcategories', function ($querry) use($id){
            $querry->where('id', $id);
        })->firstOrFail();
        $subcategory = Subcategory::where('id', $id)
        ->with('products')
            ->orderBy('id', 'asc')
            ->firstOrFail();
        $products = Product::where('subcategory_id', $id)->paginate(8);

        return view('products', ['products' => $products, 'title' => 'Գլխավոր > '.$category->title. ' > '. $subcategory->title, 'categories' => $categories]);

    }

    public function subcategories(Request $request)
    {
        $subcategories = Subcategory::all();
        $options = $subcategories->pluck('title', 'id');
        return response()->json($options);
    }
}

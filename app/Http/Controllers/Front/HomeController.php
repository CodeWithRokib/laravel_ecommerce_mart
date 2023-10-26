<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.home.home', [
            'products' => Product::where('status', 1)->get(),
            'desproducts' => Product::where('status', 1)->orderBy('id', 'desc')->get(),
            'company' => Company::first(),
            'blogs' => Blog::where('status', 1)->get(),
        ]);
    }

    public function show(string $id)
    {
        return view('front.product.view', [
            'product' => Product::find($id),
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $products = Product::where('name', 'like', '%' . $search . '%')->get();
        return view('front.product.search', [
            'products' => $products,
            'categories' => Category::where('status', 1)->get(),
            'subcategories' => SubCategory::where('status', 1)->get(),
            'subSubcategories' => SubSubCategory::where('status', 1)->get(),
        ]);
    }

    public function subCategoryProduct(string $id)
    {
        return view('front.product.search', [
            'products' => Product::where('sub_category_id', $id)->get(),
            'categories' => Category::where('status', 1)->get(),
            'subcategories' => SubCategory::where('status', 1)->get(),
            'subSubcategories' => SubSubCategory::where('status', 1)->get(),
        ]);
    }

    public function categoryProduct(string $id)
    {
        return view('front.product.search', [
            'products' => Product::where('category_id', $id)->get(),
            'categories' => Category::where('status', 1)->get(),
            'subcategories' => SubCategory::where('status', 1)->get(),
            'subSubcategories' => SubSubCategory::where('status', 1)->get(),
        ]);
    }

}

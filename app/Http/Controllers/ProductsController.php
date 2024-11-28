<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Product $products)
    {
        $products = Product::with('productsCategories')->orderBy('created_at', 'DESC');

        // if (request()->has('search')) {
        //     $searchTerm = request()->get('search', '');

        //     $accounts = $accounts->where(function ($query) use ($searchTerm) {
        //         $query->where('full_name', 'like', '%' . $searchTerm . '%')
        //             ->orWhere('gps_id', 'like', '%' . $searchTerm . '%');
        //     });
        // }

        return view('shop', [
            'myProducts' => $products->paginate(10)
        ]);
    }

    public function hotDeals()
    {
        $hotDeals = Product::with('productsCategories')->where('is_hot_deal', true)->orderBy('created_at', 'DESC');

        return view('shop', [
            'myProducts' => $hotDeals->paginate(10)
        ]);
    }

    public function PCs()
    {
        $Pcs = Product::with('productsCategories')->where('category_id', 1)->orderBy('created_at', 'DESC');

        return view('shop', [
            'myProducts' => $Pcs->paginate(10)
        ]);
    }

    public function laptops()
    {
        $laptops = Product::with('productsCategories')->where('category_id', 2)->orderBy('created_at', 'DESC');

        return view('shop', [
            'myProducts' => $laptops->paginate(10)
        ]);
    }

    public function smartPhones()
    {
        $smartPhones = Product::with('productsCategories')->where('category_id', 3)->orderBy('created_at', 'DESC');

        return view('shop', [
            'myProducts' => $smartPhones->paginate(10)
        ]);
    }

    public function show(Product $product)
    {
        return view('products.view.show', compact('product'));
    }

    public function __construct()
    {
        $productCategories = ProductCategory::withCount('products')->get();

        view()->share('productCategories', $productCategories);
    }
}

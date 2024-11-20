<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.view.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

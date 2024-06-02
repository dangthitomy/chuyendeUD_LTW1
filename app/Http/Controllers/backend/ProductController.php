<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{ public function index()
    {
        $list = Product::where("product.status", "!=", 0)
            ->join("category", "product.category_id", "=", "category.id")
            ->join("brand", "product.brand_id", "=", "brand.id")
            ->orderBy("product.created_at", "DESC")
            ->select("product.id", "product.slug", "product.name", "product.image", "category.name as categoryname", "brand.name as brandname")
            ->paginate(7);
        return view('backend.product.index', compact("list"));
    }
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
    public function show(string $id)
    {
        //
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
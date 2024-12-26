<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::all();
        return view('admin.products.category.index', compact('productCategories'));
    }

    public function create()
    {
        return view('admin.products.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:product_categories|max:255',
            'description' => 'nullable',
        ]);

        ProductCategory::create($request->all());
        return redirect()->route('product-categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $editCategory = ProductCategory::findOrFail($id);
        $productCategories = ProductCategory::all(); // Fetch categories for the listing table
        return view('admin.products.category.index', compact('editCategory', 'productCategories'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|unique:product_categories,name,' . $id,
            'description' => 'nullable',
        ]);

        $category = ProductCategory::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('product-categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('product-categories.index')->with('success', 'Category deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'product_category_id' => 'required|exists:product_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for image
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        } else {
            $imagePath = null;
        }

        // Create the product
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'product_category_id' => $request->product_category_id,
            'image' => $imagePath, // Save the image path
        ]);

        return redirect()->route('products-index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'product_category_id' => 'required|exists:product_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for image
        ]);

        $product = Product::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image = $imagePath;
        }

        // Update the product
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'product_category_id' => $request->product_category_id,
            // Image path is only updated if a new image is uploaded
        ]);

        return redirect()->route('products-index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete the product image if it exists
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }

        $product->delete();
        return redirect()->route('products-index')->with('success', 'Product deleted successfully.');
    }

   
}

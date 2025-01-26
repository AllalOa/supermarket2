<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    // Function to display all products


    public function index(){
        // Fetch all products from the database
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    // Function to create a new product
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'barcode' => 'required|unique:products,barcode|max:255',
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:2048', // Image validation
        ]);

        // Handle the image upload if it exists
        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('product_images', 'public'); // Store in 'storage/app/public/product_images'
        }

        // Create the new product record
        Product::create([
            'barcode' => $request->input('barcode'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'img' => $imgPath, // Store the image path in the database
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza.php;

class PizzaController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function select(Request $request)
    {
        $selectedProductId = $request->input('product_id');
        $selectedProduct = Product::find($selectedProductId);
    
        if (!$selectedProduct) {
            // Handle the case where the product is not found
            // You can return an error message or redirect to the product list page.
    }

    $order = new Order();
    $order->total_price += $selectedProduct->price;
    $order->save();

    // You can also associate the selected product with the order if needed.

        // Associate the selected product with the authenticated user
    auth()->user()->products()->attach($selectedProductId);

    return redirect()->route('orders.show', ['user' => auth()->user()]);
    
}
}

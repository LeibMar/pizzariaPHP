<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class PedidoController extends Controller
{
    public function show(Pedido $pedidp)
    {
        

        $selectedProducts = $user->products;
        $totalPrice = $selectedProducts->sum('price');
    
        return view('orders.show', compact('selectedProducts', 'totalPrice'));
    }

    public function confirm(Request $request, Pedido $order)
    {
        // Handle order confirmation logic here
        // For example, you can update the order status or save additional details.

        return redirect()->route('home')->with('success', 'Order confirmed successfully.');
    }

    public function __construct()
{
    $this->middleware('auth');
}

}

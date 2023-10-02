<!-- resources/views/orders/show.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Order Confirmation</h1>

<p>Selected Products:</p>
<ul>
    @foreach ($selectedProducts as $product)
        <li>{{ $product->name }} - ${{ $product->price }}</li>
    @endforeach
</ul>

<p>Total Price: ${{ $totalPrice }}</p>

<form method="POST" action="{{ route('orders.confirm', ['user' => auth()->user()]) }}">
    @csrf
    <button type="submit">Confirm Order</button>
</form>
@endsection

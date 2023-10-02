<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')


@section('content')
<h1>Product List</h1>

<ul>
    @foreach($pizzas as $pizza)
        <li>
            {{ $pizza->name }} - ${{ $pizza->preco }}
            <form method="POST" action="{{ route('pizzas.select') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit">Select</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection

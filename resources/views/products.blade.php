@extends('layout')

@section('content')

    <div class="row">
        <div class="col-8">
            <h1>We sell products here!</h1>

            @livewire('products-list')
        </div>
        <div class="col-4">
            <h2>Cart</h2>

            @livewire('product-cart')
        </div>
    </div>


@endsection

<div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Cost</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        @if(empty($shopping_cart) || empty($shopping_cart->items))
            <tr>
                <td colspan="5">No products found in cart.</td>
            </tr>

        @else
            @foreach($shopping_cart->items as $cart_item)
                <tr>
                    <td>{{ $cart_item->product->name }}</td>
                    <td>${{ $cart_item->product->cost }}</td>
                    <td>{{ $cart_item->quantity }}</td>
                    <td>${{ number_format($cart_item->product->cost * $cart_item->quantity, 2) }}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
</div>

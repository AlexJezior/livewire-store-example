<div>
    <form action="#">
        <div class="form-group">
            <label for="product_search">Product Search: </label>
            <input class="form-control d-inline-block w-50" type="text" wire:model="product_search"/>
        </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Cost</th>
            <th scope="col">Quantity</th>
            <th scope="col">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>${{ $product->cost }}</td>
                <td><input class="d-inline-block w-75" type="text" wire:model="product_quantities.{{ $product->id }}"></td>
                <td><button class="btn btn-secondary" wire:click="addToCart({{ $product->id }})">Add</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

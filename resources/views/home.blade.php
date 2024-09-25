<div>
    <style>
        table{
            border-collaspse: collapse;
        }
        table , th ,td{
            border: 1px solid black;
        }
    </style>
    <h1>Welcome to our Market</h1>
    @session("success")
    <script>
        alert("{{ session('success') }}");
    </script>
@endsession
    <p>here you can find all the products we have for you</p>
    <a href="cartlist">view cart list</a>
    <table>
        <thead>
            <th>product name</th>
            <th>Product mass</th>
            <th>product price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @if (count($products)!==0)
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->p_name }}</td>
                        <td>{{ $product->p_mass }}g</td>
                        <td>RM {{ $product->p_price }}</td>
                        <td><a href="{{ route('product.show', $product->id) }}" >Buy</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
   
</div>

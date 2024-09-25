<div>
    <style>
        table{
            border-collaspse: collapse;
        }
        table , th ,td{
            border: 1px solid black;
        }
    </style>
    <h1>cart list</h1>
    <table>
        <thead>
            <th>product name</th>
            <th>Product mass</th>
            <th>total price</th>
            <th>cart status</th>
        </thead>
        <tbody>
           @foreach ($carts as $cart)
               <tr>
                   <td>{{ $cart->p_name }}</td>
                   <td>{{ $cart->total_mass }}</td>
                   <td>{{ $cart->total_mass * $cart->p_price/100 }}</td>
                   <td>{{ $cart->c_status }}</td>
               </tr>
           @endforeach
        </tbody>
    </table>
    <form action="{{ route('checkout') }}" method="POST">
        @csrf
        @method("PUT")
        <button type="submit">checkout</button>
    </form>
</div>

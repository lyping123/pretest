<div>
    <h1>products detail</h1>
   <form method="POST" action="{{ route('add_to_cart', $product->id) }}">
    @csrf
   <label for="">product name</label>
   <input type="text" readonly name="p_name" value="{{ $product->p_name }}">
   <br>
   <label for="">mass</label>
    <input type="number" name="p_mass" onchange="calculate()" value="{{ $product->p_mass }}">
    @error('p_mass')
        {{ $message }}
    @enderror
    <br>
    <label for="">price</label>
    <input type="text" readonly name="p_price" value="{{ $product->p_price }}">
    <br>
    <label for="">total price</label>
    <p id="total_price"></p>
    <br>
    <button type="submit" name="submit">add to cart</button>

    <a href="{{ route('home') }}">back</a>
    </form>
</div>

<script>
    function calculate(){
        var mass = document.querySelector("input[name='p_mass']").value;
        var price = document.querySelector("input[name='p_price']").value;

        var total=price/100*mass;
        
        document.querySelector("#total_price").innerHTML=total;
    }

</script>

<div>
    <form action="{{ route('register_user') }}" method="POST">
        @csrf
        <label>Username</label>
        <input type="text" name="name" >
        @error('name')
            {{ $message }}
        @enderror
        <label>password</label>
        <input type="password" name="password">
        @error('password')
            {{ $message }}
        @enderror
        <label>Confirm password</label>
        <input type="password" name="password_confirmation">
        <button type="submit">register</button>
        @error('message')
            <script>
                alert("{{ $message }}");
            </script>
        @enderror
    </form>
</div>

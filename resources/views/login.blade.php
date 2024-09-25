<div>
    @session("success")
        <script>
            alert("{{ session('success') }}");
        </script>
    @endsession
    <form action="{{ route('login_user') }}" method="POST">
        @csrf
        <label>Username</label>
        <input type="text" name="name" >
        <label>password</label>
        <input type="password" name="password">
        <button type="submit">login</button>
    </form>
    <a href="/register">register</a>
</div>

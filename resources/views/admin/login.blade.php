

@if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<div class="container" id="container">
    <div class="sign-in">
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <h1>Sign In</h1>
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
            @error('email') <small>{{ $message }}</small> @enderror

            <input type="password" placeholder="Password" name="password" />
            @error('password') <small>{{ $message }}</small> @enderror

            <button type="submit">Sign In</button>
        </form>
    </div>
</div>

<div class="sign-up">
    <form action="{{ route('admin.register') }}" method="POST">
        @csrf
        <h1>Create Account</h1>
        <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
        @error('name') <small>{{ $message }}</small> @enderror

        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" />
        @error('email') <small>{{ $message }}</small> @enderror

        <input type="password" placeholder="Password" name="password" />
        @error('password') <small>{{ $message }}</small> @enderror

        <input type="password" placeholder="Confirm password" name="password_confirm" />
        @error('password_confirm') <small>{{ $message }}</small> @enderror

        <button type="submit">Sign Up</button>
    </form>
</div>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/Auth/register.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form action="{{ route('admin.register') }}" method="POST">
                @csrf
                <h1>Create Account</h1>

                <div class="mb-3">
                    <input type="text"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Full Name"
                        name="name"
                        value="{{ old('name') }}" />
                    @error('name')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email"
                        name="email"
                        value="{{ old('email') }}" />
                    @error('email')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password"
                        name="password" />
                    @error('password')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="password"
                        class="form-control @error('password_confirmation') is-invalid @enderror"
                        placeholder="Confirm Password"
                        name="password_confirmation" />
                    @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-register">Create Account</button>
            </form>

            <div class="divider">OR</div>

            <div class="social-login">
                <a href="{{ route('login.google') }}" class="social-btn google-btn">
                    <i class="fab fa-google"></i> Sign up with Google
                </a>
                <a href="{{ route('login.facebook') }}" class="social-btn facebook-btn">
                    <i class="fab fa-facebook-f"></i> Sign up with Facebook
                </a>
            </div>

            <div class="footer-links">
                <span>Already have an account? </span>
                <a href="{{ route('admin.login') }}">Sign In</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
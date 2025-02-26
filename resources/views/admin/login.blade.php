<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/Auth/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <h1>Sign In</h1>
                
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

                <button type="submit" class="btn btn-login">Sign In</button>
            </form>

            <div class="divider">OR</div>

            <div class="social-login">
                <a href="{{ route('login.google') }}" class="social-btn google-btn">
                    <i class="fab fa-google"></i> Sign in with Google
                </a>
                <a href="{{ route('login.facebook') }}" class="social-btn facebook-btn">
                    <i class="fab fa-facebook-f"></i> Sign in with Facebook
                </a>
            </div>

            <div class="footer-links">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
                <br>
                <span>Don't have an account? </span>
                <a href="{{ route('admin.register') }}">Sign Up</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

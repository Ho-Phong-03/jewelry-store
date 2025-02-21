<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .login-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 480px;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .login-card h1 {
            color: #2d3748;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2rem;
        }

        .form-control {
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        .btn-register {
            background: linear-gradient(to right, #667eea, #764ba2);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, #5a6fd6, #6a4494);
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: -15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .error-message::before {
            content: "!";
            background: #e53e3e;
            color: white;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            font-size: 12px;
        }

        .divider {
            text-align: center;
            margin: 30px 0;
            position: relative;
        }

        .divider::before,
        .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background: #e2e8f0;
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .social-login {
            display: grid;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .google-btn {
            background: #fff;
            color: #333;
            border: 2px solid #e2e8f0;
        }

        .facebook-btn {
            background: #1877f2;
            color: white;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .social-btn i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .footer-links {
            text-align: center;
            margin-top: 20px;
            color: #4a5568;
        }

        .footer-links a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .is-invalid {
            border-color: #e53e3e;
        }

        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 15px;
        }
    </style>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Include your stylesheet with a link tag -->
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">
    <!-- Add custom CSS styles for mobile responsiveness -->
    <style>
        /* Add CSS styles for mobile responsiveness */
        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
            }
            .form-control {
                width: 80%;
                padding: 10px;
                margin: 5px 0;
            }
            .btn {
                width: 70%;
            }
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="login-container">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="w-20 h-20 fill-current text-gray-500">
            </a>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            <div class="mb-3">
                &nbsp; <!-- Spacer, you can remove it if not needed -->
            </div>

            <!-- Session Status -->
            <div class="mb-4">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input id="email" class="form-control mb-2" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include your stylesheet with a link tag -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
    <!-- Main container with background color -->
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="login-container">
            <!-- Logo displayed in the center -->
            <img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="mx-auto w-20 h-20 mb-4">
            <!-- Display success message if exists -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <!-- Display error messages if there are any -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Login form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <!-- Input for email -->
                    <input id="email" class="form-control mb-2" type="email" name="email" >
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="mb-3">
                    <!-- Input for password -->
                    <input id="password" class="form-control mb-2" type="password" name="password" >
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="mb-4">
                    <!-- Login button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Log in') }}</button>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="mb-3">
                    <!-- Forgot password link -->
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-600">Forgot your password?</a>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <!-- Footer with copyright information -->
                <footer class="text-center text-gray-600 text-sm">
                    &copy; 2023 Levy Mwanawasa Medical University. All rights reserved.
                </footer>
            </form>
        </div>
    </div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Add any necessary meta tags and stylesheets here -->
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
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="login-container">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Your Logo" class="mx-auto w-20 h-20 mb-4">
            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Register</h1>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <x-input id="name" class="form-control mb-2" type="text" name="name" :value="old('name')" required autofocus placeholder="Name"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <!-- Email Address -->
                <div class="mb-3">
                    <x-input id="email" class="form-control mb-2" type="email" name="email" :value="old('email')" required placeholder="Email"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <x-input id="password" class="form-control mb-2" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input id="password_confirmation" class="form-control mb-2" type="password" name="password_confirmation" required placeholder="Confrirm Password"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="mb-4">
                    <x-button>{{ __('Register') }}</x-button>
                </div>

                <div class="mb-3">
                    &nbsp;
                </div>

                <div class="mb-3">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

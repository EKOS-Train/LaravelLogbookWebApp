<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Confirmation</title>
    <!-- Add any necessary meta tags and stylesheets here -->
    <link rel="stylesheet" href="{{ asset('css/confirm-password.css') }}">
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
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
            <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input id="password" class="form-control mb-2" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

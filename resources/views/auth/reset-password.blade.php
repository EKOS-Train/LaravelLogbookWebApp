<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Include your stylesheet with a link tag -->
    <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}">
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

            <!-- Validation Errors -->
            <div class="mb-4">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input id="email" class="form-control mb-2" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder ="Email"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <x-input id="password" class="form-control mb-2" type="password" name="password" required placeholder ="Password"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input id="password_confirmation" class="form-control mb-2" type="password" name="password_confirmation" required placeholder ="Password Confrim"/>
                </div>
                <div class="mb-3">
                    &nbsp; <!-- Spacer, you can remove it if not needed -->
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

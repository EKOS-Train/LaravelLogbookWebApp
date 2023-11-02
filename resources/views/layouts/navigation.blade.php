<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <!-- Include your stylesheet with a link tag -->
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
</head>
<body>
    <nav x-data="{ open: false }">
        <div>
            <div>
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/logo.png') }}" width="60px" height="60px" alt="Your Logo">
                </a>
            </div>
        </div>
        
        <div>
            <div class="dropdown">
                <button class="dropbtn">Faculty<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Students<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Logbooks<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Assignments<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Reports<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Admin<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="{{ route('users') }}">Users</a>
                    <a href="#">Link 2</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-caret-down"><img src="{{ asset('images/setting.png') }}" width="20px" height="20px"  alt="Your Logo"></i></button>
                <div class="dropdown-content">
                    <a href="{{ route('profile') }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>

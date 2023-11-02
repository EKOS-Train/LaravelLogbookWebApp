<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <!-- Include your stylesheet with a link tag -->
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <style>
        /* CSS to make the table fill 70% of the page */
        .container {
            width: 90%;
            margin: 0 auto;
        }

        /* CSS to style the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-group {
            margin-top: 10px;
        }
    </style>
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

    <div class="container">
        <h1>Users</h1>
        <div class="row mb-2">
            <div class="col">
                <input type="text" id="search" class="form-control" placeholder="Search users">
            </div>
            <div class="col">
                <button class="btn btn-primary float-right" id="export-pdf">Export to PDF</button>
                <button class="btn btn-primary float-right" id="export-xlsx">Export to XLSX</button>
                <button class="btn btn-primary float-right" id="export-docx">Export to DOCX</button>
                <button class="btn btn-primary float-right" id="export-rtf">Export to RTF</button>
                <button class="btn btn-primary float-right" id="export-csv">Export to CSV</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be dynamically generated here -->
            </tbody>
        </table>
        <div class="row">
            <div class="col">
                <button class="btn btn-danger" id="delete-users">Delete User(s)</button>
                <button class="btn btn-warning" id="unlock-users">Unlock User(s)</button>
                <button class="btn btn-success" id="reset-password">Reset Password</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        // JavaScript code for table functionality
        // You'll need to implement AJAX to fetch user data from the server and populate the table.
        // Also, implement export and user actions as needed.

        // Example data for table rows
        const userData = [
            { id: 1, name: 'User 1', email: 'user1@example.com' },
            { id: 2, name: 'User 2', email: 'user2@example.com' },
            { id: 3, name: 'User 3', email: 'user3@example.com' },
            // Add more user data here
        ];

        // Function to generate table rows from user data
        function generateTableRows(data) {
            const tbody = $('tbody');
            tbody.empty();

            data.forEach(user => {
                tbody.append(`
                    <tr>
                        <td><input type="checkbox" class="select-user" value="${user.id}"></td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>
                            <button class="btn btn-info edit-user" data-id="${user.id}">Edit</button>
                        </td>
                    </tr>
                `);
            });
        }

        // Populate the table with initial data
        generateTableRows(userData);

        // Implement search functionality
        $('#search').on('input', function () {
            const searchTerm = $(this).val().toLowerCase();
            const filteredData = userData.filter(user => user.name.toLowerCase().includes(searchTerm) || user.email.toLowerCase().includes(searchTerm));
            generateTableRows(filteredData);
        }

        // Implement pagination with 10 rows per page (not shown in this example)

        // Implement export options (not shown in this example)

        // Implement user actions (delete, unlock, reset password) (not shown in this example)
    </script>
</body>
</html>


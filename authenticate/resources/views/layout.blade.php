<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>@yield('title', 'My First Laravel Page')</title>
    <style>
        /* Basic CSS styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .container {
            margin: 20px auto;
            max-width: 1100px;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>My Website</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/dashboard">Profile</a>
        </nav>
    </header>

    <!-- Main Content Section -->
    <div class="container">
        @yield('content')
        
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

</body>
</html>

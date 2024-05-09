<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock out</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background: #3c3c3d6d;
            font-family: system-ui;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            position: sticky;
            top: 0;
            left: 0;
        }

        .navbar-inner {
            width: 60rem;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-text {
            font-weight: bold;
            color: #1f2937;
            margin-left: 0.5rem;
        }

        .primary-nav a {
            color: #4b5563;
            padding: 0.75rem 1rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .primary-nav a:hover {
            background-color: #edf2f7;
            color: #1f2937;
        }

        .secondary-nav a {
            background-color: #000;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: all 0.2s ease;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-inner">
            <div class="logo">
                <span class="logo-text">E.P Saint Anne</span>
            </div>
            <div class="primary-nav">
                <a href="./index.php">Home</a>
                <a href="./products.php">Products</a>
                <a href="./stockin.php">Stock In</a>
                <a href="./stockout.php">Stock Out</a>
            </div>
            <div class="secondary-nav">
                <a href="./auth/logout.php">Logout</a>
            </div>
        </div>
    </nav>
</body>

</html>
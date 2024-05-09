<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
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
    <div class="container">
        <section class="admin-info">
            <h2>Admin Information</h2>
            <p><span class="label">Name:</span> Alliance</p>
            <p><span class="label">Email:</span> aimeuwajeneza30@gmail.com</p>
            <p><span class="label">Role:</span> Administrator</p>
            <p><span class="label">Joined:</span> January 1, 2024</p>

        </section>

        <div class="grid">
            <!-- Card 1: Kitchen Information -->
            <div class="card">
                <h3>Kitchen Information</h3>
                <p>Total Cooks: 10</p>
                <p>Total Ingredients: 150</p>
                <p>Daily Meals: 500</p>
            </div>

            <!-- Card 2: Inventory Information -->
            <div class="card">
                <h3>Inventory Information</h3>
                <p>Total Items: 500</p>
                <p>Out of Stock: 20</p>
                <p>Expiring Soon: 30</p>
            </div>

            <!-- Card 3: Orders Information -->
            <div class="card">
                <h3>Orders Information</h3>
                <p>Total Orders: 100</p>
                <p>Today's Orders: 10</p>
                <p>Pending Orders: 5</p>
            </div>
        </div>
    </div>
    <div class="addition">

    </div>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 E.P Saint Anne. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
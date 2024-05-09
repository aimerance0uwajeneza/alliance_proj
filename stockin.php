<?php
$conn = mysqli_connect("localhost", "root", "", "saint_anne");

$select = mysqli_query($conn, "SELECT * FROM stock_in");
$tbody = '';
$num_rows = '';
$a = 1;

if ($select) {
    $num_rows = mysqli_num_rows($select);

    if ($num_rows > 0) {
        while ($fetch = mysqli_fetch_assoc($select)) {
            $tbody .= "<tr>
            <td>" . $a++ . "</td>
            <td>" . $fetch["Date"] . "</td>
            <td>" . $fetch["Quantity"] . "</td>
            <td>" . $fetch["Unit_Price"] . "</td>
            <td>" . $fetch["Total_Price"] . "</td>
            <td>" . $fetch["ProductId"] . "</td>
            <td class='text-align:center;'>
            <a href='export.php?ProductId=" . $fetch['ProductId'] . "' class='import'>Export</a>
            </td>
        </tr></br>";
        }
    } else {
        $tbody .= '<tr><td colspan="3" style="text-align:center; font-weight:bold;">No Products found</td></tr>';
    }
} else {
    echo "Not selected";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/products.css">
    <style>
        .container {
            width: 100%;
            padding: 2rem;
        }

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
            /* padding: 8px; */
        }

        .navbar-inner {
            width: 60rem;
            margin: 0 auto;
            /* padding: 1rem; */
            display: flex;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-text {
            font-weight: bold;
            color: #43474b;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .button {
            display: inline-block;
            background-color: #000;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 1rem;
        }

        .update {
            padding: 10px 20px;
            background: #2e3436;
            border-radius: 10px;
            margin-top: 10px;
        }

        .delete {
            padding: 10px 20px;
            background: #656056;
            border-radius: 10px;
            margin-top: 10px;
        }

        .import {
            padding: 10px 20px;
            background: #656091;
            border-radius: 10px;
            margin-top: 10px;
        }

        .update,
        .delete,
        .import {
            color: #fff;
            text-decoration: none;
        }

        .delete:hover,
        .update:hover,
        .import:hover {
            text-decoration: none;
            color: #fff;
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

    <div class="container">
        <h2>Products</h2>
        <a href="./products.php" class="button">Add New Import</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Import Date</th>
                    <th>Quantity</th>
                    <th>Unit price</th>
                    <th>Total price</th>
                    <th>ProductId</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<!-- $students = ['alliance','eloi','ange'] 
$fetch = mysqli_fetch_assoc($students)

['alliance]
['eloi']
['ange']
-->
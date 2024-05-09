<?php
$conn = mysqli_connect("localhost", "root", "", "saint_anne");

session_start();


if (isset($_POST['add'])) {
    $pname = $_POST['pname'];

    $insert = mysqli_query($conn, "INSERT INTO products VALUES('','$pname')");
    if ($insert) {
        echo "Product inserted successfully";
    } else {
        echo "Product not inserted";

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="./css/addproduct.css">
    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background: #3c3c3d6d;  
            margin: 0;
            padding: 0;
            
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
            margin-top: 10px;
        }

        .div1 {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .submit {
            text-align: center;
            margin-top: 20px;
        }

        .login {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .login:hover {
            background-color: #333;
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }

        .link a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>E.P Saint Anne</h1>
            <p>Add your products to the store</p>
            <div class="div1">
                <label>Product name</label>
                <input type="text" placeholder="Product name" name="pname">
            </div>

            <div class="submit">
                <input type="submit" value="Add product" name='add' class="login">
            </div>
            <div class="link">
                <p><a href="./products.php">Back to products</a></p>
            </div>
        </form>
    </div>
</body>

</html>
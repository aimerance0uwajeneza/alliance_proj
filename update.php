<?php
$conn = mysqli_connect("localhost", "root", "", "saint_anne");

$id = $_GET['ProductId'];

if (!isset($id)) {
    header("Location: ./products.php");
}

$select = mysqli_query($conn, "SELECT * FROM products WHERE `ProductId` = '{$id}'");
$fetch = mysqli_fetch_assoc($select);

$form = '
<div class="container">
        <form action="" method="POST">
            <h1>E.P Saint Anne</h1>
            <p>Add your products</p>
            <div class="div1">
                <label>ProductId</label>
                <input type="text" placeholder="Product Id" value="' . $fetch['ProductId'] . '" disabled>
            </div>
            <div class="div2">
                <label>Product name</label>
                <input type="text" placeholder="Product name" name="pname" value="' . $fetch['Product_Name'] . '">
            </div>

            <div class="submit">
                <input type="submit" value="Update product" name="update" class="login">
            </div>
            <div class="link">
                <p><a href="./products.php">Back to products</a></p>
            </div>
        </form>
    </div>
';

if (isset($_POST['update'])) {
    $name = $_POST['pname'];
    $update = mysqli_query($conn, "UPDATE products SET `Product_Name` = '{$name}' WHERE `ProductId` = $id");
    if ($update) {
        echo "<script>Item updated succesfully</script>";
        header("Location: ./products.php");
    }
} else {
    echo "<script>Item not updated</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
    <?php echo $form ?>
</body>

</html>
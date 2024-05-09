<?php
$conn = mysqli_connect("localhost", "root", "", "saint_anne");

session_start();

if (isset($_SESSION['cid'])) {
    header("Location: ../index.php");
}

if (isset($_POST['signup'])) {
    $cname = $_POST['cname'];
    $pass = $_POST['pswrd'];

    $signup = mysqli_query($conn, "INSERT INTO chief VALUES('', '$cname','$pass')");

    // if ($num_rows = mysqli_num_rows($signup) > 0) {
    //     echo "Username already exist";
    // } else {
    //     header("Location: ./login.php");

    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            background: #3c3c3d;

        }

        h1 {
            text-align: center;
            color: #fff;
        }

        p {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
            color: #fff;
        }

        label {
            font-weight: bold;
            color: #fff;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #000;
            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #007bff;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>E.P Saint Anne</h1>
            <p>Sign up to create account</p>
            <label for="cname">Username</label>
            <input type="text" id="cname" placeholder="Chief name" name="cname">
            <label for="pswrd">Password</label>
            <input type="password" id="pswrd" placeholder="Chief password" name="pswrd">
            <input type="submit" value="Sign up" name='signup'>
            <div class="link">
                <p>Already have an account? <a href="./login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>
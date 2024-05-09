<?php
$conn = mysqli_connect("localhost", "root", "", "saint_anne");
$id = $_GET['ProductId'];

if (!isset($id)) {
    header("Location: ./products.php");
}

if (isset($_GET['ProductId'])) {
    $delete = mysqli_query($conn, "DELETE FROM products WHERE `ProductId` = $id");
    if ($delete) {
        echo "<script>Item deleted succesfully</script>";
        header("Location: ./products.php");
    }
} else {
    echo "<script>Item not deleted</script>";
}
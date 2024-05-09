<?php
session_start();
$conn = mysqli_connect("localhost","root","","saint_anne");

if (!$_SESSION['cid']) {
   header("Location: ./login.php");
}
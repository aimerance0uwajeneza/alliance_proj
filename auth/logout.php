<?php
session_start();

if ($_SESSION['cid']) {
    session_destroy();
    session_unset();
    header("Location: ./login.php");
}
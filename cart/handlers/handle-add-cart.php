<?php
session_start();
if (isset($_GET['productname'])) {
    $productname = $_GET['productname'];
    //$_SESSION['cart']=$productname; //false
    $_SESSION['cart'][] = $productname;
    // print_r($_SESSION);
    header("location:../index.php");
}

<?php
session_start();
include("connect.php");
$prod_id = $_GET['prod_id'];
$user_id = $_SESSION['user_id'];
$query2 = "INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`) VALUES (NULL, '$user_id', '$prod_id', 1);";
mysqli_query($conn, $query2);
header("Location: products.php#".$prod_id);
?>
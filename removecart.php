<?php
session_start();
include("connect.php");
$user_id = $_SESSION['user_id'];
$query1 = "INSERT INTO order_list (user_id, product_id) SELECT user_id, product_id FROM cart WHERE user_id = $user_id";
$query2 = "DELETE FROM cart WHERE user_id = $user_id";
mysqli_query($conn, $query1);
mysqli_query($conn, $query2);
header("location: products.php")
?>
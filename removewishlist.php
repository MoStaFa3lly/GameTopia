<?php
session_start();
include("connect.php");
$prod_id = $_GET['prod_id'];
$user_id = $_SESSION['user_id'];
$query2 = "DELETE FROM `wishlist` WHERE user_id = $user_id AND product_id = $prod_id;";
mysqli_query($conn, $query2);
header("Location: wishlist.php");
?>
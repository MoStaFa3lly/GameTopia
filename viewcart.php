<?php
session_start();
include("connect.php");
$user_id = $_SESSION['user_id'];
$query1 = "SELECT * FROM cart WHERE user_id = '$user_id'";
$output = '';

$result1 = mysqli_query($conn, $query1);
    if($result1->num_rows > 0){
        while($row1 = $result1->fetch_assoc()) {
            $prod_id = $row1['product_id'];
            $query2 = "SELECT * FROM products WHERE product_id = '$prod_id'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $output = $output.'<div class="item">
                                    <img src="'.$row2['product_image'].'" alt="" />
                                    <p>'.$row2['product_name'].'</p>
                                    <p>price: '.$row2['product_price'].'</p>
                                </div>';
    }
    echo $output;
}

?>
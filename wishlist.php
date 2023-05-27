<?php
include("connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wishlist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/wishlist.css" />
  </head>
  <body>
    <nav>
      <?php
      if(isset($_SESSION['f_name'])){
        echo '<div><p>Welcome, '.ucfirst($_SESSION['f_name']).' '.ucfirst($_SESSION['l_name']).'</p></div>';
      }else echo '<div><p>Welcome to GameTopia</p></div>';
      ?>
      <div class="logo-user"><p></p></div>
      <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="cat-brand.php">Categories & Brands</a></li>
        <?php
        if(isset($_SESSION['f_name'])){
        echo'<li><a href="purchase-history.php">Purchase History</a></li>';
        }
        ?>
        <li>
          <div class="accs">
            <div id="acc-click">Account</div>
            <ul id="acc-lists">
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
              <?php
              if(isset($_SESSION['f_name'])){
                echo'<li><a href="logout.php">Logout</a></li>';
              }
              ?>
            </ul>
          </div>
        </li>
        <?php
        if(isset($_SESSION['f_name'])){
        echo'<li><a href="wishlist.php">Wishlist</a></li>';
        }
        ?>
        <li><a href="about.php">About</a></li>
      </ul>
    </nav>
    <h1>Wishlist</h1>
    <div class="container">
      <div class="prod-cards">
      <?php
        $user_id = $_SESSION['user_id'];
        $query1 = "SELECT * FROM wishlist WHERE user_id = '$user_id'";
        $output = '';
        
        $result1 = mysqli_query($conn, $query1);
            if($result1->num_rows > 0){
                while($row1 = $result1->fetch_assoc()) {
                    $prod_id = $row1['product_id'];
                    $query2 = "SELECT * FROM products WHERE product_id = '$prod_id'";
                    $result2 = mysqli_query($conn, $query2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $output = $output.'<div class="card" id='.$row2['product_id'].'>
                                        <div class="up-img">
                                          <img src="'.$row2['product_image'].'" alt="" />
                                        </div>
                                        <div class="content-text">
                                          <h2>'.$row2['product_name'].'</h2>
                                          <p class="desc">'.$row2['product_desc'].'</p>
                                          <h2 class="price">'.$row2['product_price'].'$</h2>
                                          <div id="prod-links">
                                          <a href="addtocart.php?prod_id='.$row2['product_id'].'">Add to cart</a>
                                          <a href="removewishlist.php?prod_id='.$row2['product_id'].'">Remove</a>
                                          </div>
                                        </div>
                                      </div>' ;
                      }
                    }else $output = "<h1>Your wishlist is empty</h1>";
                    echo $output;
          ?>
      </div>
    </div>
    <script src="js/wishlist.js"></script>
  </body>
</html>

<?php
include("connect.php");
session_start();

$query = "SELECT * FROM products;";
$result = mysqli_query($conn, $query);


if(isset($_POST['search'])){
  $category = $_POST['category'];
  $brand = $_POST['brand'];
  $query = "SELECT * FROM products WHERE product_cat = '$category' AND product_brand = '$brand';";
  $result = mysqli_query($conn, $query);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/products.css" />
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
    <h1>Products</h1>
    <form action="products.php" method="post">
      <h3>Select by:</h3>
      <div>
        <div>
          <label for="category">Category</label>
          <select name="category" id="category">
            <option value="0">---</option>
            <option value="1">Console</option>
            <option value="2">Laptops</option>
            <option value="3">Games</option>
            <option value="4">Computer Hardware</option>
            <option value="5">Accessories</option>
          </select>
        </div>
        <div>
          <label for="brand">Brand</label>
          <select name="brand" id="brand">
            <option value="0">---</option>
            <option value="1">Sony</option>
            <option value="2">Microsoft</option>
            <option value="3">MSI</option>
            <option value="4">Asus</option>
            <option value="5">Lenovo</option>
          </select>
        </div>
      </div>
      <input type="submit" value="Seacrh" name="search" id="" />
    </form>
    <p class="wrong" id="wrongSearch"></p>
    <div id="breaker"></div>
    <div class="container">
      <div class="prod-cards">
        <?php
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '
              <div class="card" id='.$row['product_id'].'>
                <div class="up-img">
                  <img src="'.$row['product_image'].'" alt="" />
                </div>
                <div class="content-text">
                  <h2>'.$row['product_name'].'</h2>
                  <p class="desc">'.$row['product_desc'].'</p>
                  <h2 class="price">'.$row['product_price'].'$</h2>';
                  if(isset($_SESSION['f_name'])){
                  echo '<div id="prod-links">
                  <a href="addtocart.php?prod_id='.$row['product_id'].'">Add to cart</a>
                  <a href="addtowishlist.php?prod_id='.$row['product_id'].'">Add to wishlist</a>
                  </div>';
                  }
                echo '</div></div>';
            }
          }
          if(isset($_POST['search'])){
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '
                <div class="card" id='.$row['product_id'].'>
                  <div class="up-img">
                    <img src="'.$row['product_image'].'" alt="" />
                  </div>
                  <div class="content-text">
                    <h2>'.$row['product_name'].'</h2>
                    <p class="desc">'.$row['product_desc'].'</p>
                    <h2 class="price">'.$row['product_price'].'$</h2>';
                    if(isset($_SESSION['f_name'])){
                    echo '<div id="prod-links">
                    <a href="addtocart.php?prod_id='.$row['product_id'].'">Add to cart</a>
                    <a href="addtowishlist.php?prod_id='.$row['product_id'].'">Add to wishlist</a>
                    </div>';
                    }
                  echo '</div></div>';
              }
          }else echo "<h1>There is nothing to show you :c</h1>";
        }
        ?>
      </div>
    </div>
    <?php
    if(isset($_SESSION['f_name'])){
      echo'<div class="cart-logo"></div>
      <div>
      <div class="cart">
        <h2>CART</h2>
        <div id="items">
        </div>
        <a id="buy-in-cart" href="removecart.php">Buy</a>
      </div>';
    }
    ?>
    <script src="js/products.js"></script>
  </body>
</html>

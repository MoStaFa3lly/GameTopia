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
    <title>GameTopia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/home.css" />
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
    <div class="landing">
      <div class="heading">
        <img src="imgs/header.png" alt="" />
        <h3>BEYOND YOUR GAMING EXPERIENCE</h3>
      </div>
    </div>
    <div class="intro">
      <div class="container">
        <h1>
          <span>Introducing</span>&nbsp; <img src="imgs/header3.png" alt="" />
        </h1>
        <p class="intro-text">
          We are simply a Game Store in which we Sell Gaming Products and
          Accessories. Each Customer Can buy as many products as he wants and
          add it to his cart. There is a lot of variety in the categories as we
          sell Consoles, Accessories, Gaming Vouchers, computer parts and many
          more. Our main focus is giving the gamer customer the opportunity to
          buy whatever he needs in his gaming setup. Shine your gaming abilities
          with style!
        </p>
      </div>
    </div>
    <div class="devs-us">
      <div class="container">
        <h1><a href="about.php">Our Developers</a></h1>
        <div class="testimonials">
          <div class="box">
            <img src="imgs/avatar-01.png" alt="" />
            <h3>Mazen Samer</h3>
            <span class="title">Xerxece</span>
            <div class="contact-me">
              <a href="">Message</a>
              <a href="mailto: mazen.samer.2000@gmail.com">Email</a>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
              et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="products">
      <div class="container">
        <h3><a href="products.php">View all our Products</a></h3>
        <div class="prod-cards">
          <div class="card">
            <div class="up-img">
              <img src="imgs/ps4.png" alt="" />
            </div>
            <div class="content-text">
              <h2>PS4</h2>
              <p class="desc">
                DualSense also adds a build-in microphone array, which will
                enable players to easily
              </p>
              <h2 class="price">350$</h2>
              <a href="products.php">View Product</a>
            </div>
          </div>
          <div class="card">
            <div class="up-img">
              <img class="below-pos" src="imgs/ps4-controller.png" alt="" />
            </div>
            <div class="content-text">
              <h2>PS4 Controller</h2>
              <p class="desc">
                DualSense also adds a build-in microphone array, which will
                enable players to easily
              </p>
              <h2 class="price">200$</h2>
              <a href="products.php">View Product</a>
            </div>
          </div>
          <div class="card">
            <div class="up-img">
              <img src="imgs/ps5.png" alt="" />
            </div>
            <div class="content-text">
              <h2>PS5</h2>
              <p class="desc">
                DualSense also adds a build-in microphone array, which will
                enable players to easily
              </p>
              <h2 class="price">500$</h2>
              <a href="products.php">View Product</a>
            </div>
          </div>
          <div class="card">
            <div class="up-img">
              <img class="below-pos" src="imgs/ps5-controller.png" alt="" />
            </div>
            <div class="content-text">
              <h2>PS4</h2>
              <p class="desc">
                DualSense also adds a build-in microphone array, which will
                enable players to easily
              </p>
              <h2 class="price">200$</h2>
              <a href="products.php">View Product</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <img src="imgs/header2.png" alt="" />
      <div class="contacts">
        <h4>Contact us</h4>
      </div>
    </footer>
    <script src="js/index.js"></script>
  </body>
</html>

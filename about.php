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
    <title>About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/about.css" />
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
    <div class="devs-us">
      <div class="container">
        <h1>About Us</h1>
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
              DEVELOPER <br />
              Computer Engineer at AAST <br />
              7th term
            </p>         
        </div>
      </div>
    </div>
    <div class="contact-us">
      <div class="container">
        <h1>Contact us</h1>
        <div class="contacts">
          <div class="card">
            <img src="imgs/address-logo.png" alt="" />
            <h4>Address</h4>
            <p>AAST Abouqir, Alexandria Egypt</p>
          </div>
          <div class="card">
            <img src="imgs/phone-logo.png" alt="" />
            <h4>Phone</h4>
            <p>+201016244557</p>
          </div>
          <div class="card">
            <img src="imgs/mail-logo.png" alt="" />
            <h4>Email</h4>
            <p>gametopia@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <img src="imgs/header3.png" alt="" />
      <div class="social-links">
        <img src="imgs/Facebook.png" alt="" />
        <img src="imgs/whats.png" alt="" />
        <img src="imgs/insta.png" alt="" />
        <img src="imgs/youtube.png" alt="" />
      </div>
    </footer>

    <script src="js/about.js"></script>
  </body>
</html>

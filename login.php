<?php
include("connect.php");
session_start();
if(isset($_POST['login'])){
  $user_email = $_POST['email'];
  $password = $_POST['password'];
  if($user_email == "admin" && $password == "admin"){
    session_destroy();
    header("Location: /gametopia/admin.php");
  }
  else{
    $query = "SELECT * FROM user_info WHERE email = '$user_email' AND pass = '$password'";
    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user_id'] =  $row["user_id"];
      $_SESSION['f_name'] =  $row["first_name"];
      $_SESSION['l_name'] =  $row["last_name"];
      header("Location: /gametopia/index.php");
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/login.css" />
  </head>
  <body>
    <div class="login-page">
      <a href="index.php"><img src="imgs/header.png" alt="" /></a>
      <div class="login-form">
        <form action="login.php" method="post">
          <input
            class="input"
            type="text"
            name="email"
            id="email"
            placeholder="Email"
          />
          <p class="wrong" id="wrongEmail"></p>
          <input
            class="input"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
          />
          <p class="wrong" id="wrongPass"></p>
          <p class="wrong" id="datawrong">
          <?php
          if(isset($_POST['login'])){
            if($result->num_rows == 0){
              echo 'Invalid email/password';
              echo 
              '<script>
                setTimeout(() => {
                  document.getElementById("datawrong").innerHTML = "";
                  },3000)
              </script>';
            }
          }
          ?></p>
          <input type="submit" value="Login" name="login" />
          <span style="margin-bottom: -20px" class="sign-ups"
            ><a href="register.php">
              <p>Don't have an account?</p>
              <p>Register here.</p>
            </a></span
          >
        </form>
      </div>
      <p class="github">
        View the project on Github
        <a href="https://github.com/mazen-samer/GameTopia">here</a>.
      </p>
    </div>
    <script src="js/login.js"></script>
  </body>
</html>

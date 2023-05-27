<?php
include("connect.php");
if(isset($_POST['register'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phonenumber = $_POST['phonenumber'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query1 = "INSERT INTO user_info (first_name, last_name, mobile, addr, email, pass) VALUES ('$fname', '$lname', '$phonenumber', '$address', '$email', '$password');";
  $query2 = "SELECT * FROM user_info WHERE email = '$email'";
  $result2 = mysqli_query($conn, $query2);
  if($result2->num_rows == 0){
    $result2 = mysqli_query($conn, $query1);
    header("Location: successful.html");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GameTopia - Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/register.css" />
  </head>
  <body>
    <div class="login-page">
      <div class="left-side">
        <a href="index.php"><img src="imgs/header.png" alt="" /></a>
        <p class="github">
          View the project on Github
          <a href="https://github.com/mazen-samer/GameTopia">here</a>.
        </p>
      </div>
      <div class="login-form">
        <form action="register.php" method="post">
          <input
            class="input"
            type="text"
            id="fname"
            name="fname"
            placeholder="First Name"
          />
          <p class="wrong" id="wrongFname"></p>
          <input
            class="input"
            type="text"
            id="sname"
            name="lname"
            placeholder="Second Name"
          />
          <p class="wrong" id="wrongSname"></p>
          <input
            class="input"
            type="text"
            id="phone-number"
            name="phonenumber"
            placeholder="Phone Number"
          />
          <p class="wrong" id="wrongPhone"></p>
          <input
            class="input"
            type="text"
            id="address"
            name="address"
            placeholder="Address"
          />
          <p class="wrong" id="wrongAddress"></p>
          <input
            class="input"
            type="text"
            id="email"
            name="email"
            placeholder="Email"
          />
          <p class="wrong" id="wrongEmail"></p>
          <input
            class="input"
            type="password"
            id="password"
            name="password"
            placeholder="Password"
          />
          <p class="wrong" id="wrongPass"></p>
          <input
            class="input"
            type="password"
            id="conf-password"
            placeholder="Confirm Password"
          />
          <p class="wrong" id="wrongPassConf"></p>
          <p class="wrong" id="datawrong">
          <?php
          if(isset($_POST['register'])){
            if($result2->num_rows > 0){
              echo 'User already exists!';
              echo '<script>
                setTimeout(() => {
                  document.getElementById("datawrong").innerHTML = "";
                  },3000)
              </script>';
            }
          }
          ?>
          </p>
          <input type="submit" name="register" id="" value="Register" />
          <span class="sign-ups"
            ><a href="login.php">
              <p>Already have an account?</p>
              <p>Sign in.</p>
            </a></span
          >
        </form>
      </div>
    </div>
    <script src="js/register.js"></script>
  </body>
</html>

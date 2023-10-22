<?php
session_start();
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registion</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  
<div class="bubble" style="--y: 1; --x: 3; --t: 900"></div>
      <div class="bubble" style="--y: 3; --x: 1; --t: 1500"></div>
      <div class="bubble" style="--y: 2; --x: 6; --t: 1200"></div>
      <div class="bubble" style="--y: 5; --x: 8; --t: 800"></div>
    </div>
<script>
      // Random function
      const random = (min, max) => {
        return (parseInt((max - min) * Math.random()) + min);
      }

      // DOM selection
      const add_bubble = document.getElementById('add_bubble');
      const sky = document.querySelector('.sky');

      // Add more bubble in sky
      add_bubble.onclick = () => {

        // Create new bubble element
        const new_bubble = document.createElement("div");
        new_bubble.classList = 'bubble';
        new_bubble.style = `--y: ${random(1, 10)}; --x: ${random(1, 10)}; --t: ${random(500, 3000)}`;
        
        // Append new bubble to the sky
        sky.appendChild(new_bubble);

        // Remove this element after 5 sec
        setTimeout(() => { new_bubble.remove() }, 5000);
      }
    </script>
  <div class="box">
    <div class="container">

      <div class="top">
        <span>Have an account?</span>
        <br></br>
        <header>Register</header>
      </div>

      <div class="contaner">
        <form action="signup_db.php" method="post">
          <?php if (isset($_SESSION['error'])) { ?>
            <div class="sky" role="alert">
              <?php
              echo $_SESSION['error'];
              unset($_SESSION['error']);
              ?>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
              <div class="sky" role="alert"><b>
                <?php
                echo $_SESSION["success"];
                unset($_SESSION['success']);
                ?>
              <?php } ?></b>
              <?php if (isset($_SESSION['warning'])) { ?>
                <div class="sky" role="alert"><a>
                  <?php
                  echo $_SESSION["warning"];
                  unset($_SESSION['warning']);
                  ?>
                <?php } ?></a></div>

                <div class="input-field">
                  <label for="firstname"></label>
                  <input type="text" class="input" name="firstname" placeholder="Firstname" aria-describedby="emailHelp">
                  <i class='bx bx-user'></i>

                </div>
                <div class="input-field">
                  <label for="lastname"></label>
                  <input type="text" class="input" name="lastname" placeholder="Lastname" aria-describedby="emailHelp">
                  <i class='bx bx-user'></i>

                </div>
                <div class="input-field">
                  <label for="email"></label>
                  <input type="email" class="input" name="email" placeholder="email" aria-describedby="emailHelp">
                  <i class='bx bx-envelope'></i>

                </div>
                <div class="input-field">
                  <label for="password"></label>
                  <input type="password" class="input" name="password" placeholder="password">
                  <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                  <label for="confirm password"></label>
                  <input type="password" class="input" name="c_password" placeholder="confirm Password">
                  <i class='bx bx-lock-alt'></i>
                </div>


                <div class="input-field">
                  <input type="submit" name="signup" class="submit" id="">
                </div>

        </form>

        <div class="two-col">
          <div class="one">
            <label><a href="login.php">Click here to log in.</a></label>
          </div>
        </div>

</body>
<php ?>

</php>

</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="path/to/boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="bubble" style="--y: 1; --x: 3; --t: 700"></div>
      <div class="bubble" style="--y: 3; --x: 1; --t: 1200"></div>
      <div class="bubble" style="--y: 2; --x: 6; --t: 800"></div>
      <div class="bubble" style="--y: 5; --x: 8; --t: 2000"></div>
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
    <div class="login-box">
        <h2>Login</h2>
        <form action="signin_db.php" method="post">
        <?php if (isset($_SESSION['error'])) { ?>
          
          <div class="sky" role="alert">
            <?php
            echo $_SESSION["error"];
            unset($_SESSION['error']);
            ?>
          </div>
          <?php } ?>
          <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
              <?php
              echo $_SESSION["success"];
              unset($_SESSION['success']);
              ?>
            <?php } ?>
            <div class="user-box">
            <label>Username</label>
            <br><br>
            <input type="email" class="input" placeholder="email" name="email" aria-describedby="emailHelp">
            <i class="bx bx-envelope"></i>
        </div>
            <div class="user-box">
                <label>Password</label>
                <br><br>
                <input type="Password" class="input" placeholder="password" name="password">
                <i class='bx bx-lock-alt'></i>
              
            </div>
            <div class=".login-box"><a>
            <input type="submit" class="dark-button" name="signin" id="" >
            <!-- <input type="submit" value="Submit" class="dark-button"> -->
          </a>
          </div>
          
        </form>
    </div>
</html>


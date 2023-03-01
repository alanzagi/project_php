<?php
require 'assets/functions.php';

if ( isset($_POST["register"])) {
  if( register($_POST) > 0) {
      echo "<script>
      alert('user baru berhasil ditambahkan!');
      document.location.href = 'login.php'; 
        </script>";
  } else {
      echo mysqli_error($conn);
  }
}

if ( isset($_POST["login"])) {
  "<script>
      alert('user baru berhasil ditambahkan!');
      document.location.href = 'login.php'; 
   </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/register.css?v=2" />
  </head>
  <body>
    <div class="container">
      <h2>Register</h2>
      <form action="" method="post">
        <ul>
          <li style="list-style-type: none;">
            <label for="username" >Username</label>
            <input type="username" name="username" id="username" placeholder="username">
          </li>
          <li style="list-style-type: none;">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="password">
          </li>
          <li style="list-style-type: none;">
            <label for="password2">Password</label>
            <input type="password" name="password2" id="password2" placeholder="confirm password">
          </li>
          <li style="list-style-type: none;">
            <button type="submit" name="register" class="register">Register</button>
          </li>
        </ul>
      </form>
    </div>
  </body>
</html>
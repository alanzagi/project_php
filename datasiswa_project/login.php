<?php
require 'assets/functions.php';

if (isset($_POST["login"])) {
    $usernamecorrect = 1;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === $usernamecorrect) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) : ?>
            echo "<script>
                alert('username / password salah!');
                document.location.href = 'login.php';
            </script>";
        <?php endif; ?>
        <form action="" method="post">
            <ul>
                <li style="list-style-type: none;">
                    <label for="username">Username: </label>
                    <input type="text" name="username" id="username" placeholder="username">
                </li>
                <li style="list-style-type: none;">
                    <label for="password">Password: </label>
                    <input type="password" name="password" id="password" placeholder="password">
                </li>
                <li style="list-style-type: none;">
                    <button type="submit" name="login" class="login" id="login">Login</button>
                </li>
            </ul>
    </div>

    </form>
</body>

</html>
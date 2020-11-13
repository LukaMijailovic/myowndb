<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login!</title>
</head>
<body>
<?php
    require('../connect.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query    = "SELECT * FROM `regsitratie` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
        } else {
            header("Location: login.php");
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Gebruikersnaam" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Wachtwoord"/>
        <input type="submit" value="Login" name="submit"/>
        <p class="link">Heb je nog geen account? <a href="register.php">Registreer!</a></p>
  </form>
<?php
    }
?>
</body>
</html>

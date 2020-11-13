<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registreer!</title>
</head>
<body>
<?php
    require('../connect.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['naam']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `registratie` (naam, username, password, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$naam', '$create_datetime')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
          Header("Location: login.php");
        }
    } else { 
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" name="username" placeholder="Gebruikersnaam" required />
        <input type="text" name="naam" placeholder="Naam">
        <input type="password" name="password" placeholder="Wachtwoord">
        <input type="submit" name="submit" value="Register">
        <p>Heb je al een account? <a href="login.php">Login!</a></p>
    </form>
<?php
    }
?>
</body>
</html>

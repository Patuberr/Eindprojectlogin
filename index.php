<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welkom</title>
</head>
<body>
    <p>Deze pagina mag alleen getoond worden aan ingelogde gebruikers</p>
    <p>Welkom <?php echo $username; ?>, je bent ingelogd in het systeem</p>
    <div>
        <a href="logout.php">Uitloggen</a>
    </div>
</body>
</html>

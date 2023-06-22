<?php
$host = 'localhost';
$dbname = 'eindopdracht';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();

if(isset($_POST['register'])) {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $userpassword = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    $passwordRepeat = htmlspecialchars($_POST['password_repeat'], ENT_QUOTES, 'UTF-8');

    if ($userpassword === $passwordRepeat) {
        $userpassword = password_hash($userpassword, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, userpassword) VALUES (:username, :userpassword)";
        $sth = $conn->prepare($sql);
        $sth->execute(['username' => $username, 'userpassword' => $userpassword]);

        header("Location: login.php");
        exit();
    } else {
        echo "Error: Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registreren</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Registreren</h2>
        <form method="post" action="register.php">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" placeholder="test" required>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required>

            <label for="password_repeat">Herhaal wachtwoord:</label>
            <input type="password" id="password_repeat" name="password_repeat" required>

            <input name="register" type="submit" value="Registreren">
        </form>
    </div>
</body>
</html>

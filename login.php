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

if(isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

    $sql = "SELECT * FROM user WHERE username = :username";
    $sth = $conn->prepare($sql);
    $sth->execute(['username' => $username]);
    $user = $sth->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['userpassword'])) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $loginError = "Incorrect password.";
        }
    } else {
        $loginError = "Username does not exist.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Inloggen</h2>
        <form method="post" action="login.php">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="login" value="Inloggen">
            <div>Nog geen account? <a href="register.php">Maak een nieuwe account aan</a></div>

            <?php if(isset($loginError)): ?>
                <div class="error"><?php echo $loginError; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>

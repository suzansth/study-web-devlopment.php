<?php
session_start();

function get_db_connection() {
    $db = new PDO('sqlite:database.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $db = get_db_connection();
        $stmt = $db->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        $stmt->execute([$username, $password]);

        echo "Registration successful!";
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = get_db_connection();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Login successful!";
        } else {
            echo "Invalid username or password!";
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: kadais.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Authentication</title>
</head>
<body>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>You are logged in!</p>
        <a href="kadais.php?logout=1">Logout</a>
    <?php else: ?>
        <h1>Register</h1>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br>
            <button type="submit" name="register">Register</button>
        </form>

        <h1>Login</h1>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    <?php endif; ?>
</body>
</html>

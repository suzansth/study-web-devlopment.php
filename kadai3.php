<!DOCTYPE html>
<html>
<head>
    <title>User Authentication</title>
</head>
<body>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>You are logged in!</p>
        <a href="kadai3.php?logout=1">Logout</a>
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
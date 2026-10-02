<!DOCTYPE html>
<html>
<head>
    <title>Login - Tasks for Today</title>
</head>
<body>

    <h1>Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= esc(session()->getFlashdata('error')) ?></p>
    <?php endif; ?>

    <form action="/login" method="post">

        <p>
            <label>Username:</label><br>
            <input type="text" name="username" required>
        </p>

        <p>
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </p>

        <button type="submit">Login</button>

    </form>

    <br>

    <a href="/">Back to Today</a>

</body>
</html>
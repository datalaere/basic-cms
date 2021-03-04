<?php include APP_VIEWS . '/frontend/templates/header.php'; ?>

<h2>Login</h2>

<form action="<?php e(APP_URL); ?>/admin/login.php" method="post" autocomplete="off">
    <label for="username">
        Username
        <input type="text" name="username" id="username">
    </label>

    <label for="password">
        Password
        <input type="text" name="password" id="password">
    </label>

    <input type="submit" value="Login">
</form>

<p><a href="<?php e(APP_URL); ?>">Back</a></p>

<?php include APP_VIEWS . '/frontend/templates/footer.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: Gaurav
 * Date: 4/1/2018
 * Time: 4:44 PM
 */
$errors = [];
$missing = [];
if (isset($_POST['submit'])) {
    $expected = ['username', 'password'];
    $required = ['username', 'password'];
    require './includes/login_process.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,700" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="./styles/login-style.css">
    <!--<link href="./styles/styles.css" rel="stylesheet" type="text/css">-->
<title>Login</title>

</head>

<body>

<video autoplay muted loop id="MyVideo" >
    <source src="./media/ear.mp4" type="video/mp4">
</video>

<div class="login-box">
    <img src="./media/user3.png" class="user">
    <h1>Login</h1>
    <?php /*if ($errors || $missing) : */?><!--
        <p>Please enter the details</p>
    --><?php /*endif; */?>
    <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <p>
            <label for="username">Username
                <?php if ($missing && in_array('username', $missing)) : ?>
                    <span class="warning">Enter your username</span>
                <?php endif; ?>
            </label></p>

        <input type="text" name="username" placeholder="username" id="username"
            <?php if ($errors || $missing) {
                    echo 'value="' . htmlentities($username) . '"';
                  }
            ?>>

        <p>
            <label for="password">Password
                <?php if ($missing && in_array('password', $missing)) : ?>
                    <span class="warning">Enter your password</span>
                <?php endif; ?>
            </label></p>

        <input type="password" name="password" placeholder="password" id="password"
            <?php if ($errors || $missing) {
                echo 'value="' . htmlentities($password) . '"';
                }
            ?>>

        <input type="submit" name="submit" id="send" value="Login">
        <a href="#"> Forgot Password</a>
    </form>
</div>

</body>
</html>
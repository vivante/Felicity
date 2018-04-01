<?php
/**
 * Created by PhpStorm.
 * User: Gaurav
 * Date: 4/1/2018
 * Time: 4:44 PM
 */
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['username', 'email'];
    $required = ['username', 'email'];
    require './includes/login_process.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Preserving input</title>
<link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>HeartBeat Hospital</h1>
<?php if ($errors || $missing) : ?>
<p class="warning">Please enter the details</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <p>
    <label for="name">Username:
    <?php if ($missing && in_array('name', $missing)) : ?>
        <span class="warning">Enter your username</span>
    <?php endif; ?>
    </label>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <label for="email">Email:
        <?php if ($missing && in_array('email', $missing)) : ?>
            <span class="warning">Please enter your email address</span>
        <?php endif; ?>
    </label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <input type="submit" name="send" id="send" value="Login">
  </p>
</form>
</body>
</html>
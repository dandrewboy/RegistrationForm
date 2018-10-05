<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="inout-group">
        <label> FirstName</label>
        <input type="text" name="First Name" value="<?php echo $FirstName; ?>">
    </div>
    <div class="inout-group">
        <label> LastName</label>
        <input type="text" name="Last Name" value="<?php echo $LastName; ?>">
    </div>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="Username" value="<?php echo $Username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="inout-group">
        <label> Date of Birth</label>
        <input type="date" name="Date of Birth" value="<?php echo $DateofBirth; ?>">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>
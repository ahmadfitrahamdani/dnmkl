<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.1" />
  <title>login</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="login-form">
    <h2>Login Form</h2>
    <form method="POST" id="form-login" action="login.php">
      <div class="user-box">
        <input type="text" class="box" name="username" required />
        <label for="">Username</label>
        <div class="user-box">
          <input type="password" class="box" name="password" required />
          <label for="">Password</label>
        </div>
      </div>
      <a href="#"><button class="btn">Login</button></a>
    </form>
    <a href="register.php"><button type="submit" class="btn" name="login-user">Register</button></a>
  </div>
</body>
<!-- muklas dani -->

</html>
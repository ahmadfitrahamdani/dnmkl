<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.1" />
  <title>register</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="login-form">
    <h2>Login Form</h2>
    <form method="POST" id="form-login" action="save.php">
      <div class="user-box">
        <input type="text" class="box" name="username" required />
        <label for="">Username</label>
        <div class="user-box">
          <input type="password" class="box" name="password" required />
          <label for="">Password</label>
          <div class="user-box">
            <input type="password" class="box" name="password-confirm" required />
            <label for="">Confirm Password</label>
          </div>
        </div>
      </div>
      <a href="#"><button class="btn">Register</button></a>
    </form>
  </div>
</body>
<!-- muklas dani -->

</html>
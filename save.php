<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
</head>

<body>
  <?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'websitednkl');

  $uid = $_POST['username'];
  $pwd = $_POST['password'];

  $user_check_query = "SELECT * FROM users WHERE username = '$uid' and password = '$pwd' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['username'] === $$uid) {
      array_push($errors, "Username sudah terdaftar");
    }
  } else {
    $query = "INSERT INTO users(username, password) VALUES ('$uid', '$pwd')";
    mysqli_query($db, $query);
  }
  ?>
</body>

</html>
<?php

  // $uid = $_POST['username'];
  // $pwd = $_POST['password'];

  // if ($uid == 'user' and $pwd == 'pass') {
  //   session_start();
  //   $_SESSION['sid'] = session_id();
  //   include 'home.php';
  // } else {
  //   echo "Login Failed, Username atau Password Salah";
  // }

    $db = mysqli_connect('localhost', 'root', '', 'websitednkl');

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // $password = md5($password);
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
      session_start();
      $_SESSION['sid'] = session_id();
      include 'home.php';
    } else {
      echo "username atau password salah";
    }
?>
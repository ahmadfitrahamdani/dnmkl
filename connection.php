<?php

  $hostmysql = "localhost";
  $username = "root";
  $password = "";
  $database = "websitednkl";
  $connection = mysqli_connect($hostmysql, $username, $password, $database);

  if ($connection) {

  } else {
    die ("Koneksi Gagal");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Header -->
  <header>
    <div class="user">
      <img src="img/profile.png" alt="">
      <h3 class="name">Task</h3>
      <p class="post">Pemrograman Web</p>
    </div>

    <nav class="navbar">
      <ul>
        <li> <a href="#home">home</a></li>
        <li> <a href="#about">about</a></li>
        <li> <a href="#gallery">gallery</a></li>
        <li> <a href="#contact">contact</a></li>
        <li> <a href="#users">users</a></li>
      </ul>
    </nav>

  </header>
  <!-- End Header -->

  <!-- Content Section Start -->
  <div class="container">
    <section class="home" id="home">
      <h3>Hello there..</h3>
      <h3 class="name">Kami dari <span>Kelas 3E</span></h3>
      <h3 class="post">Nama Anggota : <span class="typing-text"></span></h3>

      <a href="#"><button class="btn">Kunjungi Profile Kami</button></a>

      <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-discord"></a>
        <a href="#" class="fab fa-telegram"></a>
        <a href="#" class="fab fa-youtube"></a>
      </div>
    </section>

    <!-- About Page -->
    <?php
    include 'about.php';
    ?>
    <!-- End About Page -->
    <!-- Gallery Page -->
    <?php
    include 'gallery.php';
    ?>
    <!-- End Gallery Page -->
    <!-- Contact Page -->
    <?php
    include 'contact.php';
    ?>
    <!-- End Contact Page -->
    <!-- Users Page -->
    <?php
    include 'users.php';
    ?>
    <!-- End Users Page -->

  </div>
  <!-- Content Section End -->

  <!-- typed js link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

  <script>
    var type = new Typed('.typing-text', {
      strings: ['Ahmad Fitra Hamdani', 'Muklas Khoiru Wafa'],
      typeSpeed: 120,
      loop: true
    });
  </script>
  <!-- typed js link -->

</body>

</html>
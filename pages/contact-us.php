<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");

?>

<head>

    <!-- Meta head -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Title -->
    <title>Evently || contact Us</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Bootstrap /JQuarry / Ajax Links  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Page Main CSS File -->
   
    <!-- Page Main CSS File -->
    <link href="../assets/css/contact.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader"></div>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>



    <div class="containernn" name="top">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
Feel free to contact us for any of your worries relative to us or our website
          </p>

          <div class="info">
            <div class="information">
                <i class="bi bi-geo-alt"></i>
              <p>Yaounde Dovv Mendong</p>
            </div>
            <div class="information">
            <i class="bi bi-globe2"></i>
              <p>Www.evently.com</p>
            </div>
            <div class="information">
            <i class="bi bi-telephone"></i>
              <p>+23767038206/679465383</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="#">
                <i class="bi bi-twitter"></i>
              </a>
              <a href="#">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="#">
                <i class="bi bi-linkedin"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
      
    </div>






    <!--  Footer Section -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
    <!--  End Footer Section -->
    

    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>
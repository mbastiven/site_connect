<?php include('../path.php');?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestOnly();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Evently || Register</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
    <!-- //Meta tag Keywords -->

    <!--/Style-CSS -->
    <link rel="stylesheet" href="../assets/css/style55.css" type="text/css" media="all" />
    <!--//Style-CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
</head>

<body>
    <div class="loader"></div>

    <a href="../index.php"><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png" alt="" class="logov"></a>


    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="main-set-close">
                        <span class="bi bi-x-lg"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <a href="<?php echo BASE_URL . '/index.php' ?> "> <img src="https://i.postimg.cc/RCc0nQgK/1a.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Join the Evently community and explore worldwide events . </p>

                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                        <form action="register.php" method="post" enctype="multipart/form-data">
                            <input type="text" class="name" name="username" placeholder="Enter Your Name"
                                value="<?php echo $username; ?>">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email"
                                value="<?php echo $email; ?>">

                            <input type="password" class="password" name="password" placeholder="Enter Your Password"
                                value="<?php echo $password; ?>">
                            <input type="password" class="confirm-password" name="passwordConf"
                                placeholder="Confirm Your Password" value="<?php echo $passwordConf; ?>">
                                <div>
                     <label>Profile Picture</label>
                     <input type="file" name="profile" class="text-input">
                  </div>
                            <button name="register-btn" class="btn" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/jquery.min.js"></script>


</body>

</html>
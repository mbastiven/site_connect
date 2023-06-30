<?php include('../path.php');
include(ROOT_PATH . "/app/controllers/users.php");
guestOnly(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Evently || Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Form" />
    <!-- //Meta tag Keywords -->



    <!--/Style-CSS -->
    <link rel="stylesheet" href="../assets/css/style55.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
                            <a href="<?php echo BASE_URL . '/index.php' ?> "> <img src="https://i.postimg.cc/5yVFSCm7/1b.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Forgot Password</h2>
                        <p>Don't worry enter your email to reset your password. </p>

                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email">


                            <button name="submit" class="btn" type="submit"><a href="change-password.php"> Send Reset
                                    Link</a></button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="change-password.php">Login</a>.</p>
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
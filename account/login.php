<?php
 include('../path.php');
include(ROOT_PATH . "/app/controllers/users.php");
guestOnly();
?>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>


    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
</head>

<body>
    <div class="loader"></div>
    <a href="index.php">
        <div class="jkj">

                <a href="../index.php"><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png" alt="" class="logov"></a>
        </div>   <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    </a>
 


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
                            <a href="<?php echo BASE_URL . '/index.php' ?> "> <img src="https://i.postimg.cc/fTgRwd0G/1c.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p>Let's Continue Our Event Booking Journey . </p>
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                        <form action="login.php" method="post">
                            <input type="email" value="<?php echo $email; ?>" class="email" name="email"
                                placeholder="Enter Your Email">
                            <input type="password" value="<?php echo $password; ?>" class="password" name="password"
                                placeholder="Enter Your Password" style="margin-bottom: 2px;">
                            <p><a href="forgot-password.php"
                                    style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a>
                            </p>
                            <button name="login-btn" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p class="pp">Create Account! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
    <script>
    // $(document).ready(function () {
    //     $("#status-msg").delay(10000).slideUp(300);
    // });

    // setTimeout(function () {
    //     $('#status-msg').fadeOut('fast');
    // }, 30000);
    // setTimeout(function () {
    //     $('.status-msg').remove();
    // }, 30000);
    // $(document).ready(function () {
    //     window.livewire.on('alert_remove', () => {
    //         setTimeout(function () {
    //             $(".alert").fadeOut('fast');
    //         }, 3000); // 3 secs
    //     });
    // });

    var timeout = 1000; // in miliseconds (3*1000)

    $("#status-msg").delay(timeout).fadeOut(2000);
      var timeout = 1000; // in miliseconds (3*1000)

    $('.status-msg').delay(timeout).fadeOut(2000);
</script>
    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
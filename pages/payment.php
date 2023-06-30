<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
userOnly();
?>

<head>
   <title>Evently || Payment</title>
   <!-- Meta tag Keywords -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="UTF-8" />
   <meta name="keywords" content="Login Form" />
   <!-- //Meta tag Keywords -->

   <!--/Style-CSS -->
   <link rel="stylesheet" href="../assets/css/style55.css" type="text/css" media="all" />

   <!--//Fonts -->

   <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
   <!-- Favicons -->
   <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
</head>

<body>
   <div class="loader"></div>
   <a href="index.php">
      <div class="jkj">

         <a href="<?php echo BASE_URL . '/index.php' ?> "><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png" alt=""
               class="logov"></a>
      </div>
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
                     <a href="<?php echo BASE_URL . '/index.php' ?> "> <img src="https://i.postimg.cc/FshLf0z1/1t.png"
                           alt=""></a>
                  </div>
               </div>
               <div class="content-wthree">
                  <h2>Booking Process</h2>
                  <p>Complete your events booking and get notify </p>
                  <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                  <form action="" method="">


                     <input type="text" name="title" class="text-input" placeholder="Your Name">

                     <input type="email" value="" class="email" name="email" placeholder="Enter Your Email">
                     <input type="number" name="phone" placeholder="Phone Number">
                     <label for="">N° Of Ticket </label>
                        <input type="number" name="tickets">

                        <div class="io">
                           <tr>
                              <td>
                                 Total Amount
                              </td>
                              <td id="amount" style="font-weight:bold;font-size:18px">
                                 -> FCFA 500
                              </td>
                           </tr>
                        </div>
                        <a href="process-payment.php">
                           <div>

                              <button name="login-btn" class="btn" type="submit"><a href="process-payment.php">Proceed
                                    To Payment</a></button>
                           </div>
                        </a>
                  </form>

               </div>
            </div>
         </div>
         <!-- //form -->
      </div>
   </section>

    
 <style>
     .io {
         margin-bottom: 10px;
      }
 </style>

   <script src="../assets/js/loader.js"></script>
   <script src="../assets/js/main.js"></script>
</body>

</html>
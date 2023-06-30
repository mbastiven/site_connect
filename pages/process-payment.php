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

   <!-- Favicons -->
   <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

   <!--/Style-CSS -->
   <link rel="stylesheet" href="../assets/css/style55.css" type="text/css" media="all" />

 <!-- Vendor CSS Files -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rossorigin="anonymous">
   <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                     <a href="<?php echo BASE_URL . '/index.php' ?> "> <img src="https://i.postimg.cc/hjxdmrVQ/1d.png"
                           alt=""></a>
                  </div>
               </div>
               <div class="content-wthree">
                  <h2>Payment Process</h2>
                  <p>Complete your events booking and get notify </p>
                  <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                  <form action="create.php" method="post">

                     <div class="col-md-8 col-lg-9">
                        <div class="">
                           <div class="">
                              <ul class="nav nav-tabs navtab-custom">

                                 <li class="active">
                                    <a href="#mtn" data-toggle="tab" aria-expanded="true">
                                       <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                       <span class="hidden-xs">Mtn Money</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#orange" data-toggle="tab" aria-expanded="false">
                                       <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                       <span class="hidden-xs">Orange Money</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#paypal" data-toggle="tab" aria-expanded="false">
                                       <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                       <span class="hidden-xs">Paypal</span>
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content">

                                 <div class="tab-pane active" id="mtn">
                                     <div class="io"></div>
                                    <div class="row">
                                        
                                       <input type="number" name="phone" placeholder="Phone Number">
                                       <div class="io"></div>
                                       <p>Confirm the transaction with your security code</p>
                                       <a href="buy.php"> <button name="login-btn" class="btn" type="submit">Confirm
                                             Payment</button></a>
                                             
                                    </div>

                                 </div>
                                 <div class="tab-pane" id="orange">
                                    <div class="io"></div>
                                    <div class="row">
                                    
                                       <input type="number" name="phone" placeholder="Phone Number">
                                       <div class="io"></div>
                                       <p>Confirm the transaction with your security code</p>
                                       <a href="buy.php"> <button name="login-btn" class="btn" type="submit">Confirm
                                             Payment</button></a>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="paypal">
                                    <div class="io"></div>
                                    <div class="row">
                                        
                                       <input type="email" value="<?php echo $email; ?>" class="email" name="email"
                                          placeholder="Enter Your Email">
                                       <input type="number" name="phone" placeholder="Phone Number">
<div class="io"></div>
                                       <p>Confirm the transaction with your security code</p>
                                       <a href="buy.php"> <button name="login-btn" class="btn" type="submit">Confirm
                                             Payment</button></a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>

                  </form>


               </div> <!-- end col -->




            </div>
         </div>
      </div>
      <!-- //form -->

   </section>

   <style>
      .io {
         margin-bottom: 16px;
      }
      a{
        color: #18b277 !important;
        font-size: 18px;
      }
   </style>

   <script src="../assets/js/loader.js"></script>
   <script src="../assets/js/main.js"></script>
</body>

</html>
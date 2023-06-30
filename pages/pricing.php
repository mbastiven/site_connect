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
    <title>Evently || Pricing Plan</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <!-- Bootstrap /JQuarry / Ajax Links  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Page Main CSS File -->
 
    <!-- Page Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader"></div>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


    <section>
  <div class="container py-5">

    <!-- FOR DEMO PURPOSE -->
    <header class="text-center mb-5 text-white">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <h1>Evently Pricing Table</h1>
          
          <p>Choose Your best Suit Subscription<br> And Join The Home Of Events</p>
        </div>
      </div>
    </header>
    <!-- END -->



    <div class="row text-center align-items-end">
    <div class="my-space"></div>
      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow"> <a href='https://postimg.cc/pyxCwP4V' target='_blank'><img src='https://i.postimg.cc/pyxCwP4V/free.png' border='0' alt='free'/></a>
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Le Njoh</h1>
        
          <h2 class="h1 font-weight-bold">$00<span class="text-small font-weight-normal ml-2">/ Ever</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left">
            
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 2 Events </li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 35 % Bookings Charges</li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Categories & Tags</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Speakers & Panelist</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Event Schedule</del>
            </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Direct Booking Payment </del>
            </li>
            <li class="mb-3 text-muted">
                <i class="fa fa-times mr-2"></i>
              <del>Communicators[spreaders] </del>
            </li>
          </ul>
          <a href="process-payment.php" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
        </div>
      </div>
      <!-- END -->

      <div class="my-space"></div>
      <!-- Pricing Table-->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow">
        <a href='https://postimg.cc/30KZmZm0' target='_blank'><img src='https://i.postimg.cc/30KZmZm0/premium.png' border='0' alt='premium'/></a>
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Pro</h1>
          <h2 class="h1 font-weight-bold">$399<span class="text-small font-weight-normal ml-2">/ Month</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 12 Events</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> 25 % Bookings Charges</li>
            <li class="mb-3">
           
              <i class="fa fa-check mr-2 text-primary"></i> 3 Categories & Tags </li>
            <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Speakers & Panelist</del> </li>
              <li class="mb-3 text-muted">
              <i class="fa fa-times mr-2"></i>
              <del>Event Schedule</del> </li>
              <li class="mb-3 text-muted">
                <i class="fa fa-times mr-2"></i>
              <del>Direct Booking Payment </del>
            </li>
            <li class="mb-3 text-muted">
                <i class="fa fa-times mr-2"></i>
              <del>Communicators[spreaders] </del>
            </li>
          </ul>
          <a href="process-payment.php" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
        </div>
      </div>
      <!-- END -->
<div class="my-space"></div>

      <!-- Pricing Table-->
      <div class="col-lg-4">
        <div class="bg-white p-5 rounded-lg shadow"><a href='https://postimg.cc/N5JGmfmd' target='_blank'><img src='https://i.postimg.cc/N5JGmfmd/space-ship.png' border='0' alt='space-ship'/></a>
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Enterprise</h1>
          
          <h2 class="h1 font-weight-bold">$899<span class="text-small font-weight-normal ml-2">/ Year</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Unlimited Events</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Unlimited Categories & Tags</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> % Bookings Charges</li>
            <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Speakers & Panelist</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i> Event Schedule</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Direct Booking Payment</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Communicators[spreaders]</li>
              <li class="mb-3">
              <i class="fa fa-check mr-2 text-primary"></i>Featured Listings</li>
          </ul>

          <a href="process-payment.php" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
        </div>
      </div>
      <!-- END -->

    </div>
  </div>
</section>
    <!--  Footer Section -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
    <!--  End Footer Section -->



<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.rounded-lg {
  border-radius: 1rem !important;
  width: 104%;
 
}
.mx-auto h1{
    color:   #197551!important;
    border-left: 1px solid   #197551!important;
}
.mx-auto p{
    color:   #197551!important;
}
.rounded-lg img {
width: 50px;
margin-bottom: 10px;
}
.col-lg-4{
    right: 1%;
    margin-top: -30px;
}
.text-primary {
    color:  #18b277 !important;
}


.btn-primary:hover{

}
.btn-primary:visited,
.btn-primary:link,
.btn-primary:active,
.btn-primary:active,
.btn-primary:focus  {
    color: #fff;
    background-color:  black!important;
    border-color:  #197551!important;
}
.btn:hover{
  background-color:  black!important;
}
.btn:visited,
.btn:link,
.btn:active,
.btn:active,
.btn:focus  {
    color: #fff;
    background-color: #197551!important;
    border-color: #197551!important;
}


.btn-block, .p-2 ,shadow .rounded-pill: :hover{
  background-color:  black!important;
}
.btn-block, .p-2 ,shadow .rounded-pill: :visited,
.btn-block, .p-2 ,shadow .rounded-pill: :link,
.btn-block, .p-2 ,shadow .rounded-pill: :active,
.btn-block, .p-2 ,shadow .rounded-pill: :focus {
    color: #fff;
    background-color:  black !important;
    border-color:  #197551 !important;
}
.btn-block:active {
  color: #fff;
    background-color:  black!important;
}
.p-2 :active{
  color: #fff;
    background-color:  #197551!important;
}
.rounded-pill :active{
  color: #fff;
    background-color:  #197551!important;
}
.btn-primary {
    color: #fff;
    background-color: #18b277;
    border-color: #18b277;
}
.btn-primary:hover,
 {
    color: #fff;
    background-color:  #197551!important;
    border-color:  #197551!important;
}
.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 8rem;
  height: 6px;
  border-radius: 1rem;
background-color: #18b277 !important;
}

.text-uppercase {
  letter-spacing: 0.2em;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
  background: #00B4DB;
  background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
  background: linear-gradient(to right, #0083B0, #00B4DB);
  color: #514B64;
  min-height: 100vh;
}

</style>






    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>
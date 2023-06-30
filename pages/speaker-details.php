<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");

?>
<html>

<head>

  <!-- Meta head -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Title -->
  <title>Evently || Speakers Details</title>

  <!-- Favicons -->

  <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

  <!-- Vendor CSS Files -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

  <!-- Bootstrap /JQuarry / Ajax Links  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    rossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
    crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
    crossorigin="anonymous"></script>

  <!-- Page Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="loader"></div>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


  <section class="section about-section gray-bg" id="about">

    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-lg-6">
          <div class="about-text go-to">
            <h3 class="dark-color">Brenden Legros</h3>
            <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
            <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating
              stylish,
              modern websites, web services and online stores. My passion is to design digital user experiences
              through
              the bold interface and meaningful interactions.</p>
            <div class="col-md-6">
              <div class="media">
                <H2>TAGS</H2>
                CYBERSECURITY


              </div>
            </div>
            <div class="row about-list">

              <div class="col-md-6">

                <div class="media">
                  <label>Birthday</label>
                  <p>4th april 1998</p>


                </div>
                <div class="media">
                  <label>Age</label>
                  <p>22 Yr</p>
                </div>
                <div class="media">
                  <label>Residence</label>
                  <p>Canada</p>
                </div>
                <div class="media">
                  <label>Address</label>
                  <p>California, USA</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="media">
                  <label>E-mail</label>
                  <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                      data-cfemail="a6cfc8c0c9e6c2c9cbc7cfc888c5c9cb">[email&#160;protected]</a></p>
                </div>
                <div class="media">
                  <label>Phone</label>
                  <p>820-885-3321</p>
                </div>
                <div class="media">
                  <label>Skype</label>
                  <p>skype.0404</p>
                </div>
                <div class="media">
                  <label>Freelance</label>
                  <p>Available</p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-avatar">
            <img src="https://i.postimg.cc/xT8Sp9Pf/6.jpg" title="" alt="">
          </div>
        </div>
      </div>
      <div class="counter">
      <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h3>500</h3>
                                <p class="m-0px font-w-600">Events
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h3>15000</h3>
                                <p class="m-0px font-w-600">Bookings</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h3>850</h3>
                                <p class="font-w-600">Event Creator</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h3>190</h3>
                                <p class="m-0px font-w-600">Partners</p>
                            </div>
                        </div>
                    </div>
      </div>
    </div>
  </section>
  <style type="text/css">
    .section {
      margin-top: 50px;
      margin-bottom: 50px
    }

    .gray-bg {
      background-color: #f5f5f5;
    }

    img {
      max-width: 80%;
    }

    img {
      vertical-align: middle;
      border-style: none;
    }

    .about-text h6{
      color: black !important;
    }
    /* About Me 
---------------------*/
    .about-text h3 {
      font-size: 45px;
      font-weight: 700;
      margin: 0 0 6px;
      color: #197551;
    }

    @media (max-width: 767px) {
      .about-text h3 {
        font-size: 35px;
      }
    }

    .about-text h6 {
      font-weight: 600;
      margin-bottom: 15px;
      color: black;

    }

    @media (max-width: 767px) {
      .about-text h6 {
        font-size: 18px;
      }
    }

    .about-text p {
      font-size: 18px;
      max-width: 450px;
    }

    .about-text p mark {
      font-weight: 600;
      color: #197551;
    }

    .about-list {
      padding-top: 10px;
    }

    .about-list .media {
      padding: 5px 0;
    }

    .about-list label {
      color: #18b277;
      font-weight: 600;
      width: 88px;
      margin: 0;
      position: relative;
    }

    .about-list label:after {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      right: 11px;
      width: 1px;
      height: 12px;
      background: #18b277;
      -moz-transform: rotate(15deg);
      -o-transform: rotate(15deg);
      -ms-transform: rotate(15deg);
      -webkit-transform: rotate(15deg);
      transform: rotate(15deg);
      margin: auto;
      opacity: 0.5;
    }

    .about-list p {
      margin: 0;
      font-size: 15px;
    }

    @media (max-width: 991px) {
      .about-avatar {
        margin-top: 30px;
      }
    }

    .about-section .counter {
      margin-top: 25px;
      padding: 22px 20px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 30px#18b277;
    }

    .about-section .counter .count-data {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .about-section .counter .count {
      font-weight: 700;
      color: #18b277;
      margin: 0 0 5px;
    }

    .about-section .counter p {
      font-weight: 600;
      margin: 0;
    }

    mark {
      background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
      background-size: 100% 3px;
      background-repeat: no-repeat;
      background-position: 0 bottom;
      background-color: transparent;
      padding: 0;
      color: currentColor;
    }

    .theme-color {
      color: #fc5356;
    }

    .dark-color {
      color: #18b277;
    }
  </style>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <!-- End #main -->

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  <script src="../assets/js/main.js"></script>
  <!-- Vendor JS Files -->

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Page Main JS File -->
  <script src="../assets/js/loader.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
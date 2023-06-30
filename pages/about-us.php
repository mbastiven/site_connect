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
    <title>Evently || About Us</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <!-- Vendor CSS Files -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <!-- Bootstrap /JQuarry / Ajax Links  -->
  

    <!-- Page Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />




</head>

<body>
    <div class="loader"></div>

    <section class="landing-page" name="top"></a>
        <div class="lp-container4">
            <div class=" ty">
                <div class="navbar">
                    <a href="<?php echo BASE_URL . '/index.php' ?>"><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png" alt=""
                            class="logo"></a>
                    <nav>
                        <ul>
                            <li><a href="<?php echo BASE_URL . '/index.php' ?> ">Home</a></li>
                            <li><a href="<?php echo BASE_URL . '/pages/ongoing.php' ?> ">Ongoing</a></li>
                            <li><a href="<?php echo BASE_URL . '/pages/all-events.php' ?> ">All Events</a>
                            <li><a href="<?php echo BASE_URL . '/pages/memories.php' ?> ">Memories</a></li>
                            </li>
                      
                            <li><a href="<?php echo BASE_URL . '/admin/events/create.php' ?> "><button class="nbtn1">Add
                                        Event</button></a></li>

                        </ul>
                    </nav>
                    <?php include(ROOT_PATH . "/app/includes/menu.php"); ?>
                    <div class="lp-row" onclick="hide()">
                        <div class="lp-col1">
                            <div class="text-box1">
                                <p>Know More</p>
                                <h1 class="yy1">On us</h1>
                                <h3 class="ee">Home > All About-Us</h3>
                            </div>


                        </div>
                        <div class="lp-col1">
                            <img src="https://i.postimg.cc/Hnr6HpdQ/back.png" class="small-icon5">
       <div class="social-icons1">
                <a href=""></a><img src="https://i.postimg.cc/D0NYbSBj/instagram.png"></a>
                <a href=""></a><img src="https://i.postimg.cc/RqrLBKPB/facebook-1.png"></a>
                <a href=""></a><img src="https://i.postimg.cc/fTkGTNBq/twitter-1.png"></a>
                <a href=""></a><img src="https://i.postimg.cc/X7ysz72W/dribble.png"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <section class="jj1">

    </section>
    <main id="main" class="main-page">
        <!-- ======= Speaker Details Sectionn ======= -->
        <section id="speakers-details">
            <div class="container">
                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Know More About Us And On Oor Services</p>
                </div>

                <div class="row">


                    <div class="col-md-6">
                        <div class="details">
                            <h2>Our History And Achivements</h2>

                            <p>Voluptatem perferendis sed assumenda voluptatibus. Laudantium molestiae sint.
                                Doloremque
                                odio
                                dolore
                                dolore sit. Quae labore alias ea omnis ex expedita sapiente molestias atque. Optio
                                voluptas
                                et.</p>

                            <p>Aboriosam inventore dolorem inventore nam est esse. Aperiam voluptatem nisi molestias
                                laborum
                                ut. Porro
                                dignissimos eum. Tempore dolores minus unde est voluptatum incidunt ut aperiam.</p>

                            <p>Et dolore blanditiis officiis non quod id possimus. Optio non commodi alias sint
                                culpa
                                sapiente nihil
                                ipsa magnam. Qui eum alias provident omnis incidunt aut. Eius et officia corrupti
                                omnis
                                error vel quia
                                omnis velit. In qui debitis autem aperiam voluptates unde sunt et facilis.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://i.postimg.cc/R02tq8Jz/1r.png" alt="Speaker 1" class="img-fluid">
                    </div>

                </div>
            </div>

        </section>
        <section class="section about-section gray-bg" id="about">
            <div class="container">
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
        <!-- End Single Speaker-->
    </main>



            <!--  Footer Section -->

            <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
  <!--  End Footer Section -->


    <style type="text/css">

.action1 .menu .kk li {
    align-items: left;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  display: flex;
  justify-content:left;
  list-style: none;
    padding: 7px -50px;
  
  margin-top: 8px;
  margin-bottom: 5px;
  margin-left: 5px;
}


        /* Sections Header
--------------------------------*/
        .main-page {
            margin-top: -40px;
        }

        .section-header {
            margin-bottom: 60px;
            position: relative;
            padding-bottom: 20px;
        }

        .section-header::before {
            content: "";
            position: absolute;
            display: block;
            width: 70px;
            height: 5px;
            background: #18b277;
            bottom: 0;
            left: calc(50% - 29px);
        }

        .section-header h2 {
            font-size: 36px;
            text-transform: uppercase;
            text-align: center;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .section-header p {
            text-align: center;
            padding: 0;
            margin: 0;
            font-size: 18px;
            font-weight: 500;
            color: #9195a2;
        }

        .section-with-bg {
            background-color: #f6f7fd;
        }

        .details h2 {
            color: #197551 !important;
        }

        .about-section .counter {
            margin-top: -50px;
            margin-bottom: 80px;
            padding: 22px 2px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px #18b277;
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
            color: #20247b;
        }
    </style>


    <!-- End #main -->
  
    <script src="../assets/js/main.js"></script>
    <!-- Vendor JS Files -->



    <!-- Page Main JS File -->
    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
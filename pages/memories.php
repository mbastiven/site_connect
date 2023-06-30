<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
userOnly();
?>
<html>
<head>

    <!-- Meta head -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Title -->
    <title>Evently || Memories</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

      <!-- Vendor CSS Files -->

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/><script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- Bootstrap /JQuarry / Ajax Links  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Page Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>


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
                        <li><a href="<?php echo BASE_URL . '/pages/all-events.php' ?> " >All Events</a></li>
                        <li><a href="<?php echo BASE_URL . '/pages/memories.php' ?> ">Memories</a></li>
                            </li>
                            <li><a href="<?php echo BASE_URL . '/admin/events/create.php' ?> "><button class="nbtn1">Add
                                        Event</button></a></li>

                        </ul>
                    </nav>
                    <?php include(ROOT_PATH . "/app/includes/menu2.php"); ?>
                    <div class="lp-row" onclick="hide()">
                        <div class="lp-col1">
                            <div class="text-box1">
                                <p>Into Our Great</p>
                                <h4 class="yy1">Moments</h1>
                                <h3 class="ee">Home > Memories</h3>
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

  <div class="rrr">
   </div>
    <section class="container">
        <h1>Highly Booked Events </h1>
        <div class="row">
            <article class="card fl-left">
                <section class="date">
                    <time datetime="23th feb">
                        <span>239</span><span>Booking</span>
                    </time>
                </section>
                <section class="card-cont">
                    <div class="yy"><img src="https://i.postimg.cc/N0H8XR6r/verified-3.png" alt="">
                    </div>
                    <small>dj khaled</small>

                    <h3>live in sydney</h3>
                    <div class="even-date">
                        <i class="fa fa-calendar"></i>
                        <time>
                            <span>wednesday 28 december 2014</span>
                            <span>08:55pm to 12:00 am</span>
                        </time>
                    </div>
                    <div class="even-info">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            nexen square for people australia, sydney
                        </p>
                    </div>
                    <a href="#">Sold Out</a>
                </section>
            </article>
            <article class="card fl-left">
                <section class="date">
                    <time datetime="23th feb">
                        <span>185</span><span>Booking</span>
                    </time>
                </section>
                <section class="card-cont">
                    <div class="yy"><img src="https://i.postimg.cc/N0H8XR6r/verified-3.png" alt="">
                    </div>
                    <small>dj khaled</small>

                    <h3>corner obsest program</h3>
                    <div class="even-date">
                        <i class="fa fa-calendar"></i>
                        <time>
                            <span>wednesday 28 december 2014</span>
                            <span>08:55pm to 12:00 am</span>
                        </time>
                    </div>
                    <div class="even-info">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            nexen square for people australia, sydney
                        </p>
                    </div>
                    <a href="#">Sold Out</a>
                </section>
            </article>
        </div>
        <div class="row">
            <article class="card fl-left">
                <section class="date">
                    <time datetime="23th feb">
                        <span>200</span><span>Booking</span>
                    </time>
                </section>
                <section class="card-cont">
                    <div class="yy"><img src="https://i.postimg.cc/N0H8XR6r/verified-3.png" alt="">
                    </div>
                    <small>dj khaled</small>
                    <h3>music kaboom festivel</h3>
                    <div class="even-date">
                        <i class="fa fa-calendar"></i>
                        <time>
                            <span>wednesday 28 december 2014</span>
                            <span>08:55pm to 12:00 am</span>
                        </time>
                    </div>
                    <div class="even-info">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            nexen square for people australia, sydney
                        </p>
                    </div>
                    <a href="#">Sold Out</a>
                </section>
            </article>
            <article class="card fl-left">
                <section class="date">
                    <time datetime="23th feb">
                        <span>133</span><span>Booking</span>
                    </time>
                </section>
                <section class="card-cont">
                    <small>dj khaled</small>
                    <div class="yy"><img src="https://i.postimg.cc/N0H8XR6r/verified-3.png" alt="">
                    </div>

                    <h3>hello dubai festivel</h3>
                    <div class="even-date">
                        <i class="fa fa-calendar"></i>
                        <time>
                            <span>wednesday 28 december 2014</span>
                            <span>08:55pm to 12:00 am</span>
                        </time>
                    </div>
                    <div class="even-info">
                        <i class="fa fa-map-marker"></i>
                        <p>
                            nexen square for people australia, sydney
                        </p>
                    </div>
                    <a href="#">Sold Out</a>
                </section>
            </article>
        </div>
      
        <div class="link1-btn">
            <button class="button1" style="vertical-align:middle"><span> <a
                        href="<?php echo BASE_URL . '/pages/memories.php' ?> "> View
                        More</a></span></a></button>
        </div>

    
        <section class="most-emotive">
            <h1>Most Emotive </h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="gal-detail thumb">
                        <a href="#" class="image-popup" title="Screenshot-2">
                            <img src="https://i.postimg.cc/RFrmFb2j/23.jpg" class="thumb-img"
                                alt="work-thumbnail">
                        </a>

                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="gal-detail thumb">
                        <a href="#" class="image-popup" title="Screenshot-2">
                            <img src="https://i.postimg.cc/4dh32cTT/17.jpg" class="thumb-img"
                                alt="work-thumbnail">
                        </a>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gal-detail thumb">
                        <a href="#" class="image-popup" title="Screenshot-2">
                            <img src="https://i.postimg.cc/MKwGtXPh/19.jpg" class="thumb-img"
                                alt="work-thumbnail">
                        </a>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="gal-detail thumb">
                        <a href="#" class="image-popup" title="Screenshot-2">
                            <img src="https://i.postimg.cc/G2kCsxC9/20.jpg" class="thumb-img"
                                alt="work-thumbnail">
                        </a>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gal-detail thumb">
                        <a href="#" class="image-popup" title="Screenshot-2">
                            <img src="https://i.postimg.cc/RFrmFb2j/23.jpg" class="thumb-img"
                                alt="work-thumbnail">
                        </a>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="gal-detail thumb">
                        <a href="#" class="image-popup" title="Screenshot-2">
                            <img src="https://i.postimg.cc/G2jfC7RP/25.jpg" class="thumb-img"
                                alt="work-thumbnail">
                        </a>

                    </div>
                   
                </div>
                
            </div>
           
        </section>
        <div class="hh">
         <div class="link1-btn">
                <button class="button1" style="vertical-align:middle"><span> <a
                            href="<?php echo BASE_URL . '/pages/memories.php' ?> "> View
                            More</a></span></a></button>
            </div>
            </div>
<div class="space">
        <section class="by-users">
             <section class="jj" >
 <h1>By Event Creators</h1>
            <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/G2jfC7RP/25.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                   <a href="#pop">  <h4 class="m-b-5" >Yafe</h4></a>
                                 <p class="text-muted ">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/5yNdBg6N/9.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Sago</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/SsGbY3Qv/15.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Fomaric</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/J01mTmd8/6.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Douala Art Festival</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/HLXgdjqH/1.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Gallery Jos</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/SsGbY3Qv/15.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Douala Mall</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/90J2KSv7/18.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Villab Events</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box">
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="https://i.postimg.cc/tTbHTpb6/5.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">Canal Olympia</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                              
                            </div>
                        </div> 
                    </div> 
                  
                    
                 
        </section>
       </div>
       <div class="hh1">
        <div class="link1-btn">
                <button class="button1" style="vertical-align:middle"><span> <a
                            href="<?php echo BASE_URL . '/pages/memories.php' ?> "> View
                            More</a></span></a></button>
            </div> </div>
 </section>

        <section class="single-users">
            <div class="h3">
            <h1>Top Event Creator</h1></div>
                       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="text-center card-box" >
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 center-block">
                                    <img src="../assets/images/event images/memory-section/1.jpg"
                                        class="img-circle img-thumbnail" alt="profile-image">
                                </div>

                                <div class="" name="pop">
                                    <h4 class="m-b-5">John J. Doe</h4>
                                    <p class="text-muted">@johndoe</p>
                                </div>

                                <button type="button"
                                    class="btn btn-success btn-sm w-sm waves-effect m-t-10 waves-light">Follow</button>
                                <button type="button"
                                    class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                                <div class="text-left m-t-40">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span
                                            class="m-l-15">Yafe</span></p>
                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(123)
                                            123 1234</span></p>
                                    <p class="text-muted font-13"><strong>Email :</strong> <span
                                            class="m-l-15">Yafe.com</span></p>
                                    <p class="text-muted font-13"><strong>Location :</strong> <span
                                            class="m-l-15">Yaounde</span></p>
                                </div>

                                <ul class="social-links list-inline m-t-30" >
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                            data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                            data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                            data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->


                    <div class="col-md-8 col-lg-9">
                        <div class="">
                            <div class="">
                                <ul class="nav nav-tabs navtab-custom">

                                    <li class="active">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true">
                                            <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                            <span class="hidden-xs">GALLERY</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false">
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                            <span class="hidden-xs">All Events</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane active" id="profile">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="gal-detail thumb">
                                                    <img src="../assets/images/event images/memory-section/11.jpg"
                                                        class="thumb-img" alt="work-thumbnail">
                                                    </a>
                                                    <h4 class="text-center">Gallary Image</h4>
                                                    <div class="ga-border"></div>
                                                    <p class="text-muted text-center"><small>Photography</small></p>
                                                </div>
                                          

                                    </div>
                                    <div class="tab-pane" id="settings">

                                    </div>
                                </div>
                            </div>
                        </div>
                  
                    </div> <!-- end col -->
                  
                </div>
                <div class="hh">
                  <div class="link1-btn">
                <button class="button1" style="vertical-align:middle"><span> <a
                            href="<?php echo BASE_URL . '/pages/memories.php' ?> "> View
                            More</a></span></a></button>
            </div>
            </div>
                <!-- end row -->
            </div>
          
        </section>
            <!--  Footer Section -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
  <!--  End Footer Section -->
       
        <style>
            .h3{
                 margin-left: 199px;
                  margin-bottom: 50px;
            }
            .hh{
                margin-top: 15px;
                margin-left: -360px;
            }
            .hh1{
                margin-top: 15px;
                margin-left: -150px;
            }
            .jj{
                margin-top: 10px;
                margin-bottom: 35px;
                
            }
            .card-box {
                padding: 20px;
                box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.06), 0 2px 0 0 rgba(0, 0, 0, 0.02);
                -webkit-border-radius: 5px;
                border-radius: 5px;
                -moz-border-radius: 5px;
                background-clip: padding-box;
                margin-bottom: 20px;
                background-color: #ffffff;
            }

            .header-title {
                text-transform: uppercase;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: 0.04em;
                line-height: 16px;
                margin-bottom: 8px;
            }

            .social-links li a {
                -webkit-border-radius: 50%;
                background: #EFF0F4;
                border-radius: 50%;
                color: #7A7676;
                display: inline-block;
                height: 30px;
                line-height: 30px;
                text-align: center;
                width: 30px;
            }

            /* ===========
   Gallery
 =============*/
            .portfolioFilter a {
                -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
                -moz-transition: all 0.3s ease-out;
                -ms-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
                -webkit-transition: all 0.3s ease-out;
                box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
                color: #333333;
                padding: 5px 10px;
                display: inline-block;
                transition: all 0.3s ease-out;
            }

            .portfolioFilter a:hover {
                background-color: black;
                color: #ffffff;
            }

            .portfolioFilter a.current {
                background-color: black;
                color: #ffffff;
            }

            .thumb {
                background-color: #ffffff;
                border-radius: 3px;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
                margin-top: 30px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                width: 100%;
            }

            .thumb-img {
                border-radius: 2px;
                overflow: hidden;
                width: 100%;
            }

            .gal-detail h4 {
                margin: 16px auto 10px auto;
                width: 80%;
                white-space: nowrap;
                display: block;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .gal-detail .ga-border {
                height: 3px;
                width: 40px;
                background-color: black;
                margin: 10px auto;
            }




            .tabs-vertical-env .tab-content {
                background: #ffffff;
                display: table-cell;
                margin-bottom: 30px;
                padding: 30px;
                vertical-align: top;
            }

            .tabs-vertical-env .nav.tabs-vertical {
                display: table-cell;
                min-width: 120px;
                vertical-align: top;
                width: 150px;
            }

            .tabs-vertical-env .nav.tabs-vertical li.active>a {
                background-color: #ffffff;
                border: 0;
            }

            .tabs-vertical-env .nav.tabs-vertical li>a {
                color: #333333;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-weight: 500;
                white-space: nowrap;
            }

            .nav.nav-tabs>li.active>a {
                background-color: #ffffff;
                border: 0;
            }

            .nav.nav-tabs>li>a {
                background-color: transparent;
                border-radius: 0;
                border: none;
                color: #333333 !important;
                cursor: pointer;
                line-height: 50px;
                font-weight: 500;
                padding-left: 20px;
                padding-right: 20px;
               font-family: 'Oswald', sans-serif !important;
            }

            .nav.nav-tabs>li>a:hover {
                color: black !important;
            }

            .nav.tabs-vertical>li>a {
                background-color: transparent;
                border-radius: 0;
                border: none;
                color: #333333 !important;
                cursor: pointer;
                line-height: 50px;
                padding-left: 20px;
                padding-right: 20px;
            }

            .nav.tabs-vertical>li>a:hover {
                color: black !important;
            }

            .tab-content {
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
                color: #777777;
            }
a{
    color: unset;
    text-decoration: none;
}
            .nav.nav-tabs>li:last-of-type a {
                margin-right: 0px;
            }

            .nav.nav-tabs {
                border-bottom: 0;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            }

            .navtab-custom li {
                margin-bottom: -2px;
            }

            .navtab-custom li a {
                border-top: 2px solid transparent !important;
            }

            .navtab-custom li.active a {
                border-top: 2px solid black !important;
            }

            .nav-tab-left.navtab-custom li a {
                border: none !important;
                border-left: 2px solid transparent !important;
            }

            .nav-tab-left.navtab-custom li.active a {
                border-left: 2px solid black !important;
            }

            .nav-tab-right.navtab-custom li a {
                border: none !important;
                border-right: 2px solid transparent !important;
            }

            .nav-tab-right.navtab-custom li.active a {
                border-right: 2px solid black !important;
            }

            .nav-tabs.nav-justified>.active>a,
            .nav-tabs.nav-justified>.active>a:hover,
            .nav-tabs.nav-justified>.active>a:focus,
            .tabs-vertical-env .nav.tabs-vertical li.active>a {
                border: none;
            }

            .nav-tabs>li.active>a,
            .nav-tabs>li.active>a:focus,
            .nav-tabs>li.active>a:hover,
            .tabs-vertical>li.active>a,
            .tabs-vertical>li.active>a:focus,
            .tabs-vertical>li.active>a:hover {
                color: #18b277 !important;
            }

            .nav.nav-tabs+.tab-content {
                background: #ffffff;
                margin-bottom: 20px;
                padding: 20px;
            }

            .progress.progress-sm .progress-bar {
                font-size: 8px;
                line-height: 5px;
            }
        </style>
        <style type="text/css">
            .fl-left {
                float: left
            }

            .fl-right {
                float: right
            }

            h1 {
                text-transform: uppercase;
                font-weight: 900;
                border-left: 10px solid #18b277;
                padding-left: 10px;
                margin-bottom: 30px
            }

            .row {
                overflow: hidden
            }

            .card {
                display: table-row;
                width: 49%;
                background-color: #18b277;
                color: #fff;
                /* color: #18b277; */
                margin-bottom: 12px;
                font-family: 'Oswald', sans-serif;
                text-transform: uppercase;
                border-radius: 4px;
                position: relative
            }

            .card+.card {
                margin-left: 2%
            }

            .date {
                display: table-cell;
                width: 25%;
                position: relative;
                text-align: center;
                border-right: 2px dashed #fff
            }

            .date:before,
            .date:after {
                content: "";
                display: block;
                width: 30px;
                height: 30px;
                background-color: #f5f5f5;
                position: absolute;
                top: -15px;
                right: -15px;
                z-index: 1;
                border-radius: 50%;

            }

            .date:after {
                top: auto;
                bottom: -15px
            }

            .date time {
                display: block;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%)
            }

            .date time span {
                display: block
            }

            .date time span:first-child {
                color: black;
                font-weight: 600;
                font-size: 250%
            }

            .date time span:last-child {
                text-transform: uppercase;
                font-weight: 600;
                margin-top: -10px
            }

            .card-cont {
                display: table-cell;
                width: 75%;
                font-size: 85%;
                padding: 10px 10px 30px 50px
            }

            .card-cont h3 {
                color: black;
                font-size: 130%
            }

            .card-cont small {
                color: black;

            }

            .row:last-child .card:last-of-type .card-cont h3 {
                text-decoration: line-through
            }

            .card-cont>div {
                display: table-row
            }

            .card-cont .even-date i,
            .card-cont .even-info i,
            .card-cont .even-date time,
            .card-cont .even-info p {
                display: table-cell
            }

            .card-cont .even-date i,
            .card-cont .even-info i {
                padding: 5% 5% 0 0
            }

            .card-cont .even-info p {
                padding: 30px 50px 0 0
            }

            .card-cont .even-date time span {
                display: block
            }

            .card-cont a {
                display: block;
                text-decoration: none;
                width: 80px;
                height: 30px;
                background-color: black;
                color: #18b277;
                text-align: center;
                line-height: 30px;
                border-radius: 2px;
                position: absolute;
                right: 10px;
                bottom: 10px
            }

            .card-cont .yy {
                top: 25px;
                display: block;
                line-height: 30px;
                border-radius: 50px;
                position: absolute;
                right: 10px;

            }

            .card-cont .yy img {
                top: -20px;
                width: 35px;
                display: block;

                position: absolute;
                right: 10px;

            }

            .card-cont a :hover {
                background-color: red !important;
                color: #18b277 !important;
            }

            .row:last-child .card:first-child .card-cont a {
                background-color: royalblue
            }

            .row:last-child .card:last-child .card-cont a {
                background-color: red
            }

            @media screen and (max-width: 860px) {
                .card {
                    display: block;
                    float: none;
                    width: 100%;
                    margin-bottom: 10px
                }

                .card+.card {
                    margin-left: 0
                }

                .card-cont .even-date,
                .card-cont .even-info {
                    font-size: 75%
                }
            }

            .rrr{
                margin-top:25px;
                margin-bottom: 50px;;
            }
        </style>

        <script src="../assets/js/loader.js"></script>
        <script src="../assets/js/main.js"></script>
</body>

</html>
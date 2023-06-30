<?php
include("../path.php");
// include(ROOT_PATH . "/app/controllers/categories.php");
include(ROOT_PATH . "/app/controllers/events.php");


$eventTitle = 'Search';
if (isset($_POST['search-term'])) {
    $eventTitle = "You searched for '" . $_POST['search-term'] . "'";
    $events = searchEventsByName($_POST['search-term']);
} else {
    $events = getPublishedEvents();
}
if (isset($_GET['id'])) {
    $eventsz = getAllEventsById($_GET['id']);
    //$event = selectOne('events', ['id' => $_GET['id']]);
    // dd($event);
}
$categories = selectAll('categories');
?>

<html>

<head>
    <!-- Meta head -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php foreach ($eventsz as $key => $event): ?>
    <?php endforeach; ?>
    <!-- Title -->
    <title>
        Evently ||
        <?php echo $event['title']; ?>
    </title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <!-- Vendor CSS Files -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Bootstrap /JQuarry / Ajax Links  -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   

    <!-- Page Main CSS File -->
    <link href="../assets/css/modals.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader"></div>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="jj4">
    
    </div>
  
    <!-- TEvent Describtion -->
    <section class="new-hero">
        <div class="rowxx">
        <div class="columnxx left">
        <div class="gallery-box1xx">
        <div class="containermp">
      <div class="product_image_gallery">
        <div class="product-img">  
          <img id="myImage"
            src="<?php echo BASE_URL . '/assets/images/event images/' . $event['image'] ?>"
            alt="Product Image"
            class="product-main-img"
            data-index="1"
          />
          
          <button class="downloader" data-download="myImage" ><i class="bi bi-download" data-download= "myImage"></i></button>
        </div>
        <div class="product-thumbnail-container">
          <div class="product-thumbnail active">
            <img  id="myImage1"
              src="<?php echo BASE_URL . '/assets/images/event images/memory-section/30.jpg' ?>"
              alt="thumbnail Image"
              data-index="1"
            />
          </div>
          <div class="product-thumbnail">
            <img id="myImage2"
              src="<?php echo BASE_URL . '/assets/images/event images/memory-section/30d.jpg' ?>"
              alt="thumbnail Image"
              data-index="2"
            />
          </div>
          <div class="product-thumbnail">
            <img  id="myImage3"
              src="<?php echo BASE_URL . '/assets/images/event images/memory-section/30b.jpg' ?>"
              alt="thumbnail Image"
              data-index="3"
            />
          </div>
          <div class="product-thumbnail">
            <img id="myImage4"
              src="<?php echo BASE_URL . '/assets/images/event images/memory-section/30c.jpg' ?>"
              alt="thumbnail Image"
              data-index="4"
            />
          </div>
          <div class="product-thumbnail">
            <img  id="myImage5"
              src="<?php echo BASE_URL . '/assets/images/event images/memory-section/30e.jpg' ?>"
              alt="thumbnail Image"
              data-index="5"
            />
          </div>
    
        </div>
      </div>
    </div> </div> </div>
 <div class="jj3">

 </div>
    
    <div class="columnxx right">
                <section class="page-banner">

                    <div class="banner-container">
                        <div class="left-box">

                            <div class="breadcrumbs" role="navigation">
                                <small>
                                    <a href="../index.php">Home</a><span>>

                                        <a href="">
                                            <?php echo $event['name']; ?>
                                        </a>>

                                        <span>
                                            <?php echo $event['title']; ?>

                                        </span>
                                    </span>
                                </small>

                                <h1 class="banner-title">

                                    <?php echo $event['title']; ?>
                                </h1>

                                <div class="post-details">

                                    <div class="author-wrapper">
                                        <div class="author-wrapperx">
                                            <a href="<?php echo BASE_URL . '/users.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                                class="tdnone">
                                                <img class="toti"
                                                    src="<?php echo BASE_URL . '/assets/images/users/' . $event['profile'] ?>"
                                                    alt="">
                                            </a>

                                        </div></a>


                                    </div>
                                    <div class="name-wrapper">


                                        </a>
                                        <div class="news-grid-txt">
                                            <h6 class="klk">


                                                <h2> <a href="<?php echo BASE_URL . '/users.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                                        class="tdnone"><?php echo $event['username']; ?></a></h2>
                                                <a href="<?php echo BASE_URL . '/pages/all-events.php?location=' . $event['location'] ?>#my-nid"
                                                    class="tdnone">
                                                    <i class="bi bi-circle-square" aria-hidden="true"></i>
                                                    250 Bookings
                                                </a>
                                                <ul>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>#my-nid"
                                                        class="tdnone"><span>
                                                            <?php echo $event['name']; ?>
                                                        </span></a>
                                                    <a class="tdnone">
                                                        <li><i class="bi bi-clock" aria-hidden="true"></i>
                                                            <?php echo date('j M g:i a', strtotime($event['event_day'])); ?>
                                                        </li>
                                                    </a>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?location=' . $event['location'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-geo-alt" aria-hidden="true"></i>
                                                            <?php echo $event['location']; ?>
                                                        </li>
                                                    </a>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?price=' . $event['price'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-tags" aria-hidden="true"></i>
                                                            <?php echo $event['price']; ?>
                                                        </li>
                                                    </a>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?type=' . $event['type'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-person-video3" aria-hidden="true"></i>
                                                            <?php echo $event['type']; ?>
                                                        </li>
                                                    </a>
                                                </ul>

                                            </h6>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="social-linksm">



                                        <img class="bookimg" src="https://i.postimg.cc/Bb2MtmP6/heart-3.png" id="bannerImage"
                                            onclick="changeImage('https://i.postimg.cc/XvKhD7Yq/heart.png )">
                                        <img class="view-modal"
                                            src="https://i.postimg.cc/50NP7BrK/share-3.png">
                                        <a
                                            href="<?php echo BASE_URL . '/pages/booking.php?id=' ?><?php echo $event['id']; ?>">
                                            <button class="nbtn12"> Follow</button></a>
                                        <a
                                            href="<?php echo BASE_URL . '/pages/booking.php?id=' ?><?php echo $event['id']; ?>">
                                            <button class="nbtn12">Book Now</button></a>
                                    </div>
                                    <div class="popup">
                                        <header>
                                            <span>#Evently Spread</span>
                                            <div class="close"><i class="bi bi-x-lg"></i></div>
                                        </header>
                                        <div class="content">
                                            <p>Share this link via</p>
                                            <ul class="icons">
                                                <a href="www.facebook/evently.com"><i class="bi bi-facebook"></i></a>
                                                <a href="www.twitter/evently.com"><i class="bi bi-twitter"></i></a>
                                                <a href="www.instagram/evently.com"><i class="bi bi-instagram"></i></a>
                                                <a href="www.whatsapp/evently.com"><i class="bi bi-whatsapp"></i></a>
                                                <a href="www.telegram/evently.com"><i class="bi bi-telegram"></i></a>
                                            </ul>
                                            <p>Or copy link</p>
                                            <div class="field">
                                                <i class="bi bi-link-45deg"></i>
                                                <input type="text" readonly
                                                    value="evently/pages/single-event.php?id=<?php echo $event['id']; ?>">
                                                <button>Copy</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                </section>
            </div>
        </div>
    </section>
    <section class="jj1">

</section>
    <div class="se-content clearfix">
        <div class="main1-content">
            <h1 class="recent-title">What is cybersecurity ?</h1>
            <div class="primary-font">

                <?php echo html_entity_decode($event['description']); ?>


            </div>

            <!-- TEvent Author bio -->

            <div class="author-bio">
                <div class="profile-wrapper">
                    <a href="<?php echo BASE_URL . '/users.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                        class="tdnone">
                        <img src="<?php echo BASE_URL . '/assets/images/users/' . $event['profile'] ?>" alt="">
                    </a>
                </div>
                <div class="bio-wrapper">
                    <a href="" class="link author-name">


                        <h3>
                            <a href="<?php echo BASE_URL . '/users.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                class="tdnone">
                                <?php echo $event['username']; ?></a>
                        </h3>

                    </a>
                    <div class="primary-font1">
                        <?php if (empty($event['id']) || 1 !== $event['role_id']): ?>
                            <?php echo 'Event Creator'; ?>
                        <?php else: ?>
                            <?php echo 'Administrator'; ?>
                        <?php endif; ?><a href="">

                            <img src="https://i.postimg.cc/QCQNSKyt/verified-4.png" alt="">
                        </a>
                    </div>
                    </h6>
                    <div class="social0-links">
                    <a href="">
                            <img src="https://i.postimg.cc/kGbRC5h3/facebook.png" alt="">
                        </a>
                        <a href="">
                            <img src="https://i.postimg.cc/rmbR74jN/whatsapp-1.png" alt="">
                        </a>
                        <a href="">
                            <img src="https://i.postimg.cc/pTyn0Cfd/twitter.png" alt="">
                        </a>

                        <a href="">
                            <img src="https://i.postimg.cc/htq3QyxT/instagram-1.png" alt="">
                        </a>
                        <a href="">
                            <img src="https://i.postimg.cc/7brGZypC/youtube.png" alt="">
                        </a>
                        <a href="">
                            <img src="https://i.postimg.cc/qvdyk8Tm/linkedin.png" alt="">
                        </a>
                       
                    </div>
                </div>
            </div>
            <!-- ======= Speakers Section ======= -->
            <div class="section-header">
                <h2>Event Speakers</h2>
                <p>Meet Our Renouns Panalist for our meetup</p>
            </div>
            <div class="flip-container">
                <div class="flip-inner-container">
                    <div class="flip-front">
                        <img src="https://i.postimg.cc/Kzb20L0w/1.jpg" />
                    </div>
                    <div class="flip-back">
                        <div class="profile-image">
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "><img
                                    src="https://i.postimg.cc/Kzb20L0w/1.jpg" /></a>
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> ">

                                <h2>Mba Stiven</h2>

                            </a>
                            <p>Cyber Security Analyst | Event Creator | Youtuber</p>
                            <ul>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-telegram"></i></a>
                            </ul>

                        </div>
                        <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "> <button type="button"
                                class="btn btn-outline-success">Know More </button></a>
                    </div>

                </div>
                <div class="flip-inner-container">
                    <div class="flip-front">
                        <img src="https://i.postimg.cc/9fYm5JwC/a.jpg" />
                    </div>
                    <div class="flip-back">
                        <div class="profile-image">
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?>"><img
                                    src="https://i.postimg.cc/9fYm5JwC/a.jpg" /></a>
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> ">
                                <h2>Brenden Legros</h2>
                            </a>
                            <p>Cyber Security Expert| Event Creator | Youtuber</p>
                            <ul>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-telegram"></i></a>
                            </ul>
                        </div>
                        <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "> <button type="button"
                                class="btn btn-outline-success">Know More </button></a>
                    </div>
                </div>
                <div class="flip-inner-container">
                    <div class="flip-front">
                        <img src="https://i.postimg.cc/vB8QQf59/b.jpg" />
                    </div>
                    <div class="flip-back">
                        <div class="profile-image">
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "><img
                                    src="https://i.postimg.cc/vB8QQf59/b.jpg" /></a>
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> ">
                                <h2>Jack Christiansen</h2>
                            </a>
                            <p>Web Developer | Event Creator | Youtuber</p>
                            <ul>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-telegram"></i></a>
                            </ul>
                        </div>
                        <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "> <button type="button"
                                class="btn btn-outline-success">Know More </button></a>
                    </div>
                </div>
                <div class="flip-inner-container">
                    <div class="flip-front">
                        <img src="https://i.postimg.cc/L8ZFRv7G/4.jpg" />
                    </div>
                    <div class="flip-back">
                        <div class="profile-image">
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "><img
                                    src="https://i.postimg.cc/L8ZFRv7G/4.jpg" /></a>
                            <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> ">
                                <h2>Noncio</h2>
                            </a>
                            <p>Web Developer | Event Creator | Youtuber</p>
                            <ul>
                                                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-telegram"></i></a>
                            </ul>
                        </div>
                        <a href="<?php echo BASE_URL . '/pages/speaker-details.php' ?> "> <button type="button"
                                class="btn btn-outline-success">Know More </button></a>
                    </div>
                </div>

            </div>
            <!-- ======= Schedule Section ======= -->
            <section id="schedule" class="section-with-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Event Schedule</h2>
                        <p>Here is our meet-up schedule</p>
                    </div>

                    <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Day 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Day 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">Day 3</a>
                        </li>
                    </ul>

                    <h3 class="sub-heading">Together we are going to go all over what is cybersecurity its threats
                        safety
                        and how or where to learn cybersecurity</h3>

                    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                        <!-- Schedule Day 1 -->
                        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>09:30 AM</time></div>
                                <div class="col-md-10">
                                    <h4>Registration</h4>
                                    <p>Admission of participant into the meetup using QR CODEs</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>10:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/Kzb20L0w/1.jpg" alt="Brenden Legros">
                                    </div>
                                    <h4>Corporate Cyber Security Services<span>Brenden Legros</span></h4>
                                    <p>What is cybersecurity?</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>11:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/mkXWZnTW/2.jpg" alt="Hubert Hirthe">
                                    </div>
                                    <h4>What is Spam and a Phishing Scams.<span>Hubert Hirthe</span></h4>
                                    <p>The scale of the cyber threat</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>12:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/26xfM6J6/3.jpg" alt="Cole Emmerich">
                                    </div>
                                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                    <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>02:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/L8ZFRv7G/4.jpg" alt="Jack Christiansen">
                                    </div>
                                    <h4>Corporate Cyber Security Services<span>Jack Christiansen</span></h4>
                                    <p>The scale of the cyber threat</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>03:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/3JqQPzLg/5.jpg" alt="Alejandrin Littel">
                                    </div>
                                    <h4>Cyber safety tips - protect yourself<span>Alejandrin Littel</span></h4>
                                    <p>The scale of the cyber threat</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>04:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/xT8Sp9Pf/6.jpg" alt="Willow Trantow">
                                    </div>
                                    <h4>Cyber Security Awareness Training for Employees<span>Willow Trantow</span></h4>
                                    <p>The scale of the cyber threat</p>
                                </div>
                            </div>

                        </div>
                        <!-- End Schdule Day 1 -->

                        <!-- Schdule Day 2 -->
                        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
                            <div class="row schedule-item">
                                <div class="col-md-2"><time>10:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/Kzb20L0w/1.jpg" alt="Brenden Legros">
                                    </div>
                                    <h4>The scale of the cyber threat <span>Brenden Legros</span></h4>
                                    <p>Cyber safety tips - protect yourself against cyberattacks.</p>
                                </div>
                            </div>
                            <div class="row schedule-item">
                                <div class="col-md-2"><time>11:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/mkXWZnTW/2.jpg" alt="Hubert Hirthe">
                                    </div>
                                    <h4>Enterprise Cyber Security for Industries.<span>Hubert Hirthe</span></h4>
                                    <p>Enterprise Cyber Security for Industries.</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>12:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/26xfM6J6/3.jpg" alt="Cole Emmerich">
                                    </div>
                                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                    <p>Cyber Security Awareness Training for Employees.</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>02:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/L8ZFRv7G/4.jpg" alt="Jack Christiansen">
                                    </div>
                                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                    <p>Corporate Cyber Security Services</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>03:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/3JqQPzLg/5.jpg" alt="Alejandrin Littel">
                                    </div>
                                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                    <p>Corporate Cyber Security Services</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>04:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/xT8Sp9Pf/6.jpg" alt="Willow Trantow">
                                    </div>
                                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                    <p>Corporate Cyber Security Services</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Schdule Day 2 -->

                        <!-- Schdule Day 3 -->
                        <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>10:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/mkXWZnTW/2.jpg" alt="Hubert Hirthe">
                                    </div>
                                    <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                                    <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
                                </div>
                            </div>
                            <div class="row schedule-item">
                                <div class="col-md-2"><time>11:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/26xfM6J6/3.jpg" alt="Cole Emmerich">
                                    </div>
                                    <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                                    <p>Cyber Security for your Home Devices</p>
                                </div>
                            </div>
                            <div class="row schedule-item">
                                <div class="col-md-2"><time>12:00 AM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/Kzb20L0w/1.jpg" alt="Brenden Legros">
                                    </div>
                                    <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                                    <p>What is Spam and a Phishing Scams.</p>
                                </div>
                            </div>

                            <div class="row schedule-item">
                                <div class="col-md-2"><time>02:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/L8ZFRv7G/4.jpg" alt="Jack Christiansen">
                                    </div>
                                    <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                                    <p>What is Spam and a Phishing Scams</p>
                                </div>
                            </div>
                            <div class="row schedule-item">
                                <div class="col-md-2"><time>03:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/3JqQPzLg/5.jpg" alt="Alejandrin Littel">
                                    </div>
                                    <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                                    <p>What is Spam and a Phishing Scams</p>
                                </div>
                            </div>
                            <div class="row schedule-item">
                                <div class="col-md-2"><time>04:00 PM</time></div>
                                <div class="col-md-10">
                                    <div class="speaker">
                                        <img src="https://i.postimg.cc/xT8Sp9Pf/6.jpg" alt="Willow Trantow">
                                    </div>
                                    <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                                    <p>What is Spam and a Phishing Scams</p>
                                </div>
                            </div>

                        </div>
                        <!-- End Schdule Day 2 -->

                    </div>

                </div>

            </section>

            <!-- RElated Events-->

            <div class="recent-title1">
                <div class="section-header">
                    <h2>You May Also Like </h2>

                </div>
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="news-slider" class="owl-carousel">
                                    <!-- 6 -->
                                    <?php foreach ($events as $key => $event): ?>
                                        <div class="news-grid1">
                                            <div class="news-grid-image"><img
                                                    src="<?php echo BASE_URL . '/assets/images/event images/' . $event['image'] ?>"
                                                    alt="">
                                                <div class="news-grid-box1">
                                                    <h1>
                                                        <?php echo date('j ', strtotime($event['event_day'])); ?>
                                                    </h1>
                                                    <p>
                                                        <?php echo date(' M', strtotime($event['event_day'])); ?>
                                                    </p>
                                                    <p>
                                                        <?php echo date('g:i a', strtotime($event['event_day'])); ?>
                                                    </p>
                                                </div>
                                                <div class="wishlist">
                                                    <img class="hhr"
                                                        src="https://i.postimg.cc/Bb2MtmP6/heart-3.png"
                                                        id="mypicture"
                                                        onClick="document.getElementById('mypicture').src = 'https://i.postimg.cc/XvKhD7Yq/heart.png';">
                                                    <img class=" view-modal"
                                                        src="https://i.postimg.cc/50NP7BrK/share-3.png">

                                                </div>
                                            </div>
                                            <div class="news-grid-txt">
                                                <a href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>#my-nid"
                                                    class="tdnone"><span>
                                                        <?php echo $event['name']; ?>

                                                    </span></a>
                                                <h2> <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                        class="tdnone">
                                                        <?php echo $event['title']; ?></a></h2>
                                                <ul> <a href="<?php echo BASE_URL . '/pages/all-events.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-person-circle" aria-hidden="true"></i>
                                                            <?php echo $event['username']; ?>
                                                        </li>
                                                    </a>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?location=' . $event['location'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-geo-alt" aria-hidden="true"></i>
                                                            <?php echo $event['location']; ?>
                                                        </li>
                                                    </a>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?price=' . $event['price'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-tags" aria-hidden="true"></i>
                                                            <?php echo $event['price']; ?>
                                                        </li>
                                                    </a>
                                                    <a href="<?php echo BASE_URL . '/pages/all-events.php?type=' . $event['type'] ?>#my-nid"
                                                        class="tdnone">
                                                        <li><i class="bi bi-person-video3" aria-hidden="true"></i>
                                                            <?php echo $event['type']; ?>
                                                        </li>
                                                    </a>
                                                </ul>
                                                <?php echo html_entity_decode(substr($event['description'], 0, 58) . '....'); ?>
                                                <div class="booking-link">
                                                    <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                        class="listing-btn">Read
                                                        More...</a>
                                                </div>
                                                <div class="popup">
                                                    <header>
                                                        <span>#Evently Spread</span>
                                                        <div class="close"><i class="bi bi-x-lg"></i></div>
                                                    </header>
                                                    <div class="content">
                                                        <p>Share this link via</p>
                                                        <ul class="icons">
                                                            <a href="www.facebook/evently.com"><i
                                                                    class="bi bi-facebook"></i></a>
                                                            <a href="www.twitter/evently.com"><i
                                                                    class="bi bi-twitter"></i></a>
                                                            <a href="www.instagram/evently.com"><i
                                                                    class="bi bi-instagram"></i></a>
                                                            <a href="www.whatsapp/evently.com"><i
                                                                    class="bi bi-whatsapp"></i></a>
                                                            <a href="www.telegram/evently.com"><i
                                                                    class="bi bi-telegram"></i></a>
                                                        </ul>
                                                        <p>Or copy link</p>
                                                        <div class="field">
                                                            <i class="bi bi-link-45deg"></i>
                                                            <input type="text" readonly
                                                                value="evently/pages/single-event.php?id=<?php echo $event['id']; ?>">
                                                            <button>Copy</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="<?php echo BASE_URL . '/users.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                                    class="tdnone">
                                                    <div class="action2">
                                                        <div class="profile">
                                                            <img src=" <?php echo BASE_URL . '/assets/images/users/' . $event['profile'] ?>"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar1">
            <div class="section search1">
                <h2 class="section-title1">
                    <?php echo $eventTitle; ?>
                </h2>
                <form action="all-events.php#my-id" method="post">
                    <input type="text" name="search-term" class="text-input1" placeholder="Search.........">
                </form>
            </div>

            <div class="section categories">
                <h2 class="section-title1">Categories</h2>
                <ul>

                    <?php foreach (array_slice($categories, 0, 8) as $key => $category): ?>
                        <li><a
                                href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $category['id'] . '&name=' . $category['name'] ?>#my-nid"><?php
                                           echo $category['name']; ?>
                            </a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="section popular ">
                <h2 class="section-title1">Higly Booked Events</h2>
                <?php foreach (array_slice($events, 0, 18) as $ev): ?>
                    <div class="eventr clearfix"> <a
                            href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $ev['id']; ?>"
                            class="tdnone">
                            <img src=" <?php echo BASE_URL . '/assets/images/event images/' . $ev['image']; ?>" alt="">


                            <?php echo substr($ev['title'], 0, 61) . '..'; ?></a>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!-- Vendor JS Files -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>



    <!-- Page Main JS File -->
    <script>
        const dowlLoadLinks = document.querySelectorAll("[data-download]");
        dowlLoadLinks.forEach(button => {
            const id = button.dataset.download;
            const image = document.getElementById(id);
            const a = document.createElement("a");
            a.href = image.src;
            a.download = "";
            a.style.display = "none";

            button.addEventListener("click", () => {
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            });
        });   
        </script>

    <script>
   
let product_img = document.querySelector('.product-img img');
let product_thumbnail = document.querySelectorAll('.product-thumbnail');

product_thumbnail.forEach((product) => {
  product.addEventListener('click', () => {
    product_thumbnail.forEach((product) => {
      product.classList.remove('active');
    });
    product.classList.add('active');

    let img = product.querySelector('img').getAttribute('src');
    let index = product.querySelector('img').getAttribute('data-index');

    product_img.setAttribute('src', img);
    product_img.setAttribute('data-index', index);

    product_img.classList.add('product-down-animation');
    setTimeout(() => {
      product_img.classList.remove('product-down-animation');
    }, 500);
  });
});
</script>
    <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/main.js"></script>
    <style>
        

.containermp {
  max-width: 55rem;

}
.product-img {
  width: 100%;
  height:450px;
  position: relative;
  margin-bottom: 0.5rem;
  background: inherit;
  overflow: hidden;
}
.product-img img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  position: absolute;
  left: 50%;
  transform: translateX(-50%) rotate(0deg);
}
.product-img .downloader{
    background-color: unset;
    /* background-color: transparent; */
    outline: none;
    border: none;
left: 95%;
top: 92%;
    position:relative;
}
.product-img .downloader i{
    background-color: unset;
    cursor: pointer;
    position: relative;
    font-size: 24px;
    font-weight: 200px;
    color: #18b277;
}
@media (max-width: 630px) {
  .product-img {
    height: 30rem;
  }
  .product-img img {
    width: 90%;
    height: 100%;
    padding: 1rem;
  }
}
@media (max-width: 375px) {
  .product-img {
    height: 25rem;
  }
}

.product-img img[data-index='2'],
.product-img img[data-index='6'] {
  transform: translateX(-50%) rotate(0deg);
}
.product-thumbnail-container {
  display: grid;

  grid-template-columns: repeat(5, 1fr);
  justify-content: center;
  gap: -10rem;
  margin-bottom: 15rem;
  border: 2px #18b277 solid;
}

.product-thumbnail {
  background: white;
  border: 0.2rem solid white;
  padding: 0.5rem;
  border-radius: 0.5rem;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  opacity: 0.7;
}
.product-thumbnail.active {
  border: 0.1rem solid #18b277;;
  opacity: 1;
}
.product-thumbnail img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  border: none;
}
.product-down-animation {
  animation: left 0.5s ease;
}
@keyframes left {
  0% {
    left: -100%;
  }
  -100% {
    left: 0%;
  }
}
        .popup header {
            padding-bottom: 20px;
            border-bottom: 1px solid #ebedf9 !important;
        }
    </style>
</body>

</html>
<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/events.php");


$eventTitle = '';
$eventst = getPublishedEvents();

if (isset($_POST['search-btn'])) {
    $e_title = $_POST['search-term-name'];
    $e_category = $_POST['search-term-category'];
    $e_date = $_POST['search-term-date'];

    $eventTitle = "Similar event search results";
    $events = searchAllAndCategory($e_title, $e_category, $e_date);

} else if (isset($_POST['search-term'])) {
    $eventTitle = "You searched for '" . $_POST['search-term'] . "'";
    $events = searchEventsByName($_POST['search-term']);
    if (count($events) == 0) {
        $eventTitle = "No results found for '" . $_POST['search-term'] . "'";
    } else {
        $eventTitle = "Searched result for '" . $_POST['search-term'] . "'";
    }
} else if (isset($_GET['c_id'])) {

    $events = getEventsByCategoryId($_GET['c_id']);
    if (count($events) == 0) {
        $eventTitle = "No results found for ' " . $_GET['name'] . " '";
    } else {
        $eventTitle = "Results for events  under ' " . $_GET['name'] . " '";
    }  
} else if (isset($_GET['u_id'])) {

    $events = getAllEventsFromUserName($_GET['u_id']);
    if (count($events) == 0) {
        $eventTitle = "No results created by found  ' " . $_GET['username'] . " '";
    } else {
        $eventTitle = "Results for events created by ' " . $_GET['username'] . " '";
    }
}
else if (isset($_GET['location'])) {

    $events = getAllEventsByLocation($_GET['location']);
    //dd($_GET['location']);
    if (count($events) == 0) {
        $eventTitle = "No results found in ' " . $_GET['location'] . " '";
    } else {
        $eventTitle = "Results for events found in ' " . $_GET['location'] . " '";
    }
} else if (isset($_GET['price'])) {

    $events = getAllEventsByPrice($_GET['price']);
    if (count($events) == 0) {
        $eventTitle = "No ' " . $_GET['price'] . " ' results found";
    } else {
        $eventTitle = "Results for ' " . $_GET['price'] . " '  events ";
    }
}
else if (isset($_GET['type'])) {

    $events = getAllEventsByType($_GET['type']);
    if (count($events) == 0) {
        $eventTitle = "No results found in ' " . $_GET['type'] . " '";
    } else {
        $eventTitle = "Results for ' " . $_GET['type'] . " ' ";
    }
} else {
    $events = getPublishedEventsTop();
}
if (isset($_GET['latest'] ) )  {

    $events = getSponsoredEvents();
    if (count($events) == 0) {
        $eventTitle = "No filter results for' " . $_GET['latest'] . " '";
    } else {
        $eventTitle = "Filtered events by ' " . $_GET['latest'] . "Latest '";
    }
} 
 if (isset($_GET['top'])) {

    $events = getSMostViewedEvents();
    if (count($events) == 0) {
        $eventTitle = "No filter results for' " . $_GET['top'] . " '";
    } else {
        $eventTitle = "Filtered events by ' " . $_GET['top'] . " Top '";
    }
}
 if (isset($_GET['sponsored'])) {

    $events = getSponsoredEvents();
    if (count($events) == 0) {
        $eventTitle = "No filter results for' " . $_GET['sponsored'] . " '";
    } else {
        $eventTitle = "Filtered events by ' " . $_GET['sponsored'] . " Sponsored '";
    }
}
 if (isset($_GET['views'])) {

    $events = getSMostViewedEvents();
    if (count($events) == 0) {
        $eventTitle = "No filter results for' " . $_GET['views'] . " '";
    } else {
        $eventTitle = "Filtered events by ' " . $_GET['views'] . " Top Views '";
    }
}
 if (isset($_GET['most'])) {

    $events =  getSponsoredEvents();
    if (count($events) == 0) {
        $eventTitle = "No filter results for' " . $_GET['most'] . " '";
    } else {
        $eventTitle = "Filtered events by ' " . $_GET['most'] . " Highly Booked '";
    }
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

    <!-- Title -->
    <title>Evently || All Events</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Bootstrap /JQuarry / Ajax Links  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Page Main CSS File --><link href="../assets/css/subscription.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="../assets/css/modals.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Page Loader -->
    <div class="loader"></div>
    <!-- End Of Page Loader -->

    <!-- Landing Section -->

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
                            <li><a href="<?php echo BASE_URL . '/pages/all-events.php' ?> " class="open">All Events</a>
                            </li>
                            <li><a href="<?php echo BASE_URL . '/pages/memories.php' ?> ">Memories</a></li>
                            
                            <li><a href="<?php echo BASE_URL . '/admin/events/create.php' ?> "><button class="nbtn1">Add
                                        Event</button></a></li>

                        </ul>
                    </nav>
                    <?php include(ROOT_PATH . "/app/includes/menu.php"); ?>
                    <div class="lp-row" onclick="hide()">
                        <div class="lp-col1">
                            <div class="text-box1">
                                <p>We Now</p>
                                <h1 class="yy">BookIT</h1>
                                <h3 class="ee">Home > All Events</h3>
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

    <!-- End Of Landing Section -->

    <!-- Search Section -->
    <section class="search">
        <div class="containers">
            <section class="jj1">
                <div class="rows">
                    <div class="col-md-12">
                        <form class="form_book" method="post" action="all-events.php#my-id">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="date">EVENT NAME</label>
                                    <input class="book_n" name="search-term-name" placeholder="Art exhibition"
                                        type="text">
                                </div>
                                <div class="col-md-3">
                                    <label class="date">EVENT Category</label>
                                    <input class="book_n" name="search-term-category" placeholder="Programming"
                                        type="text">

                                </div>
                                <div class="col-md-3">
                                    <label class="date">EVENT DATE</label>
                                    <input class="book_n" name="search-term-date" type="date">
                                </div>
                                <div class="col-md-3">
                                    <button class="book_btn" name="search-btn">Search Event</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </section>

    <!-- End Of Search Section -->

    <section class="jj1">
    </section>

    <!--  Feature Section -->

    <section class="feature-events">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <?php foreach (array_slice($eventst, 0, 8) as $key => $event): ?>
                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="<?php echo BASE_URL . '/assets/images/event images/' . $event['image'] ?> " alt="">
                        </div>
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">
                                <?php echo date('j M g:i a', strtotime($event['event_day'])); ?>
                                <a href="<?php echo BASE_URL . '/pages/all-events.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                            class="tdnone">
                                <i class="bi bi-person-fill" aria-hidden="true"></i>
                                <?php echo $event['username']; ?></a>
                                <a href="<?php echo BASE_URL . '/pages/all-events.php?location=' . $event['location']?>#my-nid"
                                            class="tdnone">
                                <i class="bi bi-geo-alt" aria-hidden="true"></i>
                                <?php echo $event['location']; ?></a>
                                <a href="<?php echo BASE_URL . '/pages/all-events.php?price=' . $event['price']  ?>#my-nid"
                                            class="tdnone">
                                <i class="bi bi-tags" aria-hidden="true"></i>
                                <?php echo $event['price']; ?></a>
                                <a href="<?php echo BASE_URL . '/pages/all-events.php?type=' . $event['type'] ?>#my-nid"
                                            class="tdnone">
                                <i class="bi bi-person-video3" aria-hidden="true"></i>
                                <?php echo $event['type']; ?></a>
                            </span>
                            <div class="blog-slider__title">
                                <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>">
                                    <?php echo $event['title']; ?></a>
                            </div>
                            <div class="blog-slider__text">
                                <?php echo html_entity_decode(substr($event['description'], 0, 80) . '....'); ?>

                            </div>
                            <a href="<?php echo BASE_URL . '/pages/booking.php?id=' ?><?php echo $event['id']; ?>"
                                class="blog-slider__button">Book
                                Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </section>
    <section class="jj2">
    </section>
    <!--  End Feature Section -->
<section>
<div class=".new-wp">
<input type="checkbox" id="toggle">
  
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon bi bi-x-circle"></i>
    </label>
    <div class="icon"><i class="bi bi-envelope"></i></div>
    <div class="content">
      <header>Become a Subscriber</header>
      <p>Subscribe to our blog and get the latest updates straight to your inbox.</p>
    </div>
    <form action="subscription.php" method="POST">
    <?php 
    $userEmail = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
      $userEmail = $_POST['email']; //getting user entered email
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
        $subject = "Thanks for Subscribing us - Evently";
        $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
        $sender = "From: infos.evently@gmail.com
        ";
        //php function to send mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing us." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btnop">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>
      </div>
    </form>
    <div class="text">We do not share your information.</div>
  </div></div>
</section>
    <!--  All Events Section -->

    <section class="events1" id="my-id">
        <div class="upcomingEvents">
            <div class="title-heading">


                <h2 class="hd1" id="my-nid">
                    All Upcoming Events
                </h2>
            </div>
            <h1 class="titlex">
                
                <?php echo $eventTitle; ?>
            </h1>
            <div class="news-wrap">
          
                <div class="container">
                
                <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Filter Your Events By :
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="<?php echo BASE_URL . '/pages/all-events.php?latest' ?>#my-nid" class="dropdown-item  tdnone" ><a href="<?php echo BASE_URL . '/pages/all-events.php?latest' ?>#my-nid" class="dropdown-item  tdnone" >Latest</a>

    <a href="<?php echo BASE_URL . '/pages/all-events.php?top' ?>#my-nid" class="dropdown-item  tdnone" >Top</a>
    <a href="<?php echo BASE_URL . '/pages/all-events.php?most' ?>#my-nid" class="dropdown-item  tdnone" >Most Booked</a>
    <a href="<?php echo BASE_URL . '/pages/all-events.php?views' ?>#my-nid" class="dropdown-item  tdnone" >Views</a>
    <a href="<?php echo BASE_URL . '/pages/all-events.php?sponsored' ?>#my-nid" class="dropdown-item  tdnone" >Sponsored</a>
   
  </div>
</div>
                    <div class="row">
                        <?php
                        $i = 0; foreach ($events as $key => $event):
                            if (++$i > 50)
                                break;
                            ?>


                            <div class="col-lg-4">

                                <div class="news-grid">

                                    <div class="news-grid-image"><img
                                            src="<?php echo BASE_URL . '/assets/images/event images/' . $event['image'] ?> "
                                            alt="">
                                        <div class="news-grid-box">
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
                                            <img class=" view-modal"src="https://i.postimg.cc/50NP7BrK/share-3.png">
                                            
                                        </div>
                                    </div>
                                    <div class="news-grid-txt">
                                        <a href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>#my-nid"
                                            class="tdnone"><span>
                                                <?php echo $event['name']; ?>

                                            </span></a>
                                        <h2>
                                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="tdnone">
                                                <?php echo substr($event['title'], 0, 61) . '..'; ?></a>
                                        </h2>
                                      <ul>  <a href="<?php echo BASE_URL . '/pages/all-events.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                            class="tdnone">
                                            <li><i class="bi bi-person-circle" aria-hidden="true"></i>
                                                <?php echo $event['username']; ?>
                                            </li></a>
                                            <a href="<?php echo BASE_URL . '/pages/all-events.php?location=' . $event['location']?>#my-nid"
                                            class="tdnone">
                                            <li><i class="bi bi-geo-alt" aria-hidden="true"></i>
                                                <?php echo $event['location']; ?>
                                            </li></a>
                                            <a href="<?php echo BASE_URL . '/pages/all-events.php?price=' . $event['price']  ?>#my-nid"
                                            class="tdnone">
                                            <li><i class="bi bi-tags" aria-hidden="true"></i>
                                                <?php echo $event['price']; ?>
                                            </li></a>
                                            <a href="<?php echo BASE_URL . '/pages/all-events.php?type=' . $event['type'] ?>#my-nid"
                                            class="tdnone">
                                            <li><i class="bi bi-person-video3" aria-hidden="true"></i>
                                                <?php echo $event['type']; ?>
                                            </li></a>
                                        </ul>
                                        <?php echo html_entity_decode(substr($event['description'], 0, 80) . '....'); ?>

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
                                                        <a href="www.facebook/evently.com"><i class="bi bi-facebook"></i></a>
                                                        <a href="www.twitter/evently.com"><i class="bi bi-twitter"></i></a>
                                                        <a href="www.instagram/evently.com"><i class="bi bi-instagram"></i></a>
                                                        <a href="www.whatsapp/evently.com"><i class="bi bi-whatsapp"></i></a>
                                                        <a href="www.telegram/evently.com"><i class="bi bi-telegram"></i></a>
                                                    </ul>
                                                    <p>Or copy link</p>
                                                    <div class="field">
                                                        <i class="bi bi-link-45deg"></i>
                                                        <input type="text" readonly value="evently/pages/single-event.php?id=<?php echo $event['id']; ?>">
                                                        <button>Copy</button>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                            <a href="<?php echo BASE_URL . '/users.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                            class="tdnone">
                                             <div class="action2">
                                    <div class="profile">
                                       <img src=" <?php echo BASE_URL . '/assets/images/users/' . $event['profile'] ?>" alt="">
                                    </div>
                                 </div></a>
                                    </div>

                                </div>


                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

            <!-- <div class="center">
                <ul class="pagination">
                    <li><a href="all-events.php">«</a></li>
                    <li><a class="active" href="all-events.php">1</a></li>
                    <li><a href="all-events.php">2</a></li>
                    <li><a href="all-events.php">3</a></li>
                    <li><a href="all-events.php">4</a></li>
                    <li><a href="all-events.php">5</a></li>
                    <li><a href="all-events.php">6</a></li>
                    <li><a href="all-events.php">7</a></li>
                    <li><a href="all-events.php">»</a></li>
                </ul>
            </div> -->
        </div>
        <div class="link-btn">
            <button class="button1 load-more-Btn" style="vertical-align:middle"><span> <a class="tg"
                        href="all-events.php">Load More</a></span></a></button>
        </div>
    </section>


    <!--  End All Events Section -->
  

    <!--  Footer Section -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
    <!--  End Footer Section -->

    <!--  Script Section -->
    <script>
        window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".new-wp").style.display = "block";
        },
        1200
    )
});
    </script>
    <script src="../assets/js/cookies.js"></script>
      <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/script.js"></script>
    <!--  End Script Section -->

</body>



</html>
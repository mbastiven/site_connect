<?php
include('path.php');

include(ROOT_PATH . "/app/controllers/events.php");
include(ROOT_PATH . "/app/includes/checkers/checkers.php");
userOnly();
$eventst = getPublishedEvents();

$eventTitle = '';

if (isset($_POST['search-btn'])) {
    $e_title = $_POST['search-term-name'];
    $e_type = $_POST['search-term-type'];
    $e_date = $_POST['search-term-date'];
    $events = searchAll($e_title, $e_type, $e_date);
    $eventTitle = "Similar search results for ";
} else if (isset($_GET['c_id'])) {

    $events = getEventsByCategoryId($_GET['c_id']);
    if (count($events) == 0) {
        $eventTitle = "No results found for ' " . $_GET['name'] . " '";
    } else {
        $eventTitle = "Results for events  under ' " . $_GET['name'] . " '";
    }
} else {
    $events = getPublishedEventsLimit();
}

// if (isset($_POST['search-term-name']) && empty($_POST['search-term-type']) && empty($_POST['search-term-date'])) {
//     $eventTitle = "Similar search results for '" . $_POST['search-term-name'] . "'";
// } else if (isset($_POST['search-term-type']) && empty($_POST['search-term-names']) && empty($_POST['search-term-date'])) {
//     $eventTitle = "Similar search results for '" . $_POST['search-term-type'] . "'";
// } else if (isset($_POST['search-term-date']) && empty($_POST['search-term-names']) && empty($_POST['search-term-type'])) {
//     $eventTitle = "Similar search results for '" . $_POST['search-term-date'] . "'";
// }

?>
<html>

<head>
    <!-- Meta head -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Title -->
    <title>Evently || Home</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
  <link href="assets/css/cookies.css" rel="stylesheet">
    <link href="assets/css/modals.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <section class="landing-page" name="top"></a>
        <div class="lp-container">
            <div class="navbar">
                <a href="index.php"><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png" alt="" class="logo"></a>
                <nav>
                    <ul>
                        <li><a href="index.php" class="open">Home</a></li>
                        <li><a href="<?php echo BASE_URL . '/pages/ongoing.php' ?> ">Ongoing</a></li>
                        <li><a href="pages/all-events.php">All Events</a></li>
                        <li><a href="<?php echo BASE_URL . '/pages/memories.php' ?> ">Memories</a></li>
                        
                        <li><a href="admin/events/create.php"><button class="nbtn1">Add Event</button></a></li>

                    </ul>
                </nav>
                <?php include(ROOT_PATH . "/app/includes/menu.php"); ?>
            </div>
            <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
            <div class="lp-row" onclick="hide()">
                <div class="lp-col">
                    <div class="text-box">
                        <h5>Home Of All Events </h5>
                        <h1 class="uu"><b>Simplicity is the Ultimate coding View</h1>
                    </div>
                    <a href="pages/ongoing.php" class="button">Ongoing Events<span></span></a>
                    <a href="pages/all-events.php" class="button">Download App<span></span></a>

                   

                </div>
                <div class="lp-col">
                    <div class="gallery-box" class="owl-carousel">
                        <img src="<?php echo BASE_URL . '/assets/images/event images/memory-section/2.jpg' ?>" id="gallery" >
                        
                        <ul class="gg" id="menu1">
                            <li class="btn">01</li>
                            <li class="btn active">02</li>
                            <li class="btn">03</li>
                            <li class="btn">04</li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="https://i.postimg.cc/Hnr6HpdQ/back.png" class="small-icon4">
            <div class="social-icons">
                <a href=""></a><img src="https://i.postimg.cc/D0NYbSBj/instagram.png"></a>
                <a href=""></a><img src="https://i.postimg.cc/RqrLBKPB/facebook-1.png"></a>
                <a href=""></a><img src="https://i.postimg.cc/fTkGTNBq/twitter-1.png"></a>
                <a href=""></a><img src="https://i.postimg.cc/X7ysz72W/dribble.png"></a>

            </div>
        </div>
    </section>
    <section class="search">
        <div class="containers">
            <div class="rows">
                <div class="col-md-12">
                    <form action="index.php#my-id" class="form_book" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="date">EVENT NAME</label>
                                <input class="book_n" name="search-term-name" placeholder="Art exhibition" type="text">
                            </div>
                            <div class="col-md-3">
                                <label class="date">EVENT TYPE</label>
                                <input class="book_n" name="search-term-type" placeholder="Free/Paid" type="text">

                            </div>
                            <div class="col-md-3">
                                <label class="date">EVENT DATE</label>
                                <input class="book_n" name="search-term-date" value="<?php echo $_POST; ?>" type="date">
                            </div>
                            <div class="col-md-3">
                                <button class="book_btn" name="search-btn">Search Event</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="categories-list">
            <?php foreach (array_slice($categories, 0, 7) as $key => $category): ?>


                <li class="huh"><a
                        href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $category['id'] . '&name=' . $category['name'] ?> #my-nid">
                        <button type="button" class="btn btn-outline-success">
                            <?php
                            echo $category['name']; ?>
                        </button>
                    </a></li>


            <?php endforeach; ?>

        </div>

        
    </section>
            
    <section class="events">
        <div class="upcoming-event">
            <div class="title-heading">
                <div id="my-id">
                    <h2 class="hd" id="my-nid">
                        Upcoming Events
                    </h2>
                </div>
            </div>
            <h1 class="hiden">
                 <?php echo $eventTitle; ?>
            </h1>
            <div class="news-wrap">    
                <div class="container">
                   
                    <div class="row">
                        <?php foreach ($events as $key => $event):  ?>
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
                                    </div>
                                    <div class="news-grid-txt">
                                        <div class="wishlist">
                                        
                                            <img class="hhr"
                                                src="https://i.postimg.cc/Bb2MtmP6/heart-3.png"
                                                id="mypicture"
                                                onClick="document.querySelectorAll('mypicture').src = 'https://i.postimg.cc/XvKhD7Yq/heart.png';">
                                          
                                            <img class=" view-modal"src="https://i.postimg.cc/50NP7BrK/share-3.png">                                                                             
                                        </div>                                       
                                        <a href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>#my-nid"
                                            class="tdnone"><span>
                                                <?php echo $event['name']; ?>

                                            </span></a>
                                        <h2>
                                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="tdnone">
                                                <?php echo substr($event['title'], 0, 61) . '..'; ?></a>
                                        </h2>
                                        <ul> 
                                        <a href="<?php echo BASE_URL . '/pages/all-events.php?u_id=' . $event['user_id'] . '&username=' . $event['username'] ?>#my-nid"
                                            class="tdnone">
                                            <li><i class="bi bi-person-circle" aria-hidden="true"></i>
                                                <?php echo $event['username']; ?>
                                            </li></a>
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
                                        <?php echo html_entity_decode(substr($event['description'], 0, 80) . '....'); ?>

                                        <div class="booking-link">
                                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="listing-btn">Read
                                                More...</a>
                                        </div>                                    
                                            <div class="popup">
                                                <header>
                                                    <span>#Evently Spread</span>
                                                    <div class="close"><i class="fa fa-close"></i></div>
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
                                                    <img src=" <?php echo BASE_URL . '/assets/images/users/' . $event['profile'] ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            
            
            <div class="link">
                <button class="button1" style="vertical-align:middle"><span> <a class="tg"
                            href="<?php echo BASE_URL . '/pages/all-events.php' ?> "> View
                            All </a></span></a></button>
            </div>
        </div>
        <div class="top-events">
            <div class="title-heading">
                <h2 class="hd3"> Top events</a></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="news-slider" class="owl-carousel">
                            <!-- 1 -->
                            <?php foreach (array_slice($eventst, 0, 12) as $key => $event): ?>

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
                                            <img class=" view-modal"src="https://i.postimg.cc/50NP7BrK/share-3.png">
                                            
                                        </div>
                                    </div>
                                    <div class="news-grid-txt">
                                        <a href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>"
                                            class="tdnone"><span>
                                                <?php echo $event['name']; ?>

                                            </span></a>
                                        <h2> <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="tdnone">
                                                <?php echo substr($event['title'], 0, 57) . '..'; ?></a></h2>
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

                                        <div class="booking-link">
                                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="listing-btn">Read
                                                More...</a>
                                        </div>

                                        <div class="popup">
                                                <header>
                                                    <span>#Evently Spread</span>
                                                    <div class="close"><i class="fa fa-close"></i></div>
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
    </section>
    <section class="Memories-section">
        <div class="memories">
            <div class="pl"></div>
            <div class="title-heading">
                <h2 class="hd2">Event Memories</h2>
            </div>
            <div class="container2">
                <div class="pl"></div>
                <h1> Best Event Video Contents</h1>
                <div class="row2">
                    <div class="side2-col">
                        <div class="feature-img">

                            <video class="vd" controls width="110%" height="840"
                                poster="https://i.postimg.cc/G2jfC7RP/25.jpg">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/t4vKPhjcMZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </video>
                        </div>
                    </div>
                    <div class="side2-col">
                        <div class="small-img-row">
                            <div class="small-img">
                                <img src="https://i.postimg.cc/4dh32cTT/17.jpg" alt="">
                                <img src="https://i.postimg.cc/t4vpjnYs/play-button.png" class="play-btn"
                                    onclick="playVideo('assets/videos/video1.mp4')">
                            </div>
                            <p>How To secure you Pc in <br>
                                2022 givin the new cyber security trent
                            </p>
                        </div>
                        <div class="small-img-row">
                            <div class="small-img">
                                <img src="https://i.postimg.cc/RFrmFb2j/23.jpg" alt="">
                                <img src="https://i.postimg.cc/t4vpjnYs/play-button.png" class="play-btn"
                                    onclick="playVideo('assets/videos/video1.mp4')">
                            </div>
                            <p>Why is money important for us entrepreneurs <br>
                                and how to we get it for free
                            </p>
                        </div>
                        <div class="small-img-row">
                            <div class="small-img">
                                <img src="https://i.postimg.cc/250jSwCY/16.jpg" alt="">
                                <img src="https://i.postimg.cc/t4vpjnYs/play-button.png" class="play-btn"
                                    onclick="playVideo('assets/videos/video1.mp4')">
                            </div>
                            <p> Why do footballers or athletes<br>
                                after retirement turn out to be poor
                            </p>
                        </div>
                        

                    </div>

                </div>
                <div class="hhpp">
                    <div class="link">
                        <button class="buttonk" style="vertical-align:middle"><span> <a
                                    href="<?php echo BASE_URL . '/pages/memories.php' ?> "> View
                                    More</a></span></a></button>
                    </div>
                </div>
                <div class="pm">

                </div>
            </div>
            <div class="video-player" id="videoPlayer">
                <video width="100%" controls id="myVideo">
                    <source src="assets/videos/video1.mp4" type="video/mp4" autoplay>
                </video>
                <img src="https://i.postimg.cc/FzwDH2Hw/close.png" width="65px" class="close-btn" onclick="stopVideo()">
            </div>

        </div>

    </section>
    <div class="new-wp">
    <div class="wrapper">
    <img src="https://i.postimg.cc/59rPgFSp/cookie.png" alt="">
    <div class="content">
      <header>Cookies Consent</header>
      <p>This website use cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="item">I understand</button>
        <a href="#" class="item">Learn more</a>
      </div>
    </div>
  </div>
  </div>
   
    <!--  Footer Section -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
    <!--  End Footer Section -->
   

    <!--  End Footer Section -->

       <!--  Script Section -->
       <script src="assets/js/cookies.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/main.js"></script>

 <!--  End Script Section -->
</body>

</html>
<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/events.php");


$events = array();
$eventTitle = '';
if (isset($_POST['search-btn'])) {
    $eventTitle = "You searched for '" . $_POST['search-term'] . "'";
    $events = searchEventsByName($POST['search-term']);
} else {

    $events = getPublishedEvents();
    $paginatedEvents = getPaginatedEvents();
    //dd( $paginatedEvents);
}

if (isset($_GET['page']) && isset($_GET['ajax'])) {
    $paginatedEvents = getPaginatedEvents($_GET['page']);
    echo json_encode($paginatedEvents);
    exit();

}
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <title>Evently || All Events</title>
    <!-- <link rel="stylesheet" href="style55.css"> -->

    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
</head>

<body>

    <div class="loader"></div>

    <section class="landing-page" name="top"></a>
        <div class="lp-container4">
            <div class=" ty">
                <div class="navbar">
                    <a href="<?php echo BASE_URL . '/index.php' ?>"><img src="../assets/images/icons/logo1.png" alt=""
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
     <div class="social-icons1">
                <a href=""></a><i class="bi bi-facebook"></i></a>
                <a href=""></a><i class="bi bi-twitter"></i></a>
                <a href=""></a><i class="bi bi-instagram"></i><</a>
                <a href=""></a><i class="bi bi-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                    <img src="../assets/images/icons/back.png" class="small-icon4">
                </div>
            </div>
    </section>
    <section class="search">
        <div class="containers">
            <section class="jj1">
                <div class="rows">
                    <div class="col-md-12">
                        <form class="form_book" method="post" action="all-events1.php">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="date">EVENT NAME</label>
                                    <input class="book_n" name="search-term" placeholder="Art exhibition" type="text">
                                </div>
                                <div class="col-md-3">
                                    <label class="date">EVENT TYPE</label>
                                    <input class="book_n" name="search-term1" placeholder="Programming" type="text">

                                </div>
                                <div class="col-md-3">
                                    <label class="date">EVENT DATE</label>
                                    <input class="book_n" type="date">
                                </div>
                                <div class="col-md-3">
                                    <button class="book_btn" name="search-btn">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </section>
    <section class="jj1">
    </section>
    <section class="fearure-events">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <?php foreach (array_slice($events, 0, 5) as $key => $event): ?>
                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="<?php echo BASE_URL . '/assets/images/event images/' . $event['image'] ?> " alt="">
                        </div>
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">
                                <?php echo date('j M g:i a', strtotime($event['event_day'])); ?>

                                <i class="bi bi-person-fill" aria-hidden="true"></i>
                                <?php echo $event['username']; ?>

                                <i class="bi bi-geo-alt" aria-hidden="true"></i>
                                <?php echo $event['location']; ?>

                                <i class="bi bi-tags" aria-hidden="true"></i>
                                <?php echo $event['price']; ?>

                                <i class="bi bi-person-video3" aria-hidden="true"></i>
                                <?php echo $event['type']; ?>


                            </span>
                            <div class="blog-slider__title">
                                <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>">
                                    <?php echo $event['title']; ?></a>
                            </div>
                            <div class="blog-slider__text">
                                <?php echo html_entity_decode(substr($event['description'], 0, 80) . '....'); ?>

                            </div>
                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                class="blog-slider__button">Book
                                Now</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </section>

    <section class="events1">
        <div class="upcomingEvents">
            <div class="title-heading">


                <h2 class="hd1">
                    All Upcoming Events
                </h2>
            </div>
            <h1 class="hidden-tittle">
                <?php echo $eventTitle; ?>
            </h1>
            <div class="news-wrap">
                <div class="container">
                    <div class="row">
                        <?php foreach ($paginatedEvents['events'] as $event): ?>
                            <div class="col-lg-4">
                                <div class="news-grid">
                                    <div class="news-grid-image"><img src="<?php echo $event['image'] ?> " alt="">
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
                                                src="<?php echo BASE_URL . '/assets/images/icons/heart 3.png' ?>"
                                                id="mypicture"
                                                onClick="document.getElementById('mypicture').src = '<?php echo BASE_URL . '/assets/images/icons/heart.png' ?>';">
                                            <img class="hhr"
                                                src="<?php echo BASE_URL . '/assets/images/icons/share (3).png' ?>"
                                                id="bannerImage"
                                                onclick="changeImage('<?php echo BASE_URL . '/assets/images/icons/share (3).png' ?>')">
                                        </div>
                                    </div>
                                    <div class="news-grid-txt">
                                        <a href="<?php echo BASE_URL . '/index.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>"
                                            class="tdnone"><span>
                                                <?php echo $event['name']; ?>

                                            </span></a>
                                        <h2>
                                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="tdnone">
                                                <?php echo substr($event['title'], 0, 61) . '..'; ?></a>
                                        </h2>
                                        <ul>
                                            <li><i class="bi bi-person" aria-hidden="true"></i>
                                                <?php echo $event['username']; ?>
                                            </li>
                                            <li><i class="bi bi-geo-alt" aria-hidden="true"></i>
                                                <?php echo $event['location']; ?>
                                            </li>
                                            <li><i class="bi bi-tags" aria-hidden="true"></i>
                                                <?php echo $event['price']; ?>
                                            </li>
                                            <li><i class="bi bi-person-video3" aria-hidden="true"></i>
                                                <?php echo $event['type']; ?>
                                            </li>
                                        </ul>
                                        <?php echo $event['description']; ?>
                                        <div class="booking-link">
                                            <a href="<?php echo BASE_URL . '/pages/single-event.php?id=' ?><?php echo $event['id']; ?>"
                                                class="listing-btn">Read
                                                More...</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
              
                </div>
                <div class="link-btn">
            <button class="button1 load-more-Btn" style="vertical-align:middle"><span> <a class="tg"
                        href="all-events1.php">Load More</a></span></a></button>
        </div>
            </div>



         
        </div>
        
    </section>
    <div class="center">
                <ul class="pagination">
                    <li><a href="all-events1.php">«</a></li>
                    <li><a class="active" href="all-events1.php">1</a></li>
                    <li><a href="all-events1.php">2</a></li>
                    <li><a href="all-events1.php">3</a></li>
                    <li><a href="all-events1.php">4</a></li>
                    <li><a href="all-events1.php">5</a></li>
                    <li><a href="all-events1.php">6</a></li>
                    <li><a href="all-events1.php">7</a></li>
                    <li><a href="all-events1.php">»</a></li>
                </ul>
            </div>
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <script>

        /*   -------------------Load More ------------------*/

        const loadMoreBtn = document.querySelector('.load-more-Btn');
        const newsWrap = document.querySelector('.news-wrap');
        const linkBtn = document.querySelector('.link-btn');

        function displayEvents(events) {
            events.forEach(event => {
                let eventHtmlString = `
                
       <div class="col-lg-4">
                                <div class="news-grid">
                                    <div class="news-grid-image"><img src="${event.image} " alt="">
                                   

                                       
                                    </div>
                                    <div class="news-grid-txt">
                                        <a href="all-events1.php" class="tdnone"><span>Finance
                                                 ${event.category_id}  
                                            </span></a>
                                        <h2>
                                            <a href="pages/single-event.php?id=${event.id} "
                                                class="tdnone">
                                                ${event.title} </a>
                                        </h2>

                                        <ul>

                                            <li><i class="bi bi-person" aria-hidden="true"></i>
                                             ${event.username} 
                                            </li>
                                            <li><i class="bi bi-geo-alt" aria-hidden="true"></i>
                                                ${event.type} 
                                            </li>
                                            <li><i class="bi bi-tags" aria-hidden="true"></i>
                                                ${event.price} 
                                            </li>
                                            <li><i class="bi bi-person-video3" aria-hidden="true"></i>
                                                ${event.type} 
                                            </li>
                                        </ul>
                                        ${event.description}  

                                        <div class="booking-link">
                                            <a href="pages/single-event.php?id=${event.id}"
                                                class="listing-Btn">Read
                                                More...</a>
                                        </div>
                                     </div>      
                            
                                    </div>
                                    </div>
                                   `;
                const domParser = new DOMParser();
                const doc = domParser.parseFromString(eventHtmlString, 'text/html');
                const eventNode = doc.body.firstChild;
                newsWrap.appendChild(eventNode)


            });
        }

        let nextPage = 2;

        loadMoreBtn.addEventListener('click', async function(e) {

            loadMoreBtn.textContent = 'Loading...';
            const response = await fetch(`all-events1.php?page=${nextPage}&ajax=1`);
            const data = await response.json();
            console.log({ data });
            displayEvents(data.events);
            nextPage = data.nextPage;
            if (!data.nextPage) {
                linkBtn.innerHTML = '<div style="color:gray;">No More Events!</div>';
            } else {
                loadMoreBtn.textContent = 'Load More';
            }

        });

    </script>
    <script src="../assets/js/main.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/script.js"></script>


</body>



</html>
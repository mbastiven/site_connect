<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/events.php");
userOnly();
$eventst = getSponsoredEvents();
if (isset($_GET['id'])) {
	$events = getAllEventsById($_GET['id']);
	// $event = selectOne('events', ['id' => $_GET['id']]);
	 // dd($event);
 }
?>

<head>

	<!-- Meta head -->
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<?php foreach ($events as $key => $event):  
                            ?>
                            <?php endforeach; ?>
	<!-- Title -->
	<title>Evently || <?php echo $event['title']; ?></title>

	<!-- Favicons -->
	<link href="../assets/img/favicon.png" rel="icon">
	<link rel="shortcut icon" type="image/png" href="../https://i.postimg.cc/X7ysz72W/dribble.png">

	<!-- Bootstrap /JQuarry / Ajax Links  -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		rossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

      
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <!-- Page Main CSS File -->
    <link href="../assets/css/modals.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div class="loader"></div>

	<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
	<div class="movie-ticket">
		<div class="container-fluid">

			<div class="ui-item">

				<div class="ui-head">
				<img
                                            src="<?php echo BASE_URL . '/assets/images/event images/' . $event['image'] ?> "
                                            alt="" class="img-responsive bg-img">

					<div class="ui-trans clearfix">
					<img class="img-responsive" src="https://i.postimg.cc/ryKHBtM0/oo.png" alt="">
						

						<div class="ui-details clearfix">

							<h2><a href="#">   <?php echo $event['username']; ?></a></h2>

							<p></p>
							<h4><span>Tag</span>:</h4>

							<h5>              <a href="<?php echo BASE_URL . '/pages/all-events.php?c_id=' . $event['category_id'] . '&name=' . $event['name'] ?>#my-nid"
                                            class="tdnone"><h5>
											<?php echo $event['name']; ?>

                                            </h5></a>
							</h5>
							<h4><span>Type</span>:</h4>

							<h5><a href="#">    <?php echo $event['type']; ?></a></h5>

							<h4><span>Price</span>:</h4>

							<h5><a href="#"> <?php echo $event['price']; ?></a></h5>

							<h4><span>Location</span>:</h4>

							<h5><a href="#"><?php echo $event['location']; ?></a></h5>
						</div>							<div class="ijo">
								<a href="#" class="label">   <?php echo date('j ', strtotime($event['event_day'])); ?></a>
								<a href="#" class="label"> <?php echo date(' M', strtotime($event['event_day'])); ?></a>
								<a href="#" class="label">   <?php echo date('g:i a', strtotime($event['event_day'])); ?></a>
							</div>
					</div>
				</div>

				<div class="ui-review">

					<h3><?php echo substr($event['title'], 0, 161); ?></h3>

					<p> <?php echo html_entity_decode(substr($event['description'], 0, 180) ); ?>
</p>

					<a href="payment.php" class="ui-btn bg-red"><i class="bi bi-ticket-perforated"></i> Buy Tickets</a>
					<a href="payment.php" class="ui-btn bg-green"><i class="bi bi-circle-square"></i>Book Event</a>
				
					<small>Share This Booking</small>
					<img class=" view-modal"src="https://i.postimg.cc/50NP7BrK/share-3.png">
					
				</div>
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
                                                        <input type="text" readonly value="evently/pages/booking.php?id=<?php echo $event['id']; ?>">
													
                                                        <button>Copy</button>
                                                    </div>
                                                </div>
                                            </div>
		</div>
	</div>

	    <!--  End Feature Section -->

    <!--  All Events Section -->

	<div class="events1" >
    <section class="events">
        <div class="upcomingEvents">
		<div class="containerx">
                <div class="pl"></div>
                <h1> sponsored events </h1>
			
            </div>
            <div class="news-wrap">
                <div class="container">
                    <div class="row">
                        <?php
                        $i = 0; foreach ($eventst as $key => $event):
                            if (++$i > 6)
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
       
        </div>

    </section>
	</div>
	<script src="../assets/js/popup.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="../assets/js/loader.js"></script>
	<script src="../assets/js/main.js"></script>

	<style type="text/css">
	
	.events1{
		margin-top: -30px;
	}
	
	.containerx h1 {
    margin-left: 18%;
    margin-bottom: -5px;
    text-transform: uppercase;
                font-weight: 400;
    border-left: 13px solid #18b277;
    color:  #18b277;
    /* color: white; */
    font-size: 30px;
    text-align: left;
    
}

		a {
			text-decoration: none;
			color: #777;
		}

		a:hover,
		a:active,
		a:focus {
			outline: 0;
			text-decoration: none;
			color: #999;
		}

		hr {
			margin: 10px 0px;
			padding: 0px;
			border-top: 0px;
			border-bottom: 1px solid #eee;
		}

		.bg-red {
			background-color: black !important;
		}

		.bg-green {
			background-color: #18b277 !important;
		}

		/* General CSS */
		body {
			background: #f4f8fd;
		}

		/* UI - X */
		.movie-ticket {
			max-width: 660px;
			margin: 30px auto;


		}

		/* Head */
		.movie-ticket .ui-item .ui-head {
			background-color: #18b277 !important;
			position: relative;
  			height: inherit;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;

		}

		.movie-ticket .ui-item .ui-head img.bg-img {
			margin-top: 30px;
			margin-bottom: 30px;
			margin-left: 38%;
			width: 60%;
			height: 40%;
			
			object-fit: contain;
			border-radius: 5px;
		
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-item .ui-head img.bg-img {
				display: none;
			}
		}

		/* Transparent Background */
		.movie-ticket .ui-head .ui-trans {
			background: rgba(0, 0, 0, 0.027);
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0px;
			padding: 25px;
			border: #18b277 1px solid;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-head .ui-trans {
				background: #fff;
				position: inherit;
				border: 1px solid #ddd;
				border-bottom: 0px;
			}
		}

		.movie-ticket .ui-head .ui-trans img {
			max-width: 150px;
			height: 120px;
			margin-top: -2px;
background: whitesmoke;
border-bottom: 13px solid whitesmoke;
border-top: 13px solid whitesmoke;
border-right: 3px solid whitesmoke;
border-radius: 15px;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-item .ui-trans img {
				float: none;
				margin-bottom: 15px;
				box-shadow: none;
			}
		}

		/* Details */
		.movie-ticket .ui-trans .ui-details {

			margin-left: 19px;
			padding-top: -15px;

		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details {
				margin-left: 0px;
				margin-bottom: 150px;
			}
		}

		/* Heading */
		.movie-ticket .ui-trans .ui-details h2 {
			margin-left: -1px;
			margin-bottom: -15px;
			margin-top: 10px;
			font-size: 28px;
			line-height: 38px;
			font-weight: 300;
		}

		.movie-ticket .ui-trans .ui-details h2>a {
			color: #fff;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details h2>a {
				color: #555;
			}
		}

		.ijo {
			margin-left: 15px;
			color:  white !important;
		}

		/* Label */
		.ijo a.label {
			color: #fff !important;

			margin: 0px 2px;
			display: inline-block;

		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details a.label {
				border: 1px solid #ccc;
				color: #555;
				background: transparent;
			}
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details p {
				color: #555;
			}
		}

		/* Small Headings */
		.movie-ticket .ui-trans .ui-details h4 {
			color: #fff;
			font-size: 16px;
			line-height: 23px;
			margin: 0px;
			width: 100px;
			float: left;
			font-weight: 600;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details h4 {
				color: #555;
				width: 70px;
			}
		}

		.movie-ticket .ui-trans .ui-details h4>span {
			display: inline-block;
			width: 75px;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details h4>span {
				width: 55px;
			}
		}

		.movie-ticket .ui-trans .ui-details h5 {
			margin-left: -10px;
			font-size: 14px;
			line-height: 23px;
			font-weight: 400;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details h5 {
				margin-left: 65px;
			}
		}

		.movie-ticket .ui-trans .ui-details h5>a {
			color: #fff;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-trans .ui-details h5>a {
				color: #555;
			}
		}

		/* Review */
		.movie-ticket .ui-item .ui-review {
			border: 1px solid #ddd;
			padding: 15px 20px 15px;
			border-top: 0px;
			background: #fff;
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
		}
		.movie-ticket .ui-item .ui-review img{
width: 34px;
margin-left: 6px;


		}
		.movie-ticket .ui-item .ui-review small{
			margin-left: 36%;
			font-size: 13px;
		}

		@media(max-width: 660px) {
			.movie-ticket .ui-item .ui-review {
				border-top: 1px solid #ddd;
			}
		}

		/* Heading */
		.movie-ticket .ui-item .ui-review h3 {
			font-size: 16px;
			line-height: 26px;
			display: inline-block;
		}

		/* Paragraph */
		.movie-ticket .ui-item .ui-review p {
			font-size: 13px;
			line-height: 28px;
			color: #777;
			margin-bottom: 3px;
		}

		/* Button */
		.movie-ticket .ui-item .ui-review a.ui-btn {
			display: inline-block;
			margin: 0px 5px 8px 0px;
			padding: 5px 10px;
			color: #fff;
			font-size: 13px;
			line-height: 23px;
			font-weight: 600;
			border-radius: 2px;
		}

		.movie-ticket .ui-item .ui-review a.ui-btn>i {
			border-right: 1px solid rgba(0, 0, 0, 0.1);
			padding-right: 7px;
			margin-right: 3px;
		}
	</style>
</body>

</html>
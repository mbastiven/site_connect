<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/events.php");
adminOnly();


$eventTitle = '';

if (1 !== $_SESSION['role_id']){
        $events = getAllEventsFromUser($_SESSION['id']);
        $eventTitle = "All Your Events";
  } 
  else{
    $eventTitle = "All Your Events";
      $events = getAllEvents(); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evently || Dashboard</title>

       <!-- CSS File Link -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="../../assets/css/admin style.css">
   <link rel="stylesheet" href="../../assets/css/style.css">
   <link rel="stylesheet" href="../../assets/css/modals.css">
      
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

</head>
<body>
    
<?php include(ROOT_PATH . "/app/includes/sidebar/events.php"); ?>
   <div class="main-content" id="main-content">
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>



      <main id="my-nid">


<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>




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
                                                onClick="document.getElementById('mypicture').src = 'https://i.postimg.cc/XvKhD7Yq/heart.png';">
                                          
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
            </div> <br>
            


          

</div>












            <div class="note">
                <p>
                    Nb:  read this ... <br>  1-  You can click on the title or read more button to see how the event looks like in  the single event page and it booking page 
                    <br> 2- click event specification like type price location or even author profile to have more details about similar events 
                </p>
            </div>
</main>

<script src="../../assets/js/popup.js"></script>
<style>
    .h2, h2 {
    font-size: 26px;
}
a span {
    font-size: 15;
    line-height: 2px;
    margin-left: 5px;
}

.news-grid-txt a span{
    line-height: 28px !important;
}
.note{
    margin-top: -38px;
    height: 100px !important;
    border-radius: 10px ;
    background: #18b277;
}
.note p {
    margin-left: 25px;
    padding-top: 10px;
}
</style>
</body>
</html>
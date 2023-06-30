<?php include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
// include(ROOT_PATH . "/app/controllers/events.php");

$events = getAllEventsFromUserName($_GET['u_id']);
// dd($events);
userOnly();
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
    <title>Evently || <?php echo $event['username']; ?></title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Bootstrap /JQuarry / Ajax Links  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <!-- Page Main CSS File -->
    <link href="assets/css/modals.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/admin style.css" rel="stylesheet">
    <link href="assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader"></div>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    
    <div class="jj"></div>

    <div class="main-content" id="main-content">

      <div class="container1">
         <div class="row1">
            <div class="col-lg-4">
               <div class="jj" id="my-nid">
               </div>
            </div>
         </div>
         <div class="col-lg-8" >
            <div class="card z-depth-3">
               <div class="card-body">
              
                  <div class="tab-content p-3">
                     <div class="tab-pane active show" id="profile">
                        
                        <div class="card-body text-center bg-primary rounded-top">
                           <div class="user-box">
                           <img src="<?php echo BASE_URL . '/assets/images/users/' . $event['profile'] ?>" alt="">
                           </div>
                           <h5 class="mb-1 text-white">
                           <?php echo $event['username']; ?>
                           </h5>
                           <h6 class="text-light">
                           <?php if (empty($event['id']) || 1 !== $event['role_id']): ?>
                            <?php echo 'Event Creator'; ?>
                        <?php else: ?>
                            <?php echo 'Administrator'; ?>
                        <?php endif; ?>
                           </h6>
                           <div class="social0-links">

                           </a>
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
                        <ul class="list-group shadow-none">
                         
                           <li class="list-group-item">
                              <div class="row text-center mt-6">
                                 <div class="col p-2">
                                 <i class="bi bi-telephone"></i>
                                 <span>+237
                                    <?php echo $event['phone']; ?>
                                 </span>
                                 <small class="tt">Mobile Number</small>
                                 </div>
                                 <div class="col p-2">
                                 <i class="bi bi-envelope"></i>
                                 <span>
                                    <?php echo $event['email']; ?>
                                 </span>
                                 <small class="tt">Email Address</small>
                                 </div>
                                 
                              </div>
                           </li>
                           <li class="list-group-item" >
                              <div class="row text-center mt-6">
                                 <div class="col p-2">
                                    <i class="bi bi-buildings"></i>
                                    <span>
                                       <?php echo $event['username']; ?>
                                    </span>
                                    <small class="tt">Enterprise Or Association Name</small>
                                 </div>
                                 <div class="col p-2">
                                    <i class="bi bi-pin-map"></i>
                                    <span>
                                       <?php echo $event['country']; ?>
                                    </span>
                                    <small class="tt">Country</small>
                                 </div>
                                 <div class="col p-2">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>
                                       <?php echo $event['full_address']; ?>
                                    </span>
                                    <small class="tt">Full Address</small>
                                 </div>
                                 <div class="col p-2">
                                 <i class="bi bi-globe"></i>
                                 <span>www.evently/<?php echo $event['username']; ?>.com
                                 </span>

                                 <small class="tt">Profile Web-link</small>
                                 </div>
                                 
                              </div>
                   
                           </li>
                        </ul>

                        <div class="row text-center mt-4">
                           <div class="col p-2">
                              <h4 class="mb-1 line-height-5">154</h4>
                              <small class="mb-0 font-weight-bold">Events</small>
                           </div>
                           <div class="col p-2">
                              <h4 class="mb-1 line-height-5">154</h4>
                              <small class="mb-0 font-weight-bold">Bookings</small>
                           </div>
                           <div class="col p-2">
                              <h4 class="mb-1 line-height-5">2.2k</h4>
                              <small class="mb-0 font-weight-bold">Followers</small>
                           </div>
                           <div class="col p-2">
                              <h4 class="mb-1 line-height-5">9.1k</h4>
                              <small class="mb-0 font-weight-bold">Views</small>
                           </div>
                        </div>
                        

                     </div>
                     
                   
                     </div>
                  </div>
               </div>
            </div>
         </div>
   
      </div>



   </div>

<div class="events1" >
    <section class="events">
        <div class="hih"></div>
        <div class="upcoming-event">
            <div class="news-wrap">
                <div class="container">
                    <?php
                    ?>
                    <div class="row">
                        <?php foreach ($events as $key => $event):  
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
                                                
                                                    <span>#Evently Spread</span>
                                                    <div class="close"><i class="bi bi-x-lg"></i></div>
                                               
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
            <div class="link1-btn">
                <button class="button1" style="vertical-align:middle"><span> <a class="tg"
                            href="<?php echo BASE_URL . '/pages/all-events.php' ?> "> View
                            All </a></span></a></button>
            </div>
        </div>
        </section>
        
        </div>
        

        
   <style type="text/css">
















      .nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
         color: #fff;
         background-color: #18b277 !important;
      }

      /* User Cards */
      button {
    border: none;
    outline: none;
    border-radius: 5px;
  
    background-color: var(--main-color);
    color: var(--text-white);
    cursor: pointer;
}
.events1{
    position: absolute;
 top:90%;
 align-self: center;
 align-items: center;
 align-content: center;
 left: 12.2%;

}
      .row1 input:focus {
         border-color: #197551 !important;
      }

      .list-icon {
         display: block;
         color: #197551 !important;
      }

      .jj {
         margin-top: -20px;
         margin-left: 50px;
      }
      h2{
     
         font-size: 25px!important;
      }

      .tt {
         color: #197551 !important;
         align-items: center;
         margin-left: 20px;
      }

      .bg-primary {
         background-color: #18b277 !important;
         margin-bottom: 7px;
      }

      .alert-info {
         color: #0c5460;
         background-color: #d1ecf1;
         border-color: #bee5eb;
      }

      .line-height-5 {
         color: #197551;
         margin-top: -20px;
      }

      .btn-primary {
         color: #fff;
         background-color: #18b277;
         border-color: #18b277;
      }

      .btn-primary:hover {
         color: #197551 !important;
         border: 1px solid #197551 !important;
         background-color: transparent;
      }

      .btn-secondary {
         color: #fff;
         background-color: black;
         border-color: black;
      }

      .mt-4 {
         height: 18px;
      }

      .mt-5 {
         margin-bottom: 50px;
         padding-top: -200px;
         margin-top: -90px;
         height: 18px;
      }

      .user-box {
          object-fit: cover;
         width: 100px;
         background-color: #18b277;
         margin: auto;



      }
      .list-group-item{
        border-bottom: 3px #18b277 solid !important; 
      }

      .user-box img {
          object-fit: cover;
         margin-left: -10px;
         height: 120px;
         width: 118%;
         border-radius: 50%;
         padding: 3px;
         background: #fff;
         -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
         -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
         -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
         box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
      }

      .profile-card-2 .card {
         position: relative;
         background-color: #18b277;
      }

      .profile-card-2 .card .card-body {
         z-index: 1;
         background-color: #18b277;
      }




      .profile-card-3 .user-fullimage {
         background-color: #18b277;
         position: relative;
      }

      .profile-card-3 .user-fullimage .details {
         background-color: #18b277;
         position: absolute;
         bottom: 0;
         left: 0px;
         width: 100%;
      }

      .profile-card-4 .user-box {
         background-color: #18b277;
         width: 110px;
         margin: auto;
         margin-bottom: 10px;
         margin-top: 15px;
      }
 .social0-links {
    position: relative;
    align-items: inherit;
   align-content: inherit;
   align-self: inherit;
  margin-top: 16px;
  left: 36%;
  display: flex;
}.social0-links img {
  width: 28px;
  height: 28px;
  margin-right: 13px;
}

 .social0-links img:hover {
  filter: grayscale(1);
  transform: scale(2.1);
  transition: .15s;

}

      .profile-card-4 .list-details {
         display: table-cell;
         vertical-align: middle;
         font-weight: 600;
         color: greenyellow;
         font-size: 15px;
         line-height: 15px;
      }

      .profile-card-4 .list-details small {
         display: table-cell;
         vertical-align: middle;
         font-size: 12px;
         font-weight: 400;
         color: blue;
      }
      .bgc{
        background-color: black;
      }
      /*Nav Tabs & Pills */
      .nav-tabs .nav-link {
         color: #223035;
         font-size: 12px;
         text-align: center;
         letter-spacing: 1px;
         font-weight: 600;
         margin: 2px;
         margin-bottom: 0;
         padding: 12px 20px;
         text-transform: uppercase;
         border: 1px solid transparent;
         border-top-left-radius: .25rem;
         border-top-right-radius: .25rem;

      }

      .nav-tabs .nav-link:hover {
         border: 1px solid transparent;
      }

      .nav-tabs .nav-link i {
         margin-right: 2px;
         font-weight: 600;
      }

      .top-icon.nav-tabs .nav-link i {
         margin: 0px;
         font-weight: 500;
         display: block;
         font-size: 20px;
         padding: 5px 0;
      }

      .nav-tabs-primary.nav-tabs {
         border-bottom: 1px solid #18b277;
      }


      a:hover,
      a:visited,
      a:link,
      a:active {
         text-decoration: none !important;
         color: unset !important;

      }

      .tabs-vertical .nav-tabs .nav-link {
         color: #223035;
         font-size: 12px;
         text-align: center;
         letter-spacing: 1px;
         font-weight: 600;
         margin: 2px;
         margin-right: -1px;
         padding: 12px 1px;
         text-transform: uppercase;
         border: 1px solid transparent;
         border-radius: 0;
         border-top-left-radius: .25rem;
         border-bottom-left-radius: .25rem;
      }

      .tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #18b277;
      }


      .tabs-vertical-primary.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #18b277;
      }

      .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
         color: #18b277;
         background-color: #fff;
         border-color: #18b277 #18b277 #fff;
         border-bottom: 1px solid #18b277;
         border-right: 0;
         border-left: 3px solid #18b277;
      }

      .tabs-vertical-success.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #18b277;
      }

      .tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
         color: #18b277;
         background-color: #fff;
         border-color: #18b277#18b277#fff;
         border-bottom: 1px solid #18b277;
         border-right: 0;
         border-left: 3px solid #18b277;
      }

      .tabs-vertical-info.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #18b277;
      }

      .tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
         color: #18b277;
         background-color: #fff;
         border-color: #18b277 #18b277 #fff;
         border-bottom: 1px solid #18b277;
         border-right: 0;
         border-left: 3px solid #18b277;
      }

      .tabs-vertical-danger.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #18b277;
      }

      .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
         color: #18b277;
         background-color: #fff;
         border-color: #18b277 #18b277 #fff;
         border-bottom: 1px solid #18b277;
         border-right: 0;
         border-left: 3px solid #18b277;
      }

      .tabs-vertical-warning.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #ff9700;
      }

      .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
         color: #ff9700;
         background-color: #fff;
         border-color: #ff9700 #ff9700 #fff;
         border-bottom: 1px solid #ff9700;
         border-right: 0;
         border-left: 3px solid #ff9700;
      }

      .tabs-vertical-dark.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #223035;
      }

      .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
         color: #223035;
         background-color: #fff;
         border-color: #223035 #223035 #fff;
         border-bottom: 1px solid #223035;
         border-right: 0;
         border-left: 3px solid #223035;
      }

      .tabs-vertical-secondary.tabs-vertical .nav-tabs {
         border: 0;
         border-right: 1px solid #75808a;
      }

      .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
      .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
         color: #75808a;
         background-color: #fff;
         border-color: #75808a #75808a #fff;
         border-bottom: 1px solid #75808a;
         border-right: 0;
         border-left: 3px solid #75808a;
      }

      .nav-pills .nav-link {
         border-radius: .25rem;
         color: #223035;
         font-size: 12px;
         text-align: center;
         letter-spacing: 1px;
         font-weight: 600;
         text-transform: uppercase;
         margin: 3px;
         padding: 12px 20px;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         -o-transition: all 0.3s ease;
         transition: all 0.3s ease;

      }

      .nav-pills .nav-link:hover {
         background-color: #f4f5fa;
      }

      .nav-pills .nav-link i {
         margin-right: 2px;
         font-weight: 600;
      }

      .top-icon.nav-pills .nav-link i {
         margin: 0px;
         font-weight: 500;
         display: block;
         font-size: 20px;
         padding: 5px 0;
      }

      .nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
         color: #fff;
         background-color: #18b277;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
      }

      .nav-pills-success .nav-link.active,
      .nav-pills-success .show>.nav-link {
         color: #fff;
         background-color: #18b277;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(21, 202, 32, .5);
      }

      .nav-pills-info .nav-link.active,
      .nav-pills-info .show>.nav-link {
         color: #fff;
         background-color: #18b277;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
      }

      .nav-pills-danger .nav-link.active,
      .nav-pills-danger .show>.nav-link {
         color: #fff;
         background-color: #18b277;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(253, 53, 80, .5);
      }

      .nav-pills-warning .nav-link.active,
      .nav-pills-warning .show>.nav-link {
         color: #fff;
         background-color: #ff9700;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(255, 151, 0, .5);
      }

      .nav-pills-dark .nav-link.active,
      .nav-pills-dark .show>.nav-link {
         color: #fff;
         background-color: #223035;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(34, 48, 53, .5);
      }

      .nav-pills-secondary .nav-link.active,
      .nav-pills-secondary .show>.nav-link {
         color: #fff;
         background-color: #75808a;
         box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(117, 128, 138, .5);
      }

      .card .tab-content {
         padding: 1rem 0 0 0;
      }

      .z-depth-3 {
         width: 120%;
         margin-left: -14px;
         -webkit-box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
         box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
      }

      .col-lg-8 {
         height: 120%;
      }
   </style>
   
   <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script type="text/javascript"></script>

   <script src="<?php echo BASE_URL . '/assets/js/main.js' ?> "></script>

   <script src="<?php echo BASE_URL . '/assets/js/loader.js' ?> "></script>


   <script src="<?php echo BASE_URL . '/assets/js/popup.js' ?> "></script>



                     
</body>

</html>
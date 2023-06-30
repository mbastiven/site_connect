<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
$users = selectAll('users');
?>
<!DOCTYPE html>
<html lang="en">



<body>

<style>
      button {
  border: none;
  outline: none;
  border-radius: 5px;
  padding: 8px 12px !important;
  background-color: var(--main-color);
  color: var(--text-white);
  cursor: pointer;
}
   </style>
</body>

</html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Evently || Dashboard</title>
   <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
   


 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <!-- CSS File Link -->
   <link rel="stylesheet" href="../assets/css/admin style.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
   <div class="sidebar" id="sidebar">
      <div class="logo">
         <a href="<?php echo BASE_URL . '/index.php' ?> ">
            <i><img src="https://i.postimg.cc/Vv4tDNvj/logo1.png " alt="" class="logo1"></i>
      </div>

      <div class="sidebar-menu">
         <ul>
          <?php if (empty($_SESSION['id']) || 1 !== $_SESSION['role_id']): ?>
       <a href="<?php echo BASE_URL . '/admin/index.php' ?> ">
                     <li >
                        <i class="bi bi-speedometer"></i>
                        <span>Dashboard</span>
                     </li>
                  </a>
                  <a href="<?php echo BASE_URL . '/admin/events/index.php' ?>">
                     <li>
                        <i class="bi bi-clipboard-data"></i>
                        <span>Events</span>
                     </li>
                  </a>
                   <a href="<?php echo BASE_URL . '/admin/collections/index.php' ?>">
                  <li>
                     <i class="bi bi-layers"></i>
                     <span>Collections</span>
                  </li>
               </a>
               <a href=" <?php echo BASE_URL . '/admin/bookings/index.php' ?>">
                  <li>
                     <i class="bi bi-calendar2-week"></i>
                     <span>Bookings</span>
                  </li>
               </a>
                  <a href="<?php echo BASE_URL . '/admin/account.php' ?>">
                     <li class="active">
                        <i class="bi bi-person-circle"></i>
                        <span>Account</span>
                     </li>
                  </a>
                  <a href=" <?php echo BASE_URL . '/account/logout.php' ?>">
                     <li>
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                     </li>
                  </a>
                 <?php else: ?>
            <ul>
            <a href="<?php echo BASE_URL . '/admin/index.php' ?> ">
                  <li >
                     <i class="bi bi-speedometer"></i>
                     <span>Dashboard</span>
                  </li>
               </a>
               <a href="<?php echo BASE_URL . '/admin/events/index.php' ?>">
                  <li>
                     <i class="bi bi-clipboard-data"></i>
                     <span>Events</span>
                  </li>
               </a>
               <a href="<?php echo BASE_URL . '/admin/categories/index.php' ?>">
                  <li>
                     <i class="bi bi-tags"></i>
                     <span>category's</span>
                  </li>
               </a>
               <a href="<?php echo BASE_URL . '/admin/collections/index.php' ?>">
                  <li>
                     <i class="bi bi-layers"></i>
                     <span>Collections</span>
                  </li>
               </a>
               <a href=" <?php echo BASE_URL . '/admin/bookings/index.php' ?>">
                  <li>
                     <i class="bi bi-calendar2-week"></i>
                     <span>Bookings</span>
                  </li>
               </a> <a href="<?php echo BASE_URL . '/admin/subscriptions/index.php' ?>">
                      <li >
                         <i class="bi bi-ui-checks"></i>
                         <span>Subscriptions</span>
                      </li>
                   </a>
               <a href="<?php echo BASE_URL . '/admin/users/index.php' ?>">
                  <li>
                     <i class="bi bi-people"></i>
                     <span>Users</span>
                  </li>
               </a>
               <a href="<?php echo BASE_URL . '/admin/roles/index.php' ?>">
                  <li>
                     <i class="bi bi-person-gear"></i>
                     <span>Roles</span>
                  </li>
               </a>
               <a href="<?php echo BASE_URL . '/admin/permissions/index.php' ?>">
                  <li>
                     <i class="bi bi-shield-lock"></i>
                     <span>Permissions</span>
                  </li>
               </a>
               <a href="<?php echo BASE_URL . '/admin/account.php' ?>">
                  <li class="active">
                     <i class="bi bi-person-circle"></i>
                     <span>Account</span>
                  </li>
               </a>
               <a href=" <?php echo BASE_URL . '/account/logout.php' ?>">
                  <li>
                     <i class="bi bi-box-arrow-left"></i>
                     <span>Logout</span>
                  </li>
               </a>
            </ul>                
                          <?php endif; ?>

         </ul>

      </div>
   
   
   
   
   
   </div>
   <div class="main-content" id="main-content">
      <?php include('../app/includes/adminheader.php'); ?>
      <div class="container1">
         <div class="row1">
            <div class="col-lg-4">
               <div class="jj">
               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="card z-depth-3">
               <div class="card-body">
                  <ul class="nav nav-pills nav-pills-primary nav-justified">
                     <li class="nav-item">
                        <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                           class="nav-link active show"><i class="icon-user"></i> <span
                              class="hidden-xs">Profile</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="javascript:void();" data-target="#messages1" data-toggle="pill" class="nav-link"><i
                              class="icon-envelope-open"></i> <span class="hidden-xs">Notifications</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i
                              class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
                     </li>
                  <a href="account.php?id=<?php echo $_SESSION['id']; ?> ">  <li class="nav-item">
                        <a href="account.php?id=<?php echo $_SESSION['id']; ?>" data-target="#edit" data-toggle="pill" class="nav-link"><i
                              class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                     </li></a> 
                
                  </ul>
                  <div class="tab-content p-3">
                     <div class="tab-pane active show" id="profile">
                        <h5 class="mb-3">User Profile</h5>
                        <div class="card-body text-center bg-primary rounded-top">
                           <div class="user-box">
                           <img src="<?php echo BASE_URL . '/assets/images/users/' . $_SESSION['profile'] ?>" alt="">
                           </div>
                           <h5 class="mb-1 text-white">
                              <?php echo $_SESSION['username']; ?>
                           </h5>
                           <h6 class="text-light">
                           <?php if (empty($_SESSION['id']) || 1 !== $_SESSION['role_id']): ?>
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
                              <div class="list-details">
                                 <i class="bi bi-telephone"></i>
                                 <span>+237
                                    <?php echo $_SESSION['phone']; ?>
                                 </span>
                                 <small class="tt">Mobile Number</small>
                              </div>
                           </li>
                           <li class="list-group-item">

                              <div class="list-details">
                                 <i class="bi bi-envelope"></i>
                                 <span>
                                    <?php echo $_SESSION['email']; ?>
                                 </span>
                                 <small class="tt">Email Address</small>
                              </div>
                           </li>
                           <li class="list-group-item">

                              <div class="list-details">
                                 <i class="bi bi-globe"></i>
                                 <span>www.evently/<?php echo $_SESSION['username']; ?>.com
                                 </span>

                                 <small class="tt">Profile Web-link</small>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="row text-center mt-6">
                                 <div class="col p-2">
                                    <i class="bi bi-buildings"></i>
                                    <span>
                                       <?php echo $_SESSION['username']; ?>
                                    </span>
                                    <small class="tt">Enterprise Or Association Name</small>
                                 </div>
                                 <div class="col p-2">
                                    <i class="bi bi-pin-map"></i>
                                    <span>
                                       <?php echo $_SESSION['country']; ?>
                                    </span>
                                    <small class="tt">Country</small>
                                 </div>
                                 <div class="col p-2">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>
                                       <?php echo $_SESSION['full_address']; ?>
                                    </span>
                                    <small class="tt">Full Address</small>
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
                     
                     <div class="tab-pane" id="messages1">
                        <div class="col-md-12">

                           <table class="table table-hover table-striped">
                              <tbody>
                                 <tr>
                                    <td>
                                       <strong>info</strong> Event created successfully
                                       <strong>`Event`</strong>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>info</strong> 5 new booking of event id[54]
                                       <strong>`booking`</strong>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>info</strong> Please update your login credentials
                                       event
                                       <strong>`Account`</strong>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>info</strong> where are updating our privacy and terms of our website
                                       <strong>`help`</strong>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <strong>info</strong>We are already 500 user of the platform
                                       <strong>`update`</strong>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <div class="tab-pane" id="messages">
                        <div class="alert alert-info alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <div class="alert-icon">
                              <i class="icon-info"></i>
                           </div>
                           <div class="alert-message">
                              <span><strong>Info!</strong> New booking on event[id 54] total booking 12.</span>
                           </div>
                       
                        </div>
                        <table class="table table-hover table-striped">
                           <tbody>
                              <tr>
                                 <td>
                                    <span class="float-right font-weight-bold">3 hrs ago</span> Please where is is the
                                    event located
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="float-right font-weight-bold">Yesterday</span> hello sir i would like
                                    to know more about the event
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="float-right font-weight-bold">9/10</span> Please what are charges to
                                    pay in order to assist the
                                    event
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="float-right font-weight-bold">9/4</span> Please where is is the event
                                    located
                              </tr>
                              <tr>
                                 <td>
                                    <span class="float-right font-weight-bold">9/4</span> hello sir i would like to know
                                    more about the event
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                    <a href="account.php?id=<?php echo $_SESSION['id']; ?>" ><div class="tab-pane" id="edit" ></a>
                       
                     <form action="account.php" method="post" enctype="multipart/form-data">
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="text" name="username" >
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Email</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="email" name="email" >
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                              <div class="col-lg-9">
                                 <input class="form-control" name="profile" type="file">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Phone Number</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="number" name="phone" 
                                    placeholder="+237670382061">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label for="" class="col-lg-3 col-form-label form-control-label">Country</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="text" name="country" 
                                    placeholder="Cameroon ">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Full Address</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="text" name="full_address" 
                                    placeholder="Town City ">
                              </div>
                           </div>

                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Password</label>
                              <div class="col-lg-9">
                                 <input class="form-control" name="password" type="password">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                              <div class="col-lg-9">
                                 <input class="form-control" name="passwordConf" type="password">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label"></label>
                              <div class="col-lg-9">

                              <div>
                            <button type="submit" name="update-user-session" class="button2">Update Profile</button>
                        </div>
                                 
                              </div>
                           </div>
                        </form>
                     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
      </div>
   </div>
   <style type="text/css">
      .nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
         color: #fff;
         background-color: #18b277 !important;
      }

      /* User Cards */

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
      .social0-links img {
    width: 28px;
    height: 28px;
    margin-right: 13px;
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
<style>
      button {
  border: none;
  outline: none;
  border-radius: 5px;
  padding: 8px 12px !important;
  background-color: var(--main-color);
  color: var(--text-white);
  cursor: pointer;
}
   </style>
</body>

</html>
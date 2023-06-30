<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
userOnly();
user3Only();
$users = selectAll('users');
$categories = selectAll('categories')
    ?>

<head>

    <!-- Meta head -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Title -->
    <title>Evently || My Account</title>

    <!-- Favicons -->
   
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

    <!-- Vendor CSS Files -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Bootstrap /JQuarry / Ajax Links  -->
       <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Page Main CSS File -->
     <link rel="stylesheet" href="../assets/css/admin style.css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader"></div>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <main>
        
        <div class="container">
<div class="row">
        <div class="col-lg-4">
           <div class="profile-card-4 z-depth-3">
            <div class="card">
              <div class="card-body text-center bg-primary rounded-top">
               <div class="user-box">
                <img src="<?php echo BASE_URL . '/assets/images/users/' . $_SESSION['profile'] ?>" alt="user avatar">
              </div>
              <h5 class="mb-1 text-white">   <?php echo $_SESSION['username']; ?></h5>
              <h6 class="text-light">

                                                           <?php echo 'Guest User'; ?>
                    
                           </h6>
             </div>
              <div class="card-body">
                <ul class="list-group shadow-none">
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="list-details">
                    <span>   <?php echo $_SESSION['phone']; ?></span>
                    <small>Mobile Number</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="list-details">
                    <span><?php echo $_SESSION['email']; ?></span>
                    <small>Email Address</small>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="list-icon">
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="list-details">
                    <span>www.evently/<?php echo $_SESSION['username']; ?>.com</span>
                    <small>Profile Web-link</small>
                  </div>
                </li>
                </ul>
                <div class="row text-center mt-4">
                  <div class="col p-2">
                   <h4 class="mb-1 line-height-5">154</h4>
                    <small class="mb-0 font-weight-bold">Booked Events</small>
                   </div>
                    <div class="col p-2">
                      <h4 class="mb-1 line-height-5">2.2k</h4>
                     <small class="mb-0 font-weight-bold">Following</small>
                    </div>
                    <div class="col p-2">
                     <h4 class="mb-1 line-height-5">9.1k</h4>
                     <small class="mb-0 font-weight-bold">Subscriptions</small>
                    </div>
                 </div>
               </div>
               <div class="card-footer text-center">
                 <a href="javascript:void()" class="btn-social btn-facebook waves-effect waves-light m-1"><i class="bi bi-facebook"></i></a>
                 <a href="javascript:void()" class="btn-social btn-google-plus waves-effect waves-light m-1"><i class="bi bi-google-plus"></i></a>
                 <a href="javascript:void()" class="list-inline-item btn-social btn-behance waves-effect waves-light"><i class="bi bi-behance"></i></a>
                 <a href="javascript:void()" class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i class="bi bi-dribbble"></i></a>
                 <a href="javascript:void()" class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i class="bi bi-instagram"></i></a>
                 <a href="javascript:void()" class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i class="bi bi-tweeter"></i></a>
               </div>
             </div>
           </div>
        </div>
        <div class="col-lg-8">
           <div class="card z-depth-3">
            <div class="card-body">
            <ul class="nav nav-pills nav-pills-primary nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Events</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#bookings" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Bookings</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active show" id="profile">
                    
                    <div class="row">
                        
                        <div class="col-md-6">
                            <h6>Intrested Event Categories</h6>
                                     <?php foreach ($categories as $key => $category): ?>
                                                           <a
                                                        href="<?php echo BASE_URL . '/index.php?c_id=' . $category['id'] . '&name=' . $category['name'] ?>#my-nid"  class="badge badge-dark badge-pill">     <?php echo $category['name']; ?></a>

                       
            <?php endforeach; ?>
                           <br>
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="bi bi-clock-o ion-clock float-right"></span>Evently Notifications</h5>
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                      <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                              <div class="ju" ></div>
                        </div>
                          <div class="ju" ></div>
                        <br>
                      
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
         <table>          
<label class="text-muted mr-3" for="order-sort">Sort Orders</label>
<select class="form-control" id="order-sort">
<option>All</option>
<option>Assisted </option>
<option>Missed</option>
<option>Canceled</option>
</select>
</div>
</div>
<div class="table-responsive">
<table class="table table-hover mb-0">
<thead>
 <tr>
<th>Event Id</th>
<th>Name</th>
<th>Status</th>

</tr>
</thead>
<tbody>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">78</a></td>
<td>Douala Art Show</td>

<td><span class="badge badge-danger m-0">Canceled</span></td>

</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">34</a></td>
<td>Yafe</td>
<td><span class="badge badge-danger m-0">Canceled</span></td>

</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">11</a></td>
<td>Sago Douala</td>
<td><span class="badge badge-warning m-0">Missed</span></td>

</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">28</a></td>
<td>Fomaric</td>
<td><span class="badge badge-success m-0">Assisted </span></td>

</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">50</a></td>
<td>Promote Yaounde</td>
<td><span class="badge badge-success m-0">Assisted </span></td>

</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">47</a></td>
<td>March 30, 2017</td>
<td><span class="badge badge-success m-0">Assisted </span></td>

</tr>
</tbody>
</table>

                
                </div>
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                <div class="tab-pane" id="bookings">
                         <table>          
<label class="text-muted mr-3" for="order-sort">Sort Orders</label>
<select class="form-control" id="order-sort">
<option>All</option>
<option>Booked </option>
<option>Canceled</option>

</select>
</div>
</div>
<div class="table-responsive">
<table class="table table-hover mb-0">
<thead>
 <tr>
<th>Event Id</th>
<th>Name</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>


</tr>
</thead>
<tbody>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">78</a></td>
<td>Douala Art Show</td>
<td>August 08, 2017</td>
<td><span class="badge badge-danger m-0">Canceled</span></td>
<td><span class="badge badge-success m-0">Book</span></td>
</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">34</a></td>
<td>Yafe</td><td>July 21, 2017</td>
<td><span class="badge badge-danger m-0">Canceled</span></td>
<td><span class="badge badge-success m-0">Book</span></td>
</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">11</a></td>
<td>Sago Douala</td><td>May 19, 2017</td>
<td><span class="badge badge-danger m-0">Canceled</span></td>
<td><span class="badge badge-success m-0">Book</span></td>
</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">28</a></td>
<td>Fomaric</td><td>April 04, 2017</td>
<td><span class="badge badge-success m-0">Booked</span></td>
<td><span class="badge badge-danger m-0">Un-book</span></td>
</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">50</a></td>
<td>Promote Yaounde</td><td>March 30, 2017</td>
<td><span class="badge badge-success m-0">Booked</span></td>
<td><span class="badge badge-danger m-0">Un-book</span></td>
</tr>
<tr>
<td><a class="navi-link" href="#order-details" data-toggle="modal">47</a></td><td>Canal Show Yaounde</td>
<td>Jan 30, 2017</td>
<td><span class="badge badge-success m-0">Booked </span></td>
<td><span class="badge badge-danger m-0">Un-book</span></td>
</tr>
</tbody>
</table>
               
               
               
                        </div>
                <div class="tab-pane" id="edit">

                   <form>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="text" name="username" value="Mark">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Email</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="email" name="email" value="mark@example.com">
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
                                 <input class="form-control" type="text" name="phone" value=""
                                    placeholder="+237670382061">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label for="" class="col-lg-3 col-form-label form-control-label">Country</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="text" name="country" value=""
                                    placeholder="Cameroon ">
                              </div>
                           </div>
                           <div class="form-group row1">
                              <label class="col-lg-3 col-form-label form-control-label">Full Address</label>
                              <div class="col-lg-9">
                                 <input class="form-control" type="text" name="full_address" value=""
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
                                 <input type="reset" class="btn btn-secondary" value="Cancel">
                                 <input type="button" class="btn btn-primary" value="Save Changes">
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
<style>

.action1 .menu .kk li a {
    display: inline-block;
    color: rgb(10, 10, 10);
    font-size: 14px;
    font-weight: 600;
    padding-left: 15px!important;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
}
.action1 .menu .kk li {
    align-items: left;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  display: flex;
  justify-content:left;
  list-style: none;
    padding: 7px -50px;
  
  margin-top: 8px;
  margin-bottom: 5px;
  margin-left: -30px;
}

a span {
    font-size: inherit;
    line-height: 20px!important;
    margin-left: 5px!important;
}
/* User Cards */
.nav-pills .nav-link.active,
      .nav-pills .show>.nav-link {
         color: #fff;
         background-color: #18b277 !important;
         font-size: 15px!important;
      }
      .card z-depth-3{
height: 90px;
      }

      /* .col-lg-4{
        margin-left: -5px;
      } */
.profile-card-4 {
          margin-left: -30px;
          width:10%;
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
         margin-top: -70px;
         margin-left: 50px;
      }
      h2{
     
         font-size: 25px!important;
      }
      .ju{
        height: 15px;
        margin-top: 15px;
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


      .col-lg-8 {
         height: 20%;
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
.user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 20px;
    
}

.user-box img {
             margin-left: -5px;
     height: 125px;
    width: 110%;
    border-radius: 50%;
    padding: 3px;
    background: #fff;
    -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.profile-card-2 .card {
    position:relative;
}

.profile-card-2 .card .card-body {
    z-index:1;
}

.profile-card-2 .card::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    left: 0px;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    height: 112px;
    background-color: #e6e6e6;
}

.profile-card-2 .card.profile-primary::before {
    background-color: #008cff;
}
.profile-card-2 .card.profile-success::before {
    background-color: #24bf74;
}
.profile-card-2 .card.profile-danger::before {
    background-color: #fd3550;
}
.profile-card-2 .card.profile-warning::before {
    background-color: #ff9700;
}
.profile-card-2 .user-box {
    margin-top: 30px;
}

.profile-card-3 .user-fullimage {
    position:relative;
}

.profile-card-3 .user-fullimage .details{
    position: absolute;
    bottom: 0;
    left: 0px;
    width:100%;
}

.profile-card-4 .user-box {
    width: 110px;
    margin: auto;
    margin-bottom: 10px;
    margin-top: 15px;
}

.profile-card-4 .list-icon {
    display: table-cell;
    font-size: 30px;
    padding-right: 20px;
    vertical-align: middle;
    color: #22352e;
}

.profile-card-4 .list-details {
    display: table-cell;
    vertical-align: middle;
    font-weight: 600;
    color: #22352e;
    font-size: 15px;
    line-height: 15px;
}

.profile-card-4 .list-details small{
    display: table-cell;
    vertical-align: middle;
    font-size: 12px;
    font-weight: 400;
    color: #808080;
}

/*Nav Tabs & Pills */
.nav-tabs .nav-link {
    color: #22352e;
    font-size: 8px;
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
.nav-tabs .nav-link:hover{
    border: 1px solid transparent;
}
.nav-tabs .nav-link i {
    margin-right: 2px;
    font-weight: 400;
}

.top-icon.nav-tabs .nav-link i{
    margin: 0px;
    font-weight: 500;
    display: block;
    font-size: 10px;
    padding: 5px 0;
}

.nav-tabs-primary.nav-tabs{
    border-bottom: 1px solid #008cff;
}

.nav-tabs-primary .nav-link.active, .nav-tabs-primary .nav-item.show>.nav-link {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-top: 3px solid #008cff;
}

.nav-tabs-success.nav-tabs{
    border-bottom: 1px solid #24bf74;
}

.nav-tabs-success .nav-link.active, .nav-tabs-success .nav-item.show>.nav-link {
    color: #24bf74;
    background-color: #fff;
    border-color: #24bf74 #24bf74 #fff;
    border-top: 3px solid #24bf74;
}

.nav-tabs-info.nav-tabs{
    border-bottom: 1px solid #0dceec;
}

.nav-tabs-info .nav-link.active, .nav-tabs-info .nav-item.show>.nav-link {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-top: 3px solid #0dceec;
}

.nav-tabs-danger.nav-tabs{
    border-bottom: 1px solid #fd3550;
}
a{
    color: #197551;
}
a :hover{
    color:#18b277!important;
}
.nav-tabs-danger .nav-link.active, .nav-tabs-danger .nav-item.show>.nav-link {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-top: 3px solid #fd3550;
}

.nav-tabs-warning.nav-tabs{
    border-bottom: 1px solid #ff9700;
}

.nav-tabs-warning .nav-link.active, .nav-tabs-warning .nav-item.show>.nav-link {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-top: 3px solid #ff9700;
}

.nav-tabs-dark.nav-tabs{
    border-bottom: 1px solid #22352e;
}

.nav-tabs-dark .nav-link.active, .nav-tabs-dark .nav-item.show>.nav-link {
    color: #22352e;
    background-color: #fff;
    border-color: #22352e #22352e #fff;
    border-top: 3px solid #22352e;
}

.nav-tabs-secondary.nav-tabs{
    border-bottom: 1px solid #75808a;
}
.nav-tabs-secondary .nav-link.active, .nav-tabs-secondary .nav-item.show>.nav-link {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-top: 3px solid #75808a;
}

.tabs-vertical .nav-tabs .nav-link {
    color: #22352e;
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

.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #dee2e6;
}

.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    border-bottom: 1px solid #dee2e6;
    border-right: 0;
    border-left: 1px solid #dee2e6;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #008cff;
}

.tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
    color: #008cff;
    background-color: #fff;
    border-color: #008cff #008cff #fff;
    border-bottom: 1px solid #008cff;
    border-right: 0;
    border-left: 3px solid #008cff;
}

.tabs-vertical-success.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #24bf74;
}

.tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
    color: #24bf74;
    background-color: #fff;
    border-color: #24bf74 #24bf74 #fff;
    border-bottom: 1px solid #24bf74;
    border-right: 0;
    border-left: 3px solid #24bf74;
}

.tabs-vertical-info.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #0dceec;
}

.tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
    color: #0dceec;
    background-color: #fff;
    border-color: #0dceec #0dceec #fff;
    border-bottom: 1px solid #0dceec;
    border-right: 0;
    border-left: 3px solid #0dceec;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #fd3550;
}

.tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
    color: #fd3550;
    background-color: #fff;
    border-color: #fd3550 #fd3550 #fff;
    border-bottom: 1px solid #fd3550;
    border-right: 0;
    border-left: 3px solid #fd3550;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #ff9700;
}

.tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
    color: #ff9700;
    background-color: #fff;
    border-color: #ff9700 #ff9700 #fff;
    border-bottom: 1px solid #ff9700;
    border-right: 0;
    border-left: 3px solid #ff9700;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #22352e;
}

.tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
    color: #22352e;
    background-color: #fff;
    border-color: #22352e #22352e #fff;
    border-bottom: 1px solid #22352e;
    border-right: 0;
    border-left: 3px solid #22352e;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs{
    border:0;
    border-right: 1px solid #75808a;
}

.tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link, .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
    color: #75808a;
    background-color: #fff;
    border-color: #75808a #75808a #fff;
    border-bottom: 1px solid #75808a;
    border-right: 0;
    border-left: 3px solid #75808a;
}

.nav-pills .nav-link {
    border-radius: .25rem;
    color: #22352e;
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
    background-color:#f4f5fa;
}

.nav-pills .nav-link i{
    margin-right:2px;
    font-weight: 600;
}

.top-icon.nav-pills .nav-link i{
    margin: 0px;
    font-weight: 500;
    display: block;
    font-size: 20px;
    padding: 5px 0;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #008cff;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
}

.nav-pills-success .nav-link.active, .nav-pills-success .show>.nav-link {
    color: #fff;
    background-color: #24bf74;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(21, 202, 32, .5);
}

.nav-pills-info .nav-link.active, .nav-pills-info .show>.nav-link {
    color: #fff;
    background-color: #0dceec;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
}

.nav-pills-danger .nav-link.active, .nav-pills-danger .show>.nav-link{
    color: #fff;
    background-color: #fd3550;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(253, 53, 80, .5);
}

.nav-pills-warning .nav-link.active, .nav-pills-warning .show>.nav-link {
    color: #fff;
    background-color: #ff9700;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(255, 151, 0, .5);
}

.nav-pills-dark .nav-link.active, .nav-pills-dark .show>.nav-link {
    color: #fff;
    background-color: #22352e;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(34, 48, 53, .5);
}

.nav-pills-secondary .nav-link.active, .nav-pills-secondary .show>.nav-link {
    color: #fff;
    background-color: #75808a;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(117, 128, 138, .5);
}
.card .tab-content{
    padding: 1rem 0 0 0;
}

.z-depth-3 {
     width: 110%;
   height: 10%;
    -webkit-box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
    box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
}
</style>
    </main>

    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
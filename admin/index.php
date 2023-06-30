<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/events.php");
adminOnly();
$events = getPublishedEvents();

if (1 !== $_SESSION['role_id']){
   $events = getAllEventsFromUser($_SESSION['id']); 
}
 
$enterprise = 1000;
$pro = 12;
$free = 2;
$limit = count($events); 
$result =   $free  - $limit;
$result1 = $pro - $limit;
$result2 =  $enterprise - $limit;
$result3 = 0;

$categories = selectAll('categories');
$total_users = selectAll('users');
$yep=getAllEventsFromUser(76); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Evently || Dashboard</title>
   <!-- CSS File Link -->
   <link rel="stylesheet" href="../assets/css/admin style.css">

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">

 

</head>

<body>
   <section class="admin"></section>
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
                  <li class="active">
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
                  <li>
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
                     <li class="active">
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
                     <li>
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

      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>



      <?php if (empty($_SESSION['id']) || 1 !== $_SESSION['role_id']): ?>


         <main>
            <div class="cards">
                <div class="single-card">
                    <div>
                        <span>EVENTS</span>
                        <h2>
                            <?php echo count($events); ?>
                        </h2>
                    </div>
                    <i class="bi bi-clipboard-data"></i>
                </div>
                <div class="single-card">
                    <div>
                        <span>EVENT BOOKINGS</span>
                        <h2>
                            <?php echo count($categories); ?>
                        </h2>
                    </div>
                    <i class="bi bi-calendar2-week"></i>
                </div>

                <div class="single-card">
                    <div>
                        <span>TICKETS  SOLD</span>
                        <h2> 2500</h2>
                    </div>
                    <i class="bi bi-ticket-perforated"></i>
                </div>

                <?php if (1 == $_SESSION['subscription_id']): ?>
                <div class="single-card">
                    <div>
                        <span>Events Left</span>
                        <h2>
                       
                             <?php echo $result2; ?>
                          
                        </h2>
                    </div>
                    <i class="bi bi-hourglass-split"></i>
                </div>
                <?php endif; ?>
                
                <?php if (2 == $_SESSION['subscription_id']): ?>
                <div class="single-card">
                    <div>
                        <span>Events Left</span>
                        <h2>
                        <?php if ($result < 0): ?>
                             <?php echo $result3; ?>
                             <?php else: ?>
                             <?php echo $result1; ?>
                             <?php endif; ?> 
                        </h2>
                    </div>
                    <i class="bi bi-hourglass-split"></i>
                </div>
                <?php endif; ?>
                
                <?php if (3 == $_SESSION['subscription_id']): ?>
                <div class="single-card">
                    <div>
                        <span>Events Left</span>
                        <h2>
                        <?php if ($result < 0): ?>
                             <?php echo $result3; ?>
                             <?php else: ?>
                             <?php echo $result; ?>
                             <?php endif; ?> 
                        </h2>
                    </div>
                    <i class="bi bi-hourglass-split"></i>
                </div>
                <?php endif; ?>
            </div>
            <div class="price"></div>

            <div class="wrapper flex">

            <div class="projects">
               <div class="card-header flex">
                  <h3>Highly booked Events</h3>
                  <button>See all <i class="bi bi-arrow-right-circle"></i></button>
               </div>

               <table>
                  <thead>
                     <th>
                        <tr class="ntr">
                           
                           <td class="ntd">Event Title</td>
                           <td class="ntd">Views</td>
                           <td class="ntd">Bookings</td>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <?php foreach ($events as $key => $event): ?>
                        <tr>

                           
                           <td>
                              <?php echo $event['title']; ?>
                           </td>
                           <td>
                             200
                           </td>
                           <td>
                             300
                           </td>


                        <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
            <?php if (1 == $_SESSION['subscription_id']): ?>
  <!-- Pricing Table-->
  <div class="col-lg-4">
  <h3>Current Subscription [ Enterprise ]</h3>
        <div class="bg-white p-5 rounded-lg shadow"><div class="op"><a href='https://postimg.cc/N5JGmfmd' target='_blank'><img src='https://i.postimg.cc/N5JGmfmd/space-ship.png' border='0' alt='space-ship'/></a>
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Enterprise</h1>
          
          <h2 class="h1 font-weight-bold">$899<span class="text-small font-weight-normal ml-2">/ Year</span></h2>
          </div>
          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i>Unlimited Events</li>
            <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i> Unlimited Categories & Tags</li>
            <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i> % Bookings Charges</li>
            <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i> Speakers & Panelist</li>
              <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i> Event Schedule</li>
              <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i>Direct Booking Payment</li>
              <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i>Communicators[spreaders]</li>
              <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i>Featured Listings</li>
          </ul>

          <a href="<?php echo BASE_URL . '/pages/pricing.php' ?>"
                            class="btn btn-primary btn-block p-2 shadow rounded-pill">Upgrade Your Plan</a>
        </div>
      </div>
      <!-- END -->
                <?php endif; ?>
                
                <?php if (2 == $_SESSION['subscription_id']): ?>
    <!-- Pricing Table-->
    <div class="col-lg-4 mb-5 mb-lg-0">
    <h3>Current Subscription [ Pro ]</h3>
        <div class="bg-white p-5 rounded-lg shadow"><div class="op">
        <a href='https://postimg.cc/30KZmZm0' target='_blank'><img src='https://i.postimg.cc/30KZmZm0/premium.png' border='0' alt='premium'/></a>
          <h1 class="h6 text-uppercase font-weight-bold mb-4">Pro</h1>
          <h2 class="h1 font-weight-bold">$399<span class="text-small font-weight-normal ml-2">/ Month</span></h2>
          </div>
          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
            
            <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i> 12 Events</li>
            <li class="mb-3">
              <i class="bi bi-check mr-2 text-primary"></i> 25 % Bookings Charges</li>
            <li class="mb-3">
           
              <i class="bi bi-check mr-2 text-primary"></i> 3 Categories & Tags </li>
            <li class="mb-3 text-muted">
              <i class="bi bi-x"></i>
              <del>Speakers & Panelist</del> </li>
              <li class="mb-3 text-muted">
              <i class="bi bi-x"></i>
              <del>Event Schedule</del> </li>
              <li class="mb-3 text-muted">
                <i class="bi bi-x"></i>
              <del>Direct Booking Payment </del>
            </li>
            <li class="mb-3 text-muted">
                <i class="bi bi-x"></i>
              <del>Communicators[spreaders] </del>
            </li>
          </ul>
          <a href="<?php echo BASE_URL . '/pages/pricing.php' ?>"
                            class="btn btn-primary btn-block p-2 shadow rounded-pill">Upgrade Your Plan</a>
        </div>
      </div>
      <!-- END -->
                <?php endif; ?>
                <?php if (3 == $_SESSION['subscription_id']): ?>
                      <!-- Pricing Table-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                        <h3>Current Subscription [ NJOH ]</h3>
                    <div class="bg-white p-5 rounded-lg shadow"> <div class="op"><a href='https://postimg.cc/pyxCwP4V'
                            target='_blank'><img src='https://i.postimg.cc/pyxCwP4V/free.png' border='0'
                                alt='free' /></a>
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">Le Njoh</h1>
                        <h2 class="h1 font-weight-bold">$00<span class="text-small font-weight-normal ml-2">/
                                Ever</span></h2>
                                </div>
                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left">

                            <li class="mb-3">
                                <i class="bi bi-check-lg text-primary"></i> 2 Events
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-check-lg text-primary"></i> 35 % Bookings Charges
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="bi bi-x"></i>
                                <del>Categories & Tags</del>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="bi bi-x"></i>
                                <del>Speakers & Panelist</del>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="bi bi-x"></i>
                                <del>Event Schedule</del>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="bi bi-x"></i>
                                <s>Direct Booking Payment </s>
                            </li>
                            <li class="mb-3 text-muted">
                                <i class="bi bi-x"></i>
                                <del>Communicators[spreaders] </del>
                            </li>
                        </ul>
                        <a href="<?php echo BASE_URL . '/pages/pricing.php' ?>"
                            class="btn btn-primary btn-block p-2 shadow rounded-pill">Upgrade Your Plan</a>
                                   
                           
                    </div>
                </div>
                <!-- END -->
               <?php endif; ?>
               
              
            
            </div>
        </main>

         <?php else: ?>
<main>
         <div class="cards">
            <div class="single-card">
               <div>
                  <span>EVENTS</span>
                  <h2>
                     <?php echo count($events); ?>
                  </h2>
               </div>
               <i class="bi bi-clipboard-data"></i>
            </div>
            <div class="single-card">
               <div>
                  <span>REGISTERED USERS</span>
                  <h2>
                     <?php echo count($total_users); ?>
                  </h2>
               </div>
               <i class="bi bi-people"></i>
            </div>
            <div class="single-card">
               <div>
                  <span>EVENT BOOKINGS</span>
                  <h2>
                     25000
                  </h2>
               </div>
               <i class="bi bi-calendar2-week"></i>
            </div>
            <div class="single-card">
               <div>
               <span>TICKETS  SOLD</span>
                        <h2> 2500</h2>
                    </div>
                    <i class="bi bi-ticket-perforated"></i>
            </div>
         </div>


         <div class="wrapper flex">
            <div class="projects">
               <div class="card-header flex">
                  <h3>Top Events</h3>
                  <button>See all <i class="bi bi-arrow-right-circle"></i></button>
               </div>

               <table>
                  <thead>
                     <th>
                        <tr class="ntr">
                           <td class="ntd">Author</td>
                           <td class="ntd">Event Title</td>
                           <td class="ntd">Location</td>
                           <td class="ntd">Created At</td>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <?php foreach ($events as $key => $event): ?>
                        <tr>

                           <td>
                              <?php echo $event['username']; ?>
                           </td>
                           <td>
                              <?php echo $event['title']; ?>
                           </td>
                           <td>
                              <?php echo $event['location']; ?>
                           </td>
                           <td>
                              <?php echo $event['created_at']; ?>
                           </td>


                        <?php endforeach; ?>
                  </tbody>
               </table>
            </div>

            <div class="customers">
               <div class="card-header flex">
                  <h3>Top Event Creator</h3>
                  <button>See all <i class="bi bi-arrow-right-circle"></i></button>
               </div>

               <table>

                     <tr class="flex">
                        <td class="flex">
                           <img src="../assets/images/users/1680412853_b.jpeg" width="30px" height="30px" alt="">
                           <div>
                              <h5>
                               Noncio
                              </h5>
                              <small>noncio@gmail.com</small>
                              <small>
                              
                              </small>
                           </div>
                        </td>

                        <td class="ntd">
                           <i>      <?php echo count($yep); ?></i>
                           <i class="bi bi-calendar-week"></i>
                           <i class="bi bi-whatsapp"></i>
                           <i class="bi bi-telephone"></i>
                        </td>
                     </tr>



               </table>
            </div>
         </div>
      </main>
   

            <?php endif; ?>
      
   </div>
   </section>
   <script src="../assets/js/main.js"></script>
   <script>
      var timeout = 1000; // in miliseconds (3*1000)

      $("#status-msg").delay(timeout).fadeOut(3000);
      var timeout = 1000; // in miliseconds (3*1000)

      $('.status-msg').delay(timeout).fadeOut(3000);
   </script>
<style>


a:hover,
      a:visited,
      a:link,
      a:active {
         text-decoration: none !important;
         color: unset !important;

      }


      button {
  border: none;
  outline: none;
  border-radius: 5px;
  padding: 8px 12px !important;
  background-color: var(--main-color);
  color: var(--text-white);
  cursor: pointer;
}
.op{ margin-left: 120px !important;
            
            position: relative;
        }
           
.rounded-lg {
            border-radius: 1rem !important;
            width: 100%;

        }

        .mx-auto h1 {
            color: #197551 !important;
            border-left: 1px solid #197551 !important;
        }

        .mx-auto p {
            color: #197551 !important;
        }

        .rounded-lg img {
            width: 50px;
            margin-bottom: 10px;
        }

        .col-lg-4 {
            
            margin-top: -10px;
        }

        .text-primary {
            color: #18b277 !important;
        }


        .btn-primary:hover {}

        .btn-primary:visited,
        .btn-primary:link,
        .btn-primary:active,
        .btn-primary:active,
        .btn-primary:focus {
            color: #fff!important;
            background-color: black !important;
            border-color: #197551 !important;
        }

        .btn:hover {
            background-color: black !important;
        }

        .btn:visited,
        .btn:link,
        .btn:active,
        .btn:active,
        .btn:focus {
            color: #fff!important;
            background-color: #197551 !important;
            border-color: #197551 !important;
        }


        .btn-block,
        .p-2,
        shadow .rounded-pill: :hover {
            background-color: black !important;
        }

        .btn-block,
        .p-2,
        shadow .rounded-pill: :visited,
        .btn-block,
        .p-2,
        shadow .rounded-pill: :link,
        .btn-block,
        .p-2,
        shadow .rounded-pill: :active,
        .btn-block,
        .p-2,
        shadow .rounded-pill: :focus {
            color: #fff;
            background-color: black !important;
            border-color: #197551 !important;
        }

        .btn-block:active {
            color: #fff!important;
            background-color: black !important;
        }

        .p-2 :active {
            color: #fff;
            background-color: #197551 !important;
        }

        .rounded-pill :active {
            color: #fff!important;
            background-color: #197551 !important;
        }

        .btn-primary {
            color: #fff!important;
            background-color: #18b277;
            border-color: #18b277;
        }

        .btn-primary:hover,
        {
        color: #fff!important;
        background-color: #197551 !important;
        border-color: #197551 !important;
        }

        .text-small {
            font-size: 15px !important;
        }
        .text-small i{
            font-size: 20px !important;
        }

        .custom-separator {
            width: 8rem;
            height: 6px;
            border-radius: 1rem;
            background-color: #18b277 !important;
        }

        .text-uppercase {
            letter-spacing: 0.2em;
        }
        

    

   </style>
</body>

</html>
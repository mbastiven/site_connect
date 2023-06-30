<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/events.php");
adminOnly();
$limit = "";

if (1 == $_SESSION['subscription_id']) {
   $limit = 1000;
}
if (2 == $_SESSION['subscription_id']) {
   $limit = 12;
}
if (3 == $_SESSION['subscription_id']) {
   $limit = 2;
}
//dd($limit);
$eventTitle = '';
if (isset($_POST['search-term'])) {

   $eventTitle = "Search Result For'" . $_POST['search-term'] . "'";
   $events = searchEventsByName($_POST['search-term']);
}else{
   $eventTitle = 'Manage Events ';
}
?>
<?php if (1 !== $_SESSION['role_id']): ?>
   <?php $events = getAllEventsFromUser($_SESSION['id']); ?>
   <?php ?>
<?php else: ?>
   <?php $events = getAllEvents(); ?>
<?php endif;
if (isset($_POST['search-term'])) {

   $eventTitle = "Search Result For'" . $_POST['search-term'] . "'";
   $events = searchEventsByName($_POST['search-term']);
}

if (isset($_GET['up'] )) {
   if (1 !== $_SESSION['role_id']){
      $events = getAllEventsUnpublishedFromUser($_SESSION['id']);
   }else {
   $events = getAllEventsUnpublishedEvents();

}
  
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Evently || Dashboard</title>



   <!-- CSS File Link -->
   <link rel="stylesheet" href="../../assets/css/admin style.css">
      
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">


</head>

<body>
   <?php include(ROOT_PATH . "/app/includes/sidebar/events.php"); ?>
   <div class="main-content" id="main-content">
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>

      <main>


         <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>


         <div class="wrapper flex">


            <div class="obt" id="my-nid">
       
            <?php if (count($events) >= $limit):?>
               <?php    //dd(count($events));?>
               <div class="msg review">  <p>Your subscription plan is exhausted ! Please upgrade it and try again. <a href="../index.php">click here</a> </p></div>
               <a href="<?php echo BASE_URL . '/admin/index.php' ?> "><button class="nbtn">Add Events</button></a>
               
               
               <?php else: ?>
                  <a href="create.php"><button class="nbtn">Add Events</button></a>
                  <?php endif; ?>
               
                  <a href="index.php #my-nid"> <button class="nbtn">Manage Events</button></a>

              
            </div>
         </div>
         <div class="projects1" >


            <div class="card-header flex" >


               <h3>
                  <?php echo $eventTitle; ?>

                  <?php echo count($events); ?>
                


                  <div class="formx">
                     <form action="index.php" method="post">
                        <input name="search-term" type="text" class="text-input" placeholder="Search.........">
                        <button class="btn btn-outline-primary">search</button>
                     </form>

                  </div>
               </h3>
               
<div class="list-view">
<a href="view-all.php #my-nid" ><i class="bi bi-grid"></i></a>
<a href="index.php #my-nid"><i class="bi bi-list-task"></i></a>
<p></p>

<a href="index.php?up=unpublished #my-nid"><button class="btn btn-outline-primary">To Be Published</button></a>
</div>



            <table>
               <thead>
                  <th>
                     <tr>
                        <th>SN</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Date Created</th>
                        <th>Event Day</th>
                        <th>Type</th>

                        <th colspan="4">Action</th>
                        
                     </tr>
                  </th>
               </thead>

               <tbody>
                  <?php foreach ($events as $key => $event): ?>
                     <tr>
                        <td>
                           <?php echo $key + 1 ?>
                        </td>
                        <td>
                           <?php echo $event['username']; ?>
                        </td>
                        <td>
                           <?php echo $event['title']; ?>
                        </td>
                        <td>
                           <?php echo $event['created_at']; ?>

                        </td>
                        <td>
                           <?php echo $event['event_day']; ?>
                        </td>
                        <td>
                           <?php echo $event['type']; ?>
                        </td>
                        <td><a href="view.php?id=<?php echo $event['id']; ?>" class="eyed"><i class="bi bi-eye"></i></a>
                              </td>
                        <td><a href="edit.php?id=<?php echo $event['id']; ?>" class="edit"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="index.php?delete_id=<?php echo $event['id']; ?>" class="delete"><i class="bi bi-trash3"></i></a></td>

                        <?php if (1 == $_SESSION['role_id']): ?>
                           <?php if ($event['published']): ?>
                              
                              <td><a href="edit.php?published=0&p_id=<?php echo $event['id']; ?>" class="unpublish">Unpublish</a>
                              </td>
                           <?php else: ?>
                              <td><a href="edit.php?published=1&p_id=<?php echo $event['id']; ?>" class="publish">Publish</a>
                              </td>
                           <?php endif; ?>
                        </tr>
                     <?php else: ?>
                        <?php if ($event['published']): ?>

                           <td><a href="edit.php?published=0&p_id=<?php echo $event['id']; ?>" class="unpublish">Unpublish</a>
                           </td>
                        <?php else: ?>
                           <td><a href="edit.php?published=1&lol_id=<?php echo $event['id']; ?>" class="publish">Publish</a>
                           </td>
                        <?php endif; ?>
                        </tr>
                     <?php endif; ?>

                  <?php endforeach; ?>


               </tbody>
            </table>
         </div>

   </div>
   </main>
   </div>
   <script src="<?php echo BASE_URL . '/assets/js/main.js' ?> "></script>
   <style>
 
td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid;
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
   </style>
</body>
<style>

   .list-view i{
      padding-right: -5px;
      margin-left: 25px;
      font-size: 22px;
      font-weight: 500px;
      color:  #18b277;
   }
 .list-view p{
font-size: 12px;
margin-top: 5px;
margin-left: 25px;
   }
   .msg{
      color: black !important;
      height: 65px !important;
     background: #18b277 !important;
      margin-left: 275px;
      border-top: 15px #18b277 solid;
   }
   .review {
      background:#18b277!important;
      border-radius: 10px;
      width: 93%!important;
   }
   .review  p{
      margin-left: 190px;
   }
   .review  p a {
     color: white!important;
     font-size: 14px!important;
   }
   td .eyed {
      color: black;
   }

   td .publish ,.unpublish{
      height: 15px !important;
      padding: 5px;
      color: white !important;
      background-color: black !important;
      border: black 1px solid !important;
      border-radius: 10px;
   }
</style>

</html>
<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/subscriptions.php");
superAdminOnly();



?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Evently || Dashboard</title><!-- CSS File Link -->
   <link rel="stylesheet" href="../../assets/css/admin style.css">
      
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
   <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
</head>

<body>
   <?php include(ROOT_PATH . "/app/includes/sidebar/subscriptions.php"); ?>
   <div class="main-content" id="main-content">
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <main>
         <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

         <div class="wrapper flex">
            <div class="obt">
               <a href="create.php"><button class="nbtn">Add subscriptions</button></a>
               <a href="index.php"><button class="nbtn">Manage subscriptions</button></a>
            </div>
            <div class="projects1">
               <div class="card-header flex">
                  <h3>Manage subscriptions</h3>

               </div>

               <table>
                  <thead>
                     <th>
                        <tr>
                           <th>SN</th>
                           <th>Name</th>
                           <th>Limit</th>
                           <th>Description</th>
                     
                           <th colspan="2">Action</th>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <?php foreach ($subscriptions as $key => $subscription): ?>
                        <tr>
                           <td>
                              <?php echo $key + 1 ?>
                           </td>
                           <td>
                              <?php echo $subscription['name']; ?>
                           </td>
                           <td>
                              <?php echo $subscription['limits']; ?>
                           </td>
                           
                           <td>
                              <?php echo $subscription['description']; ?>
                           </td>
                              
                          
                           <td><a href="edit.php?id=<?php echo $subscription['id']; ?>" class="edit"><i class="bi bi-pencil-square"></i></a></td>
                           <td><a href="index.php?del_id=<?php echo $subscription['id']; ?>" class="delete"><i class="bi bi-trash3"></i></a></td>

                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>

         </div>
      </main>
   </div>
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
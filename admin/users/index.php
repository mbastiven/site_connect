<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
superAdminOnly(); 


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
   <?php include(ROOT_PATH . "/app/includes/sidebar/users.php"); ?>
   <div class="main-content" id="main-content">
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <main>
         <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
         <div class="wrapper flex">
            <div class="obt">


               <a href="create.php"><button class="nbtn">Add User</button></a>
               <a href="index.php"><button class="nbtn">Manage Users</button></a>

            </div>
            <div class="projects1">
               <div class="card-header flex">
                  <h3>Manage Users [ADMINS]
                     <?php echo count($admin_role); ?>
                  </h3>

               </div>

               <table>
                  <thead>
                     <th>
                        <tr>
                           <th>SN</th>
                           <th>Picture</th>
                           <th>User Name</th>
                           <th>Email</th>
                           <th>Contact</th>
                           <th>Created At</th>
                           <th colspan="6">Action</th>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <?php foreach ($admin_role as $key => $user): ?>
                        <tr>
                           <td>
                              <?php echo $key + 1 ?>
                           </td>

                  
                           <td>
                              <div class="action2">
                                 <div class="profile">
                                    <img src=" <?php echo BASE_URL . '/assets/images/users/' . $user['profile'] ?>" alt="">
                                 </div>
                              </div>
                           </td>
                           <td>
                              <?php echo $user['username']; ?>
                           </td>
                           <td>
                              <?php echo $user['email']; ?>
                           </td>
                           <td>
                              <?php echo $user['phone']; ?>
                           </td>
                           <td>
                              <?php echo $user['created_at']; ?>
                           </td>
                           <td><a href="view.php?id=<?php echo $user['id']; ?>" class="eyed"><i class="bi bi-eye"></i></a>
                              </td>

                           <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit"><i class="bi bi-pencil-square"></i></a></td>

                           <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete"><i class="bi bi-trash3"></i></a></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>

            </div>
            <a href="admins.php"><button class="nbtn">View All</button></a>

            <div class="projects1">
               <div class="card-header flex">
                  <h3>Manage Users [Event-CREATOR]
                     <?php echo count($eventCreator_role); ?>
                  </h3>

               </div>

               <table>
                  <thead>
                     <th>
                        <tr>
                           <th>SN</th>
                           <th>Picture</th>
                           <th>User Name</th>
                           <th>Email</th>
                           <th>Contact</th>
                           <th>Created At</th>
                           <th colspan="5">Action</th>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <?php foreach ($eventCreator_role as $key => $user): ?>
                        <tr>
                           <td>
                              <?php echo $key + 1 ?>
                           </td>

                            <td>
                              <div class="action2">
                                 <div class="profile">
                                    <img src="<?php echo BASE_URL . '/assets/images/users/' . $user['profile'] ?>" alt="">
                                    </div>
                                 </div>
                              </td>

                              <td>
                               <?php echo $user['username']; ?>
                           </td>
                           <td>
                              <?php echo $user['email']; ?>
                           </td>
                           <td>
                              <?php echo $user['phone']; ?>
                           </td>
                           <td>
                              <?php echo $user['created_at']; ?>
                           </td><td><a href="view.php?id=<?php echo $user['id']; ?>" class="eyed"><i class="bi bi-eye"></i></a>
                              </td>

                           <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit"><i class="bi bi-pencil-square"></i></a></td>

                           <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete"><i class="bi bi-trash3"></i></a></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
            <a href="event-creators.php"><button class="nbtn">View All</button></a>
            <div class="projects1">
               <div class="card-header flex">
                  <h3>Manage Users [GUEST]
                     <?php echo count($user_role); ?>
                  </h3>

               </div>
               <table>
                  <thead>
                     <th>
                        <tr>
                           <th>SN</th>
                           <th>Picture</th>
                           <th>User Name</th>
                           <th>Email</th>
                           <th>Contact</th>
                           <th>Created At</th>
                           <th colspan="4">Action</th>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <?php foreach ($user_role as $key => $user): ?>
                        <tr>
                           <td>
                              <?php echo $key + 1 ?>
                           </td>

                            <td>
                              <div class="action2">
                                 <div class="profile">
                                    <img src=" <?php echo BASE_URL . '/assets/images/users/' . $user['profile'] ?>" alt="">
                                 </div>
                              </div>
                           </td>

                           <td>
                              <?php echo $user['username']; ?>
                           </td>
                           <td>
                              <?php echo $user['email']; ?>
                           </td>
                           <td>
                              <?php echo $user['phone']; ?>
                           </td>
                           <td>
                              <?php echo $user['created_at']; ?>
                           </td><td><a href="view.php?id=<?php echo $user['id']; ?>" class="eyed"><i class="bi bi-eye"></i></a>
                              </td>

                           <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit"><i class="bi bi-pencil-square"></i></a></td>

                           <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete"><i class="bi bi-trash3"></i></a></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
            <a href="guests.php"><button class="nbtn">View All</button></a>
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
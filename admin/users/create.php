<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
superAdminOnly(); ?>
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
   <?php include(ROOT_PATH . "/app/includes/sidebar/users.php"); ?>

   <div class="main-content" id="main-content">
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <main>
         <div class="wrapper flex">
            <div class="obt">
               <a href="create.php"> <button class="nbtn">Add Users</button></a>
               <a href="index.php"><button class="nbtn">Manage Users</button></a>


            </div>
            <div class="projects1">
               <div class="card-header flex">
                  <h3>Create Users</h3>
               </div>
            </div>
            <div class="form3">
               <form action="create.php" method="post" enctype="multipart/form-data">
                  <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                  <div>
                     <label for="">Name</label>
                     <input type="text" name="username" value="<?php echo $username; ?>" class="text-input"
                        placeholder="Username">
                  </div>
                  <div>
                     <label for="">Email</label>
                     <input type="email" value="<?php echo $email; ?>" name="email" placeholder="email">
                  </div>
                  <div>
                     <label for="">Phone Number</label>
                     <input type="number" value="<?php echo $phone; ?>" name="phone" class="text-input"
                        placeholder="Phone Number">
                  </div>
                       <div>
                            <label for="">Country</label>
                            <input type="text" value="<?php echo $country; ?>" name="country" class="text-input"
                                placeholder="Cameroon">
                        </div>
                         <div>
                            <label for="">Full Address</label>
                            <input type="text" value="<?php echo $full_address; ?>" name="full_address" class="text-input"
                                placeholder="Mendong / Yaounde ">
                        </div>
                  <div>
                     <label for="">Password</label>
                     <input type="password" value="<?php echo $password; ?>" name="password" class="text-input"
                        placeholder="password">
                  </div>
                  
                  <div>
                     <label for="">Confirm Password</label>
                     <input type="password" value="<?php echo $passwordConf; ?>" name="passwordConf" class="text-input"
                        placeholder="Confirm Password">
                  </div>
                            <div>
                     <label>Profile Picture</label>
                     <input type="file" name="profile" class="text-input">
                  </div>

                         <div>
                     <label for="">role</label>
                     <select name="role_id" id="" placeholder="Select">
                        <option value="">Select</option>
                        <?php foreach ($roles as $key => $role): ?>
                           <?php if (!empty($role_id) && $role_id == $role['id']): ?>
                              <option selected value="<?php echo $role['id']; ?>"><?php echo $role['name']; ?>
                              </option>
                           <?php else: ?>
                              <option value="<?php echo $role['id']; ?>"><?php echo $role['name']; ?></option>
                           <?php endif; ?>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div>
                     <label for="">subscription</label>
                     <select name="subscription_id" id="" placeholder="Select">
                        <option value="">Select</option>
                        <?php foreach ($subscriptions as $key => $subscription): ?>
                           <?php if (!empty($subscription_id) && $subscription_id == $subscription['id']): ?>
                              <option selected value="<?php echo $subscription['id']; ?>"><?php echo $subscription['name']; ?>
                              </option>
                           <?php else: ?>
                              <option value="<?php echo $subscription['id']; ?>"><?php echo $subscription['name']; ?></option>
                           <?php endif; ?>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div>
                     <button type="submit" name="create-user" class="button2">Add User</button>
                  </div>
               </form>
            </div>
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
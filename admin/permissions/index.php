<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/events.php");
superAdminOnly(); ?>
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
   <?php include(ROOT_PATH . "/app/includes/sidebar/permissions.php"); ?>
   <div class="main-content" id="main-content">
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <main>
         <div class="wrapper flex">
            <div class="obt">


               <a href="index.php"> <button class="nbtn">Manage Permissions</button></a>
               <a href="create.php"><button class="nbtn">Add Permissions</button></a>
            </div>
            <div class="projects1">
               <div class="card-header flex">
                  <h3>Manage Permissions</h3>

               </div>

               <table>
                  <thead>
                     <th>
                        <tr>
                           <th>SN</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th colspan="4">Action</th>
                        </tr>
                     </th>
                  </thead>

                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>Create</td>
                      <td>Add New Data</td>
                        <td><a href="" class="edit"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="" class="delete"><i class="bi bi-trash3"></i></a></td>

                     </tr>
                      <tr>
                        <td>2</td>
                   
                        <td>Update</td>
                            <td>Edit Data</td>
                        <td><a href="" class="edit"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="" class="delete"><i class="bi bi-trash3"></i></a></td>

                     </tr>

   <tr>
                        <td>3</td>
                            <td>Delete Data</td>
                        <td>Delete Data</td>
                        <td><a href="" class="edit"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="" class="delete"><i class="bi bi-trash3"></i></a></td>

                     </tr>
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
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
                    <a href="create.php"><button class="nbtn">Add Permissions</button></a>
                    <a href="index.php"> <button class="nbtn">Manage Permissions</button></a>

                </div>
                <div class="projects1">
                    <div class="card-header flex">
                        <h3>Update Permission</h3>
                    </div>
                </div>
                <div class="form3">
                    <form action="create.php" method="post">
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="title" class="text-input" placeholder="Username">
                        </div>
                        <div>
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="email">
                        </div>
                        <div>
                            <label for="">Phone Number</label>
                            <input type="number" name="Phone" class="text-input" placeholder="Phone Number">
                        </div>
                        <div>
                            <label for="">Password</label>
                            <input type="password" name="password" class="text-input" placeholder="password">
                        </div>
                        <div>
                            <label for="">Confirm Password</label>
                            <input type="password" name="passwordconf" class="text-input"
                                placeholder="Confirm Password">
                        </div>


                        <div>
                            <label for="">Role</label>
                            <select name="Categories" id="">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                                <option value="Event-Creator">Event Creator</option>
                            </select>
                            <div>
                                <button type="submit" class="button2">Update Permission</button>
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
<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/categories.php");
superAdminOnly();?>
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
    <?php include(ROOT_PATH . "/app/includes/sidebar/categories.php"); ?>

    <div class="main-content" id="main-content">
        <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
        <main>
            <div class="wrapper flex">
                <div class="obt">
                    <a href="create.php"><button class="nbtn">Add Category</button></a>
                    <a href="index.php"> <button class="nbtn">Manage Category</button></a>
                </div>
                <div class="projects1">
                    <div class="card-header flex">
                        <h3>Update Category</h3>
                    </div>
                </div>
                <div class="form2">
                    <form action="edit.php" method="post">
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="name" class="text-input" value="<?php echo $name; ?>">
                        </div>
                        <div>
                            <label for="">Description</label>
                            <textarea name="description"  id="description"><?php echo $description; ?></textarea>
                        </div>
                        <div>
                            <button type="submit" name="update-category" class="button2">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="<?php echo BASE_URL . '/assets/js/test.js' ?> "></script>
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
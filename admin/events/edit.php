<?php include("../../path.php");
include(ROOT_PATH . "/app/controllers/events.php");
adminOnly(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evently || Dashboard</title>



    <!-- CSS File Link -->
    <link rel="stylesheet" href="../../assets/css/admin style.css">
       
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">

</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/sidebar/events.php"); ?>
    <div class="main-content" id="main-content">
        <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
        <main>
            <div class="wrapper flex">
                <div class="obt">
                    <a href="create.php"><button class="nbtn">Add Events</button></a>
                    <a href="index.php"> <button class="nbtn">Manage Events</button></a>
                </div>
                <div class="projects1">
                    <div class="card-header flex">
                        <h3>Update Event</h3>
                    </div>
                </div>
                <div class="form1">
                    <form action="edit.php" method="post" enctype="multipart/form-data">
                        
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div>
                            <label for="">Title</label>
                            <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                        </div>
                        <div>
                            <label for="">Location</label>
                            <input type="text" name="location" value="<?php echo $location; ?>" class="text-input">
                        </div>
                        <div>
                            <label for="">Event Day</label>
                            <input type="datetime-local" name="event_day" value="<?php echo $event_day; ?>"
                                class="text-input">
                        </div>
                        <div>
                            <label for="">Type</label>

                            <select name="type" id="" placeholder="Select">
                                <option>Select</option>
                                <option>Online</option>
                                <option>Onsite</option>
                            </select>

                        </div>
                        <div>
                            <label for="">Price</label>
                            <select name="price" id="" placeholder="Select">
                                <option>Select</option>
                                <option>Free</option>
                                <option>Paid</option>
                            </select>

                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="description" value="<?php echo $description; ?>"
                                id="description"></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>


                        <div>
                            <label for="">Category</label>
                            <select name="category_id" id="" placeholder="Select">
                                <option>Select</option>
                                </option>
                                <?php foreach ($categories as $key => $category): ?>
                                    <?php if (!empty($category_id) && $category_id == $category['id']): ?>
                                        <option selected value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?>
                                        </option>
                                    <?php else: ?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php if (1 == $_SESSION['role_id']): ?>
                        <div class="opo">
                            <div class="opo">
                                <?php if (empty($published)): ?>
                                    <h2 class="lml">Publish</h2>

                                    <input type="checkbox" name="published">
                                <?php else: ?>
                                    <h2 class="lml">Publish</h2>
                                    <input type="checkbox" name="published" checked>

                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif;?>
                        <div>
                            <button type="submit" name="update-event" class="button2">Update Event</button>
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
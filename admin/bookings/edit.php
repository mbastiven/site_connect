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
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/sidebar/bookings.php"); ?>
    <div class="main-content" id="main-content">
        <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>

        <main>
            <div class="wrapper flex">
                <div class="obt">
                    <a href="create.php"><button class="nbtn">Add Booking</button></a>
                    <a href="index.php"> <button class="nbtn">Manage Booking</button></a>
                </div>
                <div class="projects1">
                    <div class="card-header flex">
                        <h3>Update Event Booking</h3>
                    </div>
                </div>
                <div class="form4">
                    <form action="create.php" method="post">
                        <div>
                            <label for="">Name</label>
                            <input type="text" name="title" class="text-input" placeholder="Your Name">
                        </div>
                        <div>
                            <label for="">Phone Number</label>
                            <input type="number" name="description">
                        </div>

                        <div>
                            <label for="">Choose Ticket Type</label>
                            <select name="Category">
                                <option value="Health"> Eary bird $120</option>
                                <option value="Education"> Standard $240</option>

                            </select>
                            <div>
                                <div>
                                    <label for="">N° Of Ticket/label>
                                        <input type="number" name="description">
                                </div>
                                <div>
                                    <textarea name="description" id="description" class="form-control"
                                        placeholder="Additional Request"></textarea>
                                </div>
                                <button type="submit" class="button2">Update Booking</button>
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
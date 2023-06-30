<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateEvents.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'events';

$categories = selectAll('categories');
$users = selectAll('users');
$events = selectAll($table);
$authorTotal = selectAll($table, ['user_id'] ==76);



$errors = array();
$title = "";
$id = "";
$description = "";
$category_id = "";
$published = "";
$location = "";
$event_day = "";
$price = "";
$type = "";
$limit = "";


// if (1 == $_SESSION['subscription_id']){
//     $limit = 1000; 
//  } if (2 == $_SESSION['subscription_id']){
//     $limit = 12; 
//  } if (3 == $_SESSION['subscription_id']){
//     $limit = 2; 
//  }
 //dd(count($events));


// CREATE EVENT

if (isset($_POST['add-event'])) {
   if (count($events) == $limit){
    $_SESSION['msg'] = "Your subscription plan is exhausted ! Please upgrade it and try again";
    $_SESSION['type'] = 'review ';
    header('Location:' . BASE_URL . '/admin/index.php');
   }

    adminOnly();
    $errors = validateEvents($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/event images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload event image");
        }



    } else {
        array_push($errors, "Event image required ");
    }


    if (count($errors) === 0) {
        unset($_POST['add-event']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['description'] = htmlentities($_POST['description']);

        $event_id = create($table, $_POST);
         if (1 == $_SESSION['role_id']){
            $_SESSION['msg'] = "Event Created successfully";
            $_SESSION['type'] = 'review ';
            header('Location:' . BASE_URL . '/admin/events/index.php');
         }
         else{
            $_SESSION['msg'] = "Event Created successfully [' Your Event Will Be Published After Review By An Admin ']";
            $_SESSION['type'] = 'review ';
            header('Location:' . BASE_URL . '/admin/events/index.php');
         }
     
    } else {
        $title = $_POST['title'];
        $location = $_POST['location'];
        $event_day = date('j M g:i a', strtotime($_POST['event_day']));
        $type = $_POST['type'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }


}


// ACTION EVENT (UDT/DLT)

if (isset($_GET['id'])) {

    $event = selectOne($table, ['id' => $_GET['id']]);
    $id = $event['id'];
    $title = $event['title'];
    $location = $event['location'];
    $event_day = date('j M g:i a', strtotime($event['event_day']));
    $type = $event['type'];
    $price = $event['price'];
    $description = $event['description'];
    $category_id = $event['category_id'];
    $published = $event['published'];
}


// DELETE EVENT
if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['msg'] = "Event deleted successfully";
    $_SESSION['type'] = 'review ';
    header('Location:' . BASE_URL . '/admin/events/index.php');
    exit();
}
 // .... UPDATE EVENT STATUS

 if (isset($_GET['published']) && isset($_GET['lol_id'])) {

        $_SESSION['msg'] = "Event published status change Requested [' Your Event Will Be Published After Review By An Admin ']";
        $_SESSION['type'] = 'review ';
        header('Location:' . BASE_URL . '/admin/events/index.php');
        exit();
    


}


if (isset($_GET['published']) && isset($_GET['p_id'])) {

    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];


        $count = update($table, $p_id, ['published' => $published]);
        $_SESSION['msg'] = "Event published status changed!";
        $_SESSION['type'] = 'review ';
        header('Location:' . BASE_URL . '/admin/events/index.php');
        exit();
  
}

// UPDATE EVENT 

if (isset($_POST['update-event'])) {
    adminOnly();
    $errors = validateEvents($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/event images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, " Failed to upload event image");
        }



    } else {
        array_push($errors, "Event image required");
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-event'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['description'] = htmlentities($_POST['description']);

        $event_id = update($table, $id, $_POST);
        if (1 == $_SESSION['role_id']){
            $_SESSION['msg'] = "Event updated successfully";
            $_SESSION['type'] = 'review ';
            header('Location:' . BASE_URL . '/admin/events/index.php');
         }
         else{
            $_SESSION['msg'] = "Event updated successfully [' Your Event Will Be Published After Review By An Admin ']";
            $_SESSION['type'] = 'review ';
            header('Location:' . BASE_URL . '/admin/events/index.php');
         }
       
    } else {
        $title = $_POST['title'];
        $location = $_POST['location'];
        $event_day = date('j M g:i a', strtotime($_POST['event_day']));
        $type = $_POST['type'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}
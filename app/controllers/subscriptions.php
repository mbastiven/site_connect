<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers//validateSubscriptions.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'subscriptions';
$errors = array();
$id = '';
$name = '';
$description = '';
$limits = '';
// $limit = '';
$subscriptions = selectAll($table);

// CREATE subscription
if (isset($_POST['add-subscription'])) {
    //dd($_POST);
    superAdminOnly();
    $errors = validateSubscriptions($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-subscription']);
        $subscription_id = create('subscriptions', $_POST);
        $_SESSION['msg'] = "Subscription added successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/subscriptions/index.php');
        exit();

    } else {
        $name = $_POST['name'];
        // $limit = $_POST['limit'];
        $description = $_POST['description'];
        $limits = $_POST['limits'];
    }
}

// ACTION subscription (UDT/DLT)

if (isset($_GET['id'])) {
    superAdminOnly();
    $id = $_GET['id'];
    $subscription = selectOne($table, ['id' => $id]);
    $id = $subscription['id'];
    $name = $subscription['name'];
    // $limit = $subscription['limit'];
    $description = $subscription['description'];
    $limits = $subscription['limits'];
}

// DELETE subscription
if (isset($_GET['del_id'])) {
    superAdminOnly();
   
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['msg'] = "Subscription deleted successfully";
    $_SESSION['type'] = 'review';
    header('Location:' . BASE_URL . '/admin/subscriptions/index.php');
    exit();

}

// UPDATE subscription

if (isset($_POST['update-subscription'])) {
    superAdminOnly();
    $errors = validateSubscriptions($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-subscription'], $_POST['id']);
        $subscription_id = update($table, $id, $_POST);
        $_SESSION['msg'] = "Subscription updated successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/subscriptions/index.php');
        exit();

    } else {
        // $limit = $_POST['limit'];
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $limits = $_POST['limits'];
    }


}
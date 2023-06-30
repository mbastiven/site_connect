<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateCategories.php");
include(ROOT_PATH . "/app/helpers/middleware.php");



$table = 'categories';
$errors = array();
$id = '';
$name = '';
$description = '';
$categories = selectAll($table);

// CREATE CATEGORY

if (isset($_POST['add-category'])) {
    //dd($_POST);

    adminOnly();
    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-category']);
        $category_id = create('categories', $_POST);
        $_SESSION['msg'] = "Category added successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/categories/index.php');
        exit();

    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

// ACTION CATEGORY (UDT/DLT)

if (isset($_GET['id'])) {
    adminOnly();
    $id = $_GET['id'];
    $category = selectOne($table, ['id' => $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
}

// DELETE CATEGORY
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['msg'] = "Category deleted successfully";
    $_SESSION['type'] = 'review';
    header('Location:' . BASE_URL . '/admin/categories/index.php');
    exit();

}

// UPDATE CATEGORY

if (isset($_POST['update-category'])) {
    adminOnly();

    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-category'], $_POST['id']);
        $category_id = update($table, $id, $_POST);
        $_SESSION['msg'] = "Category updated successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/categories/index.php');
        exit();

    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }


}
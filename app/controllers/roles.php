<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateRoles.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'roles';
$errors = array();
$id = '';
$name = '';
$description = '';
$roles = selectAll($table);

// CREATE ROLE
if (isset($_POST['add-role'])) {
    superAdminOnly();
    $errors = validateRoles($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-role']);
        $role_id = create('roles', $_POST);
        $_SESSION['msg'] = "Role added successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/roles/index.php');
        exit();

    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

// ACTION ROLE (UDT/DLT)

if (isset($_GET['id'])) {
    superAdminOnly();
    $id = $_GET['id'];
    $role = selectOne($table, ['id' => $id]);
    $id = $role['id'];
    $name = $role['name'];
    $description = $role['description'];
}

// DELETE ROLE
if (isset($_GET['del_id'])) {
    superAdminOnly();
   ;
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['msg'] = "Role deleted successfully";
    $_SESSION['type'] = 'review';
    header('Location:' . BASE_URL . '/admin/roles/index.php');
    exit();

}

// UPDATE ROLE

if (isset($_POST['update-role'])) {
    superAdminOnly();
    $errors = validateRoles($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-role'], $_POST['id']);
        $role_id = update($table, $id, $_POST);
        $_SESSION['msg'] = "Role updated successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/roles/index.php');
        exit();

    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }


}
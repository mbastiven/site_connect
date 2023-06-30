<?php

function userOnly($redirect = '/account/login.php')
{

    if (empty($_SESSION['id']) ) {
        $_SESSION['msg'] = "You need to login first";
        $_SESSION['type'] = 'pending';
        header('Location:' . BASE_URL . $redirect);
        exit();
    }
}
function user3Only($redirect = '/index.php')
{

  if (3 !== $_SESSION['role_id']) {
    $_SESSION['msg'] = "You Don't have access to this page";
    $_SESSION['type'] = 'pending';
    header('Location:' . BASE_URL . $redirect);
    exit();
  }
}

function adminOnly($redirect = '/index.php')
{

    if (empty($_SESSION['id']) || 3 == $_SESSION['role_id']) {
        $_SESSION['msg'] = "You are not authorized !!. Please login as event creator ";
        $_SESSION['type'] = 'pending';
        header('Location:' . BASE_URL . $redirect);
        exit();
    }
}

function guestOnly($redirect = '/index.php')
{

    if (isset($_SESSION['id'])) {

        header('Location:' . BASE_URL . $redirect);
        exit();
    }
}
function superAdminOnly($redirect = '/admin/index.php')
{

    if (empty($_SESSION['id']) || 3 == $_SESSION['role_id'] || 2 == $_SESSION['role_id']) {
        $_SESSION['msg'] = "You are not authorized !!. Please login as administrator";
        $_SESSION['type'] = 'pending';
        header('Location:' . BASE_URL . $redirect);
        exit();
    }
}
?>

<style>
.status-msg {
  padding: 1rem;
  border-radius: 5px;
  margin: 1rem 0;
  color: white;
}

.review {
  background-color: #18b277 !important;
}

.progress {
  background-color: rgb(20, 177, 255);
}

.pending {
 background-color: #c22424 !important;
}

.steady {
  background-color: rgb(231, 84, 31);
}
</style>
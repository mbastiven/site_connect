<?php
// include("../../path.php");
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'users';

$table_role = 'roles';
$table_subscription = 'subscriptions';

$subscriptions = selectAll('subscriptions');
$roles = selectAll('roles');
$user_role = selectAll($table, ['role_id' => 3]);
$eventCreator_role = selectAll($table, ['role_id' => 2]);
$admin_role = selectAll($table, ['role_id' => 1]);




$errors = array();
$id = '';
$admin = '';
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$phone = '';
$full_address = '';
$country = '';
$role_id = '';
$subscription = '';


// LOGIN FUNCTION
function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['country'] = $user['country'];
    $_SESSION['full_address'] = $user['full_address'];
    $_SESSION['type'] = 'review';
    $_SESSION['profile'] = $user['profile'];
    $_SESSION['role_id'] = $user['role_id'];
    $_SESSION['subscription_id'] = $user['subscription_id'];
    $_SESSION['msg'] = "You Have Successfully Logged In To EVENTLY";
    if ($_SESSION['role_id'] !== 3) {
        header('Location:' . BASE_URL . '/admin/index.php');
    } else {
        header('Location:' . BASE_URL . '/index.php');
    }
    exit();
}

// CREATE USER FROM REGISTER PAGE

if (isset($_POST['register-btn'])) {
    
    $errors = validateUser($_POST);
    if (!empty($_FILES['profile']['name'])) {
        $profile_name = time() . '_' . $_FILES['profile']['name'];
        $destination = ROOT_PATH . "/assets/images/users/" . $profile_name;

        $result = move_uploaded_file($_FILES['profile']['tmp_name'], $destination);
        if ($result) {
            $_POST['profile'] = $profile_name;
        } else {
            array_push($errors, "Failed to upload profile picture");
        }
    } else {
        array_push($errors, "profile picture required ");
    }
    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['role_id'] = 3;
        $_POST['subscription_id'] = 3;
    
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);
        loginUser($user);
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];   
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];

    }
}


// CREATE ADMIN OR USER FROM ADMIN PANEL

if (isset($_POST['create-user'])) {
    superAdminOnly();
    //dd($_POST);

    $errors = validateAdminUser($_POST);
    if (!empty($_FILES['profile']['name'])) {
        $profile_name = time() . '_' . $_FILES['profile']['name'];
        $destination = ROOT_PATH . "/assets/images/users/" . $profile_name;

        $result = move_uploaded_file($_FILES['profile']['tmp_name'], $destination);
        if ($result) {
            $_POST['profile'] = $profile_name;
        } else {
            array_push($errors, "Failed to upload profile picture");
        }
    } else {
        array_push($errors, "profile picture required ");
    }
    if (count($errors) === 0) {
        unset($_POST['passwordConf'], $_POST['create-user']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if ($_POST['role_id'] ==1 ) {
            
 if ($_POST['subscription_id'] == 1) {
                $_POST['subscription_id'] = 1;
            } else if ($_POST['subscription_id'] == 2) {
                $_POST['subscription_id'] = 2;
            } else if ($_POST['subscription_id'] == 3) {
                $_POST['subscription_id'] = 3;
            } 
           
       
            $_POST['role_id'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['msg'] = "Admin user created successfully";
            $_SESSION['type'] = 'review';
            header('Location:' . BASE_URL . '/admin/users/index.php');
            exit();

        }
        else if ($_POST['role_id'] == 2 ) {
          
            if ($_POST['subscription_id'] == 1) {
                $_POST['subscription_id'] = 1;
            } else if ($_POST['subscription_id'] == 2) {
                $_POST['subscription_id'] = 2;
            } else if ($_POST['subscription_id'] == 3) {
                $_POST['subscription_id'] = 3;
            } 
         
            $_POST['role_id'] = 2;
            $user_id = create($table, $_POST);
            $_SESSION['msg'] = "Even-Creator created successfully";
            $_SESSION['type'] = 'review';
            header('Location:' . BASE_URL . '/admin/users/index.php');
            exit();

        } else {
            if ($_POST['subscription_id'] == 1) {
                $_POST['subscription_id'] = 1;
            } else if ($_POST['subscription_id'] == 2) {
                $_POST['subscription_id'] = 2;
            } else if ($_POST['subscription_id'] == 3) {
                $_POST['subscription_id'] = 3;
            } 
            $_POST['role_id'] = 3;
        
            $user_id = create($table, $_POST);
            $_SESSION['msg'] = "Guest user created successfully";
            $_SESSION['type'] = 'review';
            header('Location:' . BASE_URL . '/admin/users/index.php');
            exit();
        }

    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $role_id = $_POST['role_id'];
        $subscription_id = $_POST['subscription_id'];
        $passwordConf = $_POST['passwordConf'];
      
    
    }
}


// LOGIN USER

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);
    if (count($errors) === 0) {
        $user = selectOne($table, ['email' => $_POST['email']]);


        if ($user && password_verify($_POST['password'], $user['password'])) {
            loginUser($user);
        } else {
            array_push($errors, 'Wrong Credentials');
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
}

// DELETE USER

if (isset($_GET['delete_id'])) {
    superAdminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['msg'] = "Admin user deleted successfully";
    $_SESSION['type'] = 'review';
    header('Location:' . BASE_URL . '/admin/users/index.php');
    exit();

}
// UPDATE USER

if (isset($_POST['update-user'])) {
    superAdminOnly();
    $errors = validateAdminUser($_POST);
    if (!empty($_FILES['profile']['name'])) {
        $profile_name = time() . '_' . $_FILES['profile']['name'];
        $destination = ROOT_PATH . "/assets/images/users/" . $profile_name;

        $result = move_uploaded_file($_FILES['profile']['tmp_name'], $destination);
        if ($result) {
            $_POST['profile'] = $profile_name;
        } else {
            array_push($errors, "Failed to upload profile picture");
        }
    } else {
        array_push($errors, "profile picture required ");
    }
    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['passwordConf'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

 
        if ($_POST['role_id'] == 1){
            $_POST['role_id'] == 1;
        }
        if ($_POST['role_id'] == 2) {
            $_POST['role_id'] == 2;
        }
        if ($_POST['role_id'] == 3) {
            $_POST['role_id'] == 3;
        }
        $count = update($table, $id, $_POST);
        $_SESSION['msg'] = "User updated successfully";
        $_SESSION['type'] = 'review';
        header('Location:' . BASE_URL . '/admin/users/index.php');
        exit();


    }else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $role_id = $_POST['role_id'];
        $subscription_id = $_POST['subscription_id'];
        $passwordConf = $_POST['passwordConf'];
    
    } 


}

// ACTION USER (UDT/DLT)
if (isset($_GET['id'])) {
    superAdminOnly();
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = isset($user['admin']) ? 1 : 0;
    $email = $user['email']; 
    $phone = $user['phone'];
    $country = $user['country'];
    $role_id = $user['role_id'];
    $full_address = $user['full_address'];
    //$status = $_POST['status'
    $subscription_id = $user['subscription_id'];

    // $admin = $user['admin'] == 1 ? 1 : 0;

}













// // UPDATE USER FROM SESSION

// if (isset($_POST['update-user-session'])) {
//     dd($_POST);
//     superAdminOnly();
//     $errors = validateAdminUser($_POST);
//     if (!empty($_FILES['profile']['name'])) {
//         $profile_name = time() . '_' . $_FILES['profile']['name'];
//         $destination = ROOT_PATH . "/assets/images/users/" . $profile_name;

//         $result = move_uploaded_file($_FILES['profile']['tmp_name'], $destination);
//         if ($result) {
//             $_POST['profile'] = $profile_name;
//         } else {
//             array_push($errors, "Failed to upload profile picture");
//         }
//     } else {
//         array_push($errors, "profile picture required ");
//     }
//     if (count($errors) === 0) {
//         $id = $_POST['id'];
//         unset($_POST['update-user'], $_POST['passwordConf'], $_POST['id']);
//         $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

//         // $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
//         if ($_POST['role_id'] == 1) {
//             $_POST['role_id'] = 1;
//         }
//         if ($_POST['role_id'] == 2) {
//             $_POST['role_id'] = 2;
//         }
//         if ($_POST['role_id'] == 3) {
//             $_POST['role_id'] = 3;
//         }

//         $count = update($table, $id, $_POST);
//         $_SESSION['msg'] = "User updated successfully";
//         $_SESSION['type'] = 'review';
//         header('Location:' . BASE_URL . '/admin/users/index.php');
//         exit();


//     }
// }

// else {
//     $role_id = $_POST['role_id'];
//     $username = $_POST['username'];
//     $admin = isset($_POST['admin']) ? 1 : 0;
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $password = $_POST['password'];
//     $passwordConf = $_POST['passwordConf'];
//     $country = $_POST['country'];
//     $full_address = $_POST['full_address'];
//     //$status = $_POST['status'
// }
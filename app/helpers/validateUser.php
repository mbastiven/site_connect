<?php

function validateUser($user)
{

    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username must be provided');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email must be provided');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password must be provided');
    }
 
    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords do not match');
    }
    $existringUser = selectOne('users', ['email' => $user['email']]);
    if ($existringUser) {
       
        array_push($errors, 'Email already exists');
      
    }
    $existringUser = selectOne('users', ['username' => $user['username']]);
    if ($existringUser) {
        array_push($errors, 'username already chosen');
       
       
    }
    return $errors;

}


function validateAdminUser($user)
{

    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username must be provided');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email must be provided');
    }
    if (empty($user['phone'])) {
        array_push($errors, 'Phone number must be provided');
    }
    if (empty($user['country'])) {
        array_push($errors, 'Country must be provided');
    }   
    if (empty($user['full_address'])) {
        array_push($errors, 'Full address must be provided');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password must be provided');
    }
    if (empty($user['subscription_id'])) {
        array_push($errors, 'Subscription must be provided');
    }
 

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords do not match');
    }
    $existringUser = selectOne('users', ['email' => $user['email']]);
    if ($existringUser) {
        if (isset($user['update-user']) && $existringUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');

        }
        if (isset($user['create-user'])) {
            array_push($errors, 'Email already exists');
        }
     
    }
    $existringUser = selectOne('users', ['username' => $user['username']]);
    if ($existringUser) {
        if (isset($user['update-user']) && $existringUser['id'] != $user['id']) {
            array_push($errors, 'username already chosen');

        }
        if (isset($user['create-user'])) {
            array_push($errors, 'username already chosen');
        }
       
    }
    return $errors;

}

function validateLogin($user)
{

    $errors = array();

    if (empty($user['email'])) {
        array_push($errors, 'Email must be provided');
    }
    if (empty($user['password'])) {
        array_push($errors, 'Password must be provided');
    }


    return $errors;

}
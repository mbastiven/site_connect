<?php

function validateRoles($role)
{

    $errors = array();

    if (empty($role['name'])) {
        array_push($errors, 'Role name must be provided');
    }

    $existringRategory = selectOne('roles', ['name' => $role['name']]);
    if ($existringRategory) {
        if (isset($event['add-role']) && $existringRategory['id'] != $role['id']) {
            array_push($errors, 'Role  name already exists');

        }
        if (isset($event['update-role'])) {
            array_push($errors, 'Role  name already exists');
        }
    }

    return $errors;

}
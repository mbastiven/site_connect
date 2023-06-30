<?php

function validateCategory($category)
{

    $errors = array();

    if (empty($category['name'])) {
        array_push($errors, 'Category name must be provided');
    }

    $existringCategory = selectOne('categories', ['name' => $category['name']]);
    if ($existringCategory) {
        if (isset($event['add-category']) && $existringCategory['id'] != $category['id']) {
            array_push($errors, 'Category  name already exists');

        }
        if (isset($event['update-category'])) {
            array_push($errors, 'Category  name already exists');
        }
    }

    return $errors;

}
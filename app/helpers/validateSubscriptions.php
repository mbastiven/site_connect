<?php

function validateSubscriptions($subscription)
{

    $errors = array();

    if (empty($subscription['name'])) {
        array_push($errors, 'Subscription name must be provided');
    }
    
    // if (empty($subscription['limit'])) {
    //     array_push($errors, 'Subscription limit must be provided');
    // }

    $existringRategory = selectOne('subscriptions', ['name' => $subscription['name']]);
    if ($existringRategory) {
        if (isset($event['add-subscription']) && $existringRategory['id'] != $subscription['id']) {
            array_push($errors, 'subscription  name already exists');

        }
        if (isset($event['update-subscription'])) {
            array_push($errors, 'subscription  name already exists');
        }
    }

    return $errors;

}
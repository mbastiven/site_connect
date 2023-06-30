<?php

function validateEvents($event)
{

    $errors = array();

    if (empty($event['title'])) {
        array_push($errors, 'Event title must be provided');
    }
    if (empty($event['description'])) {
        array_push($errors, 'Event description must be provided');
    }
    if (empty($event['category_id'])) {
        array_push($errors, 'Event category must be provided');
    }
    if (empty($event['event_day'])) {
        array_push($errors, 'Event day must be provided');
    }

    if (empty($event['type'])) {
        array_push($errors, 'Event type must be provided');
    }
    if (empty($event['price'])) {
        array_push($errors, 'Event price must be provided');
    }



    $existringEvent = selectOne('events', ['title' => $event['title']]);
    if ($existringEvent) {
        if (isset($event['update-event']) && $existringEvent['id'] != $event['id']) {
            array_push($errors, 'Event with this title already exists');

        }
        if (isset($event['add-event'])) {
            array_push($errors, 'Event with this title already exists');
        }
    }


    return $errors;

}
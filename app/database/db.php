<?php

session_start();

require('connect.php');

function dd($value) // is to be deleted
{
    echo "<pre>", print_r($value), "</pre>";
    die();
}


function executeQuery($sql, $data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

// Select all function
function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table ";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        //return only data that matches the condition
        //$sql = "SELECT * FROM users WHERE username='noncio' AND admin='1';
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

}

// Select ONE function
function selectOne($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";

    //return only data that matches the condition
    //$sql = "SELECT * FROM users WHERE username='noncio' AND admin='1';
    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;


}

// CREATE function
function create($table, $data)
{

    // $sql = "INSERT INTO users SET username=?, AND admin=?, email=?,  password=?";
    global $conn;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}



// UPDATE function
function update($table, $id, $data)
{

    // $sql = "UPDATE users SET username=?, AND admin=?, email=?,  password=? WHERE id = ?;
    global $conn;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key =?";
        } else {
            $sql = $sql . ", $key =?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}


// DELETE function
function delete($table, $id)
{

    // $sql = "DELETE FROM WHERE id = ?";
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

// Cross function (joining users and events table)
function getPublishedEvents()
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.event_day DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY p.event_day DESC";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;


}

function getSponsoredEvents()
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.event_day ASC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY p.event_day ASC";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getSMostViewedEvents()
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.created_at ASC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY p.created_at ASC";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getPublishedEventsLimit()
{
    global $conn;
    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC LIMIT 6";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getPublishedEventsTop()
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function formatEventFields($events)
{
    if (empty($events)) {
        return [];
    }

    $formattedEvents = [];
    foreach ($events as $event) {
        $currentEvent = $event;
        $currentEvent['description'] = html_entity_decode(substr($event['description'], 0, 60) . '....');
        $currentEvent['image'] = BASE_URL . '/assets/images/event images/' . $event['image'];
        array_push($formattedEvents, $currentEvent);
    }
    return $formattedEvents;
}
function getPaginatedEvents($currentPage = 1, $recordsPerPage = 3)
{
    global $conn;
    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =1 ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC LIMIT ?,?";

    $data = [
        'offset' => ($currentPage - 1) * $recordsPerPage,
        'numberOfRecords' => $recordsPerPage
    ];

    $stmt = executeQuery($sql, $data);
    $events = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return [
        'events' => formatEventFields($events),
        'nextPage' => count($events) < $recordsPerPage ? false : $currentPage + 1,

    ];
}

function paginateEvents($currentPage = 1, $recordsPerPage = 6)
{

    global $conn;
    $sql = "SELECT * FROM events LIMIT :offset,:numberOfRecords";
    $data = [
        'offset' => ($currentPage - 1) * $recordsPerPage,
        'numberOfRecords' => $recordsPerPage
    ];

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $numberOfPages = ceil(totalRow() / $recordsPerPage);

    $events = $stmt->fetchAll();

    return [
        'events' => $events,
        'prevPage' => $currentPage > 1 ? $currentPage - 1 : false,
        'nextPage' => $currentPage + 1 <= $numberOfPages ? $currentPage + 1 : false,
        'numberOfPages' => $numberOfPages,
    ];

}


function getAllEvents()
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";




    // $stmt = executeQuery($sql, ['published' => 0]);
    // $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    // return $records;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

}

function getAllEventsUnpublishedEvents()
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";




    $stmt = executeQuery($sql, ['published' => 0]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    // return $records;

}


// Search Event functions
function searchEventsByName($term)
{

    $match =  '%' . $term . '%'; 
    global $conn;
    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price,p.name, U.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? AND p.title LIKE ? OR p.description LIKE ? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'description' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function searchEventByCategory($term)
{
    $match = $term . '%';
    global $conn;
    $sql = "SELECT temp.id, temp.user_id, temp.category_id, temp.title, temp.image, temp.description, temp.location, temp.event_day, temp.type, 
    temp.published, temp.created_at,temp.price,temp.name, U.username, u.profile FROM (select E.*, C.name 
    FROM events AS E JOIN categories AS C ON E.category_id = C.id WHERE 
    published =? AND C.name LIKE ? ) AS temp JOIN users AS U ON temp.user_id = U.id ORDER BY temp.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'name' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function searchEventByDate($term)
{
    $match = $term . '%';
    global $conn;
    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price,p.name, U.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? AND p.event_day LIKE ?  ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'event_day' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getEventsByCategoryId($category_id)
{
    global $conn;

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? AND category_id=? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'category_id' => $category_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}

function getAllEventsFromUser($user)
{
    // $sql = "SELECT p.*, U.username, u.profile FROM events AS p JOIN users AS u ON p.user_id = u.id WHERE u.id= ? ORDER BY p.created_at       DESC";

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile, u.phone ,u.country ,u.email ,u.role_id,u.full_address FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id
     ORDER BY p.created_at DESC) AS P JOIN users AS U ON p.user_id = U.id WHERE u.id= ? ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['user_id' => $user]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getAllEventsUnpublishedFromUser($user)
{
    // $sql = "SELECT p.*, U.username, u.profile FROM events AS p JOIN users AS u ON p.user_id = u.id WHERE u.id= ? ORDER BY p.created_at       DESC";

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile, u.phone ,u.country ,u.email ,u.role_id,u.full_address FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =0
     ORDER BY p.created_at DESC) AS P JOIN users AS U ON p.user_id = U.id WHERE u.id= ? ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['user_id' => $user]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getAllEventsFromUserName($user)
{

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile, u.phone ,u.country ,u.email ,u.role_id,u.full_address FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id WHERE u.id= ? ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'user_id' => $user]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getAllEventsById($by_id)
{
$sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile, u.phone ,u.country ,u.email ,u.role_id,u.full_address FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
      p.id=? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, [ 'id' => $by_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
// function getAllEventsById($by_id)
// {
// var_dump($by_id);
//     $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
//     p.published, p.created_at,p.price, p.name,u.username, u.profile, u.phone ,u.country ,u.email ,u.role_id,u.full_address FROM (select p.*, categories.name 
//     FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
//     published =? AND u.id=? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

//     $stmt = executeQuery($sql, ['published' => 1, 'id' => $by_id]);
//     $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
//     return $records;
// }
function getAllEventsByLocation($location)
{

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? AND location=? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'location' => $location]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getAllEventsByPrice($price)
{

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? AND price=? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'price' => $price]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
function getAllEventsByType($type)
{

    $sql = "SELECT p.id, p.user_id, p.category_id, p.title, p.image, p.description, p.location, p.event_day, p.type, 
    p.published, p.created_at,p.price, p.name,u.username, u.profile FROM (select p.*, categories.name 
    FROM events AS p JOIN categories ON p.category_id = categories.id WHERE 
    published =? AND type=? ORDER BY p.created_at DESC) AS P JOIN users AS U ON P.user_id = U.id ORDER BY P.created_at DESC";

    $stmt = executeQuery($sql, ['published' => 1, 'type' => $type]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}


function searchAll($e_title, $e_price, $e_date)
{
    $records = "";

    $sql = "     SELECT temp.id, temp.user_id, temp.category_id, temp.title, temp.image, temp.description, temp.location, temp.event_day, temp.type, 
    temp.published, temp.created_at,temp.price,temp.name, U.username, u.profile FROM (select E.*, C.name 
    FROM events AS E JOIN categories AS C ON E.category_id = C.id WHERE price LIKE '%$e_price%'
                AND title LIKE'%$e_title%'
                AND event_day LIKE '%$e_date%' AND published =1 ) AS temp JOIN users AS U ON temp.user_id = U.id ORDER BY temp.created_at DESC"
    ;
    global $conn;

    $records = $conn->query($sql);
    $records->fetch_assoc();
    return $records;
}

function searchAllAndCategory($e_title, $e_category, $e_date)
{
    $records = "";

    $sql = "     SELECT temp.id, temp.user_id, temp.category_id, temp.title, temp.image, temp.description, temp.location, temp.event_day, temp.type, 
    temp.published, temp.created_at,temp.price,temp.name, U.username, u.profile FROM (select E.*, C.name 
    FROM events AS E JOIN categories AS C ON E.category_id = C.id WHERE C.name LIKE '%$e_category%'
                AND title LIKE'%$e_title%'
                AND event_day LIKE '%$e_date%' AND published =1 ) AS temp JOIN users AS U ON temp.user_id = U.id ORDER BY temp.created_at DESC"
    ;
    global $conn;

    $records = $conn->query($sql);
    $records->fetch_assoc();
    return $records;
}

// function getAllEventsFromUser($user)
// {
//     $sql = "SELECT p.*, U.username, u.profile FROM events AS p JOIN users AS u ON p.user_id = u.id WHERE u.id= ? ORDER BY p.created_at       DESC";
//     $data = [$user['id']];
//     $stmt = executeQuery($sql,$data);
//     // $stmt = executeQuery($sql, ['user_id' => $user]);
//     $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

//     return $records;
// }
// function getAllEventsFromUser($user)
// {
//     $sql = "SELECT p.*, U.username, u.profile FROM events AS p JOIN users AS u ON p.user_id = u.id WHERE u.id= ? ORDER BY p.created_at       DESC";
//     $data = [$user['id']]; 
//     $stmt = executeQuery($sql, $data ,['user_id' => $user]);
//     $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
//     return $records;
// }

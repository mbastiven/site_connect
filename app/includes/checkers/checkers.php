 
<?
// --  HOME PAGE STATEMENTS -- include(ROOT_PATH . "/app/includes/checkers/checkers.php");//


if (isset($_POST['search-btn'])) {
    $e_title = $_POST['search-term-name'];
    $e_type = $_POST['search-term-type'];
    $e_date = $_POST['search-term-date'];
    $events = searchAll($e_title, $e_type, $e_date);
    $eventTitle = "Similar search results for ";
}
else if (isset($_GET['c_id'])) {

    $events = getEventsByCategoryId($_GET['c_id']);
    if (count($events) == 0) {
        $eventTitle = "No results found for ' " . $_GET['name'] . " '";
    } else {
        $eventTitle = "You searched for events  under ' " . $_GET['name'] . " '";
    }
}else if (isset($_GET['u_id'])) {

    $events = getAllEventsFromUserName($_GET['u_id']);
    if (count($events) == 0) {
        $eventTitle = "No results created by found  ' " . $_GET['username'] . " '";
    } else {
        $eventTitle = "Results for events created by ' " . $_GET['username'] . " '";
    }
}
else if (isset($_GET['location'])) {

    $events = getAllEventsByLocation($_GET['location']);
    if (count($events) == 0) {
        $eventTitle = "No results found in ' " . $_GET['location'] . " '";
    } else {
        $eventTitle = "Results for events found in ' " . $_GET['location'] . " '";
    }
} else if (isset($_GET['price'])) {

    $events = getAllEventsByPrice($_GET['price']);
    if (count($events) == 0) {
        $eventTitle = "No ' " . $_GET['price'] . " ' results found";
    } else {
        $eventTitle = "Results for ' " . $_GET['price'] . " '  events ";
    }
}
else if (isset($_GET['type'])) {

    $events = getAllEventsByType($_GET['type']);
    if (count($events) == 0) {
        $eventTitle = "No results found in ' " . $_GET['type'] . " '";
    } else {
        $eventTitle = "Results for ' " . $_GET['type'] . " 'events ";
    }
} 
 
else {
    $events = getPublishedEventsLimit();
}
//  dd($_SESSION['username']);
// if (isset($_POST['search-term-name']) && empty($_POST['search-term-type']) && empty($_POST['search-term-date'])) {
//     $eventTitle = "Similar search results for '" . $_POST['search-term-name'] . "'";
// } else if (isset($_POST['search-term-type']) && empty($_POST['search-term-names']) && empty($_POST['search-term-date'])) {
//     $eventTitle = "Similar search results for '" . $_POST['search-term-type'] . "'";
// } else if (isset($_POST['search-term-date']) && empty($_POST['search-term-names']) && empty($_POST['search-term-type'])) {
//     $eventTitle = "Similar search results for '" . $_POST['search-term-date'] . "'";
// }



// --  ALL EVENT PAGE STATEMENTS -- //
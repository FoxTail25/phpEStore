<?php

$visitCounter = 1;
$lastVisit = '';

if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = $_COOKIE['visitCounter'];
    $visitCounter++;
    setcookie('visitCounter', $visitCounter, time()+3600);
}else{
    setcookie('visitCounter', $visitCounter, time()+3600);
}


if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = date('d-m-Y H:i:s', $_COOKIE['lastVisit']);
    setcookie('lastVisit', time(), time()+3600);
}else{
    setcookie('lastVisit', time(), time()+3600);
}

// if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
// }

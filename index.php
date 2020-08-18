<?php

const UNIQUE_FILE = 'unique.txt';



if (!isset($_COOKIE['check'])) {

    setcookie('check', 1, strtotime('tomorrow'));

    if (!file_exists(UNIQUE_FILE)) {
        $visits = 0;
    } else {
        $visits = (int) file_get_contents(UNIQUE_FILE);
    }

    $visits++;
    file_put_contents(UNIQUE_FILE,$visits);
}











die();
$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            die("I will show login form");
        }

        die("I will login user with given credentials");

        break;
}
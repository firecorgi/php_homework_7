<?php
include "config.php";

function getDBConnection() {
    global $config;
    $link = mysqli_connect($config["host"], $config["user"], $config["password"], $config["database"]);

    // did we connect?
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    mysqli_select_db($link, 'home_work7') or die ('Wrong db selected!');
    return $link;
}

function insertNewUser($name, $surname, $email, $num) {
    getDBConnection();

    $query = 'SELECT * FROM users';
    $sql = "INSERT INTO users (name, surname, email, num) VALUES ('$name', '$surname', '$email', $num)";
    if (mysqli_query(getDBConnection(), $sql)) {
        echo "New record created successfully";
    }
    mysqli_close(getDBConnection());
}

function getUserList() {
    getDBConnection();

    $query = 'SELECT * FROM users';
    $result = mysqli_query(getDBConnection(), $query) or die('Failed!');
    $res = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $res[] = $row;
    }
    mysqli_close(getDBConnection());

    return $result;
}


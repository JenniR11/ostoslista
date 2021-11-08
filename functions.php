<?php
function openDb() {
    $db = new PDO('mysql:host=localhost;port=8889;dbname=shoppinglist;charset=utf8','root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
}

function returnError(PDOExeption $pdoex) {
    echo header('HTTP/1.1 500 Internal Server Error');
    $error = array('error' => $pdoex->getMessage());
    echo json_encode($error);
}
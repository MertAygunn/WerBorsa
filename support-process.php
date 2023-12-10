<?php

$name = $_POST["name"];
$surname = $_POST["surname"];
$country = filter_input(INPUT_POST, "country", FILTER_VALIDATE_INT);
$message = filter_input(INPUT_POST, "message", FILTER_VALIDATE_INT);

var_dump($_POST['country']);

$host = "localhost";
$dbname = "werborsadb";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
    username: $username,
    password: $password,
    database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO message (name, surname, country, message)
        VALUES ('".$_POST['name']."', '".$_POST['surname']."', '".$_POST['country']."',  '".$_POST['message']."')";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}

mysqli_stmt_execute($stmt);

echo "Mesaj gönderildi.";
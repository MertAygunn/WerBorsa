<?php /** @noinspection ALL */

if (empty($_POST["email"])) {
    echo '<script>alert("Boş bırakmayınız")</script>';
    echo '<script>window.history.back();</script>';
    die;
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo '<script>alert("Geçerli bir mail adresi giriniz")</script>';
    echo '<script>window.history.back();</script>';
    die;
}

if (strlen($_POST["password"]) < 8) {
    echo '<script>alert("Şifre en az 8 karakter uzunluğunda ve en az 1 harf ve 1 rakam içermeli!")</script>';
    echo '<script>window.history.back();</script>';
    die;
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    echo '<script>alert("Şifre en az bir harf içermeli")</script>';
    echo '<script>window.history.back();</script>';
    die;
}

if ( ! preg_match("/[0-9]/i", $_POST["password"])) {
    echo '<script>alert("Şifre en az bir rakam içermeli")</script>';
    echo '<script>window.history.back();</script>';
    die;
}

if ($_POST["password"] !== $_POST["password_confirmation"]){
    echo '<script>alert("Şifreler uyuşmuyor, tekrar deneyiniz")</script>';
    echo '<script>window.history.back();</script>';
    die;
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (name, email, password_hash)
VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
    $_POST["name"],
    $_POST["email"],
    $password_hash);

if ($stmt->execute()) {

    header("Location: signup-success.php");
    exit;

} else {

    if ($mysqli->errno === 1062) {
        die("Böyle bir kullanıcı mevcut");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

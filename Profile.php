<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>



<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="background">
    <div class="navbar">
        <div class="logo">
            <a href="Main.php">
                <img src="logo.jpg" alt="LOGO">
            </a>
        </div>
        <ul>
            <li><a href="Main.php" class="active">
                    <button type="button" class="btn btn-warning">Ana Sayfa</button>
                </a></li>
            <li><a href="Support.php">
                    <button type="button" class="btn btn-warning">Destek</button>
                </a></li>
            <li> <div class="dropdown">
                    <a class="btn btn-danger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profilim
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Profile.php">Profilime git</a></li>
                        <li><a class="dropdown-item" href="Logout.php">Çıkış yap</a></li>
                    </ul>
                </div>
        </ul>
    </div>
</div>
</body>
<footer>
    <div id="footer" class ="footer">
        <a href="Main.php">
            <img id="footer-logo" class="footer-logo" src="logo.jpg" alt="FooterLogo"></a>
    </div>
    <p class="text-footer">
        Copyright © 2023 Her hakkı saklıdır.
        WerBorsa.ltd.sti
    </p>
    <div id="footer-social" class="footer-social">
        <a href="About.php">Hakkımızda</a>
    </div>
</footer>
</html>
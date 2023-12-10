<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: Profile.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Girişi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="background">
    <div class="tus">
    <a href="Main.php">
        <button type="button" class="btn btn-warning">Ana Sayfa</button>
    </a>
    </div>
    </div>
<div class="form-center">
    <div class="wrapper">

    <div class="title">
        Kullanıcı Girişi
    </div>
    <form method="post">

        <div class="field">
            <input type="text" id="name" name="name" required>
            <label for="name"><b>İsim</b></label>
        </div>

        <div class="field">
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"
                   class="<?= $is_invalid ? 'invalid' : '' ?>">
            <label for="email"><b>Email</b></label>

            <?php if ($is_invalid): ?>
                <script>alert("Geçersiz kullanıcı adı veya şifre")</script>
            <?php endif; ?>
        </div>

        <div class="field">
            <input type="password" id="password" name="password" required>
            <label for="name"><b>Şifre</b></label>
        </div>

        <div class="content">
            <div class="CHECK">
                <input type="checkbox" id="BeniHatirla">
                <label for="BeniHatirla">Beni Hatırla</label>
            </div>

            <div class="pass-link">
                <a href="Password.php">Şifrenizi mi unuttunuz?</a>
            </div>
        </div>

        <div class="field">
            <input type="submit" value="Giriş">
        </div>

        <div class="signup-link">
            Üye değil misiniz? <a href="Signup.php">Kayıt olun</a>
        </div>
    </form>
</div>
</body>
</html>

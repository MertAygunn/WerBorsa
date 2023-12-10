<!DOCTYPE html>
<html lang="tr">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kayıt formu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
<link rel="stylesheet" href="style.css">
<script src="validation.js" defer></script>

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
                        <li><a class="dropdown-item" href="Login.php">Çıkış yap</a></li>
                    </ul>
                </div>
        </ul>
    </div>

<div <h1>X</h1>
<form action="Signup-confirm.php" method="post" novalidate style="border:0px solid #ccc">
    <div class="SignupForm">
        <h1>Hesap Oluştur</h1>

        <label
                for="name"><b>İsim</b>
        </label>
        <input type="text" id = "name" placeholder="İsminizi giriniz" name="name" required>

        <label
                for="email"><b>Email</b>
        </label>
        <input type="text" id = "email" placeholder="Mail'inizi giriniz" name="email" required>

        <label
                for="password"><b>Şifre</b>
        </label>
        <input type="password" id ="password" placeholder="Şifreyi buraya giriniz" name="password" required>

        <label
                for="password_confirmation"><b>Şifreyi tekrarlayınız</b>
        </label>
        <input type="password"  id="password_confirmation" placeholder="Şifrenizi tekrarlayın" name="password_confirmation" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Beni hatırla
        </label>

        <p>Kayıt olarak <a href="#" style="color:dodgerblue">kullanıcı sözleşmemizi kabul etmiş olursunuz</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">İptal</button>
            <button type="submit" class="signupbtn">Kayıt ol</button>
        </div>
    </div>
</form>
<div <h1>X</h1>
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

</body>
</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ana Sayfa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="navbar">
            <div class="logo">
                <a href="Main.php">
                    <img src="logo.jpg" alt="MainLogo">
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
        <section class="stock-widgets">
            <div class="center"></div>
            <div style="margin-top: 60px; margin-bottom: 100px;" id="tv-large-widget-8a25c"></div>
            <div class="tradingview-widget-container">
            <div id="tradingview_7b76d"></div>
            <div class="tradingview-widget-copyright"> <a href="https://tr.tradingview.com/symbols/USDEUR/?exchange=FX_IDC" rel="noopener" target="_blank"></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
            new TradingView.widget(
            {
            "width": 800,
            "height": 600,
            "symbol": "FX_IDC:USDEUR",
            "interval": "1",
            "timezone": "Etc/UTC",
            "theme": "dark",
            "style": "4",
            "locale": "tr",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "container_id": "tradingview_7b76d"
            } );
            </script>
        </div>
        </div>
        <footer>
            <div id="footer" class ="footer">
               <a href="Main.php">
               <img id="footer-logo" class="footer-logo" src="logo.jpg" alt="FooterLogo"></a>
            </div>
                    <p class="text-footer">
                        Copyright © 2024 Her hakkı saklıdır.
                        WerBorsa.ltd.sti
                    </p>
            <div id="footer-social" class="footer-social">
                <a href="About.php">Hakkımızda</a>
            </div>
          </footer>
</body>
</html>
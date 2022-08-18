<?php
    include("../config/connection.php");
    session_start();
?>

<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initiaj-scale_1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/profil.css">
    </head>
    <body>
    <div class="banner">
        <div class="navbar">
        <ul>
                    <li><a href="../anasayfa/index.php">ANASAYFA</a></li>
                    <li><a href="../giris/giris.php">GİRİŞ YAP</a></li>
                    <li><a href="../kayitol/KayitOl.php">KAYIT OL</a></li>
                    <li><a href="../profil/profil.php">PROFİL</a></li>
                </ul>
        </div>
        <div class="content">
            <h1>Kullanıcı Adı: <?php echo($_SESSION['kullaniciAdi']);?></h1>
            <h1>Sifre: <?php echo($_SESSION['passw']);?></h1>
            <p>siber güvenlikte ilerlemeye çalışan birileri...</p>
        </div>
    </div>
    </body>
    </html>
    </DOCTYPE>
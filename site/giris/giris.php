<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initiaj-scale_1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/giris.css">
    </head>
    <body>
    <div class="banner">
        <div class="navbar">
                <img src="../image/fightclublogo.jpg" alt="" class="logo" width="100" height="100">
                <ul>
                    <li><a href="../anasayfa/index.php">ANASAYFA</a></li>
                    <li><a href="../giris/giris.php">GİRİŞ YAP</a></li>
                    <li><a href="../kayitol/KayitOl.php">KAYIT OL</a></li>
                    <li><a href="../profil/profil.php">PROFİL</a></li>
                </ul>
        </div>
        <div class="kayitFormu">
            <form action="" method="post">
                <h3>GİRİŞ YAP</h3>
                <input type="text" name="kullaniciAdi" placeholder="kullanıcı adı"   /> 
                <!-- required maxlength="30" -->
                <input type="password" name="passw" placeholder="şifrenizi giriniz" />
                
                <input class="btn" type="submit" value="GİRİŞ YAP" />
            </form>
            
        </div>
    </div>
    </body>
    </html>
    </DOCTYPE>

    <?php
    session_start();

    include("../config/connection.php");

    if(isset($_POST['kullaniciAdi']) && isset($_POST['passw'])){
        $username = htmlspecialchars($_POST['kullaniciAdi']);
        $password = htmlspecialchars($_POST['passw']);
        

        $check = $baglanti->query("select * from user where kullaniciAdi='$username' and passw='$password'");
        $check = $baglanti->query("select * from user where kullaniciAdi='$username' and passw='$password'");
        $login = $check->num_rows;
        if($login){
            $_SESSION["kullaniciAdi"] = $username;
            $_SESSION["passw"] = $password;
            header('Location: ../profil/profil.php');
        }else{
            echo("<script>alert('giris basarisiz');</script>");
        }   
    }


    ?>
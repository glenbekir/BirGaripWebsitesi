<?php
require_once '../config/connection.php';

?>
<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initiaj-scale_1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/KayitOl.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div class="banner">
        <div class="navbar">
                <img src="../image/ricklogo.jpg" alt="" class="logo" width="100" height="100">
                <ul>
                    <li><a href="../anasayfa/index.php">ANASAYFA</a></li>
                    <li><a href="../giris/giris.php">GİRİŞ YAP</a></li>
                    <li><a href="../kayitol/KayitOl.php">KAYIT OL</a></li>
                    <li><a href="../profil/profil.php">PROFİL</a></li>
                </ul>
        </div>
        <div class="kayitFormu">
            <form action="" method="POST">
                <h3>KULLANICI Kayıt Formu</h3>

                <input type="text" name="kullaniciAdi" placeholder="kullanıcı adı" required maxlength="250" data-sb-validations="required" /> 
                
                <input type="email" name="email" placeholder="e-posta giriniz" data-sb-validations="required" />
                
                <input type="password" name="passw" placeholder="şifrenizi giriniz" data-sb-validations="required"/>
                
                <input type="submit" name="submit"  class="btn btn-primary" value="Gönder" >

            </form>
        </div>
    </div>
    </body>
    </html>
</DOCTYPE>
<?php
 
include('../config/connection.php');
session_start();
if(isset($_POST['kullaniciAdi']) && isset($_POST['email']) && isset($_POST['passw'])){
    $username = htmlspecialchars($_POST["kullaniciAdi"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["passw"]);
    $check = $baglanti->query("select * from user where kullaniciAdi='$username' and email='$email' and passw='$password'");
    $dolu = $check->num_rows;
    if ($dolu) {
             return 'Daha önceden kayıt edilmiş';
         }
    else {
    
    if(!empty($_POST['kullaniciAdi']) && !empty($_POST['email']) && $_POST['passw']){

       $kontrol = $baglanti->query("insert into user(kullaniciAdi,email,passw) values('$username', '$email', '$password')");
       if($kontrol){
        header('Location: ../giris/giris.php');
       }
       else{
        echo("<script>alert('Hatali Kayit')</script>");
       } 
    }
}}
?>
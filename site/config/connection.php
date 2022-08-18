<?php

 $baglanti = new mysqli("server", "kullanicismi", "parola", "veritabaniadi");

 if ($baglanti->connect_errno > 0) {
     die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
 }

 $baglanti->set_charset("utf8");

?>

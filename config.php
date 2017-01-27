<?php
$baglanti = @mysql_connect('localhost', 'root', 'rootroot');
$veritabani = @mysql_select_db('1');
 
if($baglanti && $veritabani) {
 
} else {
   echo 'Bağlantı kurulamadı.';
}

?>
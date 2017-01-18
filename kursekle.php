<?php

$baglanti = @mysql_connect('localhost', 'root', 'rootroot');
$veritabani = @mysql_select_db('1');
 
if($baglanti && $veritabani) {
   echo 'Bağlantı kuruldu.';
} else {
   echo 'Bağlantı kurulamadı.';
}

if ($_POST){
	$kursadi = $_POST["kursAdi"];
	$kurssuresi = $_POST["kursSuresi"];
	$kurstarihi = $_POST["kursTarihi"];
	$kursgunleri = $_POST["kursGunleri"];
	$kursyeri = $_POST["kursYeri"];
	$kursaciklama = $_POST["kursAciklama"];
	$kontrol = mysql_query("insert into kurslar (kursadi, kurssuresi, kurstarihi, kursgunleri, kursyeri, kursaciklama) values ('$kursadi','$kurssuresi','$kurstarihi','$kursgunleri','$kursyeri','$kursaciklama')");
	if($kontrol){
		echo "Kayıt eklendi";
	}else{
		echo "Kayıt eklenemedi!";
	}
	
}

?>
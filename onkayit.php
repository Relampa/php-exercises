<?php

include 'config.php';
 
if($baglanti && $veritabani) {
   
} else {
   echo 'Bağlantı kurulamadı.';
}

if ($_POST){
	$kursadi = $_POST["kursadi"];
	$kurskodu = $_POST["kurskodu"];
	$ad = $_POST["ad"];
	$soyad = $_POST["soyad"];
	$tckimlik = $_POST["tckimlik"];
	$babaadi = $_POST["babaadi"];
	$kontrol = mysql_query("insert into onkayit (kursadi, kurskodu, ad, soyad, tckimlik, babaadi) values ('$kursadi','$kurskodu','$ad','$soyad','$tckimlik','$babaadi')");
	if($kontrol){
		include 'header.php';
?>		
<center>
<h3>Önkayıt başarıyla oluşturuldu</h3><br><br>
<img src="http://www.aktaselektromekanik.com/assets/img/symbol/tik.png" height="200px" width="200px">
</center>		
</div>
</div>
<?php 
	}else{
		echo "Kayıt eklenemedi!";
	}
	
}
include 'footer.php' ;
?>

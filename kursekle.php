<?php
 include 'config.php';
if($baglanti && $veritabani) {

} else {
   echo 'Bağlantı kurulamadı.';
}

if ($_POST){
	
	$kurskodu 		= $_POST["kurskodu"];
	$kursadi 		= $_POST["kursAdi"];
	$kurssuresi		= $_POST["kursSuresi"];
	$kurstarihi		= $_POST["kursTarihi"];
	$kursgunleri	= $_POST["kursGunleri"];
	$kursyeri		= $_POST["kursYeri"];
	$kursaciklama	= $_POST["kursAciklama"];

	$kontrol = mysql_query("insert into kurslar (kurskodu, kursadi, kurssuresi, kurstarihi, kursgunleri, kursyeri, kursaciklama) values ('$kurskodu','$kursadi','$kurssuresi','$kurstarihi', '$kursgunleri', '$kursyeri', '$kursaciklama')");
	if($kontrol){
		include 'header.php';
?>		


<center>
<h3>Kurs başarıyla oluşturuldu</h3><br><br>
<img src="http://www.aktaselektromekanik.com/assets/img/symbol/tik.png" height="200px" width="200px">
</center>		
</div>
</div>
<?php
	}else{
		echo "Kayıt eklenemedi!";
		
	}
	
}
include 'footer.php';
?>

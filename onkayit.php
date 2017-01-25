<html>
<head>
<?php

$baglanti = @mysql_connect('localhost', 'root', 'rootroot');
$veritabani = @mysql_select_db('1');
 
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
		
?>		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color: #efefef;">
<div class="jumbotron">
<div class="container">

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

?>
</body>
</html>
<html>
<head>
<?php 
$baglanti = @mysql_connect('localhost', 'root', 'rootroot');
$veritabani = @mysql_select_db('1');
 
if($baglanti && $veritabani) {
   echo 'Bağlantı kuruldu.';
} else {
   echo 'Bağlantı kurulamadı.';
}
 
mysql_close($baglanti); // MYSQL sunucusu ile bağlantımızı koparttık

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<form name"form1" method="post" action="kursekle.php">
  <div class="form-group">
    <label for="kursAdi">Kurs Adı</label>
    <input type="text" class="form-control" name="kursAdi" placeholder="Kurs Adı">
  </div>
  <div class="form-group">
    <label for="kursSuresi">Kurs Süresi</label>
    <input type="text" class="form-control" name="kursSuresi" placeholder="Kurs Süresi">
  </div>
  <div class="form-group">
    <label for="kursTarihi">Kurs Tarihi</label>
    <input type="text" class="form-control" name="kursTarihi" placeholder="Kurs Tarihi">
  </div>
  <div class="form-group">
    <label for="kursGunleri">Kurs Günleri</label>
    <input type="text" class="form-control" name="kursGunleri" placeholder="Kurs Günleri">
  </div>
  <div class="form-group">
    <label for="kursYeri">Kurs Yeri</label>
    <input type="text" class="form-control" name="kursYeri" placeholder="Kurs Yeri">
  </div>
<div class="form-group">
  <label for="kursAciklama">Kurs Açıklaması:</label>
  <textarea class="form-control" rows="5" name="kursAciklama"></textarea>
</div>
 
  <button type="submit" class="btn btn-default">Kurs Ekle</button>
</form>

</div>
</div>
</div>
</body>
</html>
<html>
<head>
<?php 
$baglanti = @mysql_connect('localhost', 'root', 'rootroot');
$veritabani = @mysql_select_db('1');
 
if($baglanti && $veritabani) {
 
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
<body style="background-color: #efefef;">
<div class="jumbotron">
<div class="container">
<div class="col-md-3">
<div class="row">
</div>
</div>
<div class="col-md-6">
<div class="row">
<h1>Kurs Önkayıt</h1>
<form name"form1" method="post" action="onkayit.php">
  <div class="form-group">
    <label for="kursadi">Kurs Adı</label>
    <input type="text" class="form-control" name="kursadi" placeholder="Kurs Adı" value="<?php if($_GET['kursadi']){echo $_GET['kursadi'];}else{echo "Kurs Adı";} ?>">
	
  </div>
  <div class="form-group">
    <label for="kurskodu">Kurs Kodu</label>
    <input type="text" class="form-control" name="kurskodu" placeholder="Kurs Kodu" value="<?php if($_GET['kurskodu']){echo $_GET['kurskodu'];}else{echo "Kurs Adı";} ?>">
  </div>
  <div class="form-group">
    <label for="ad">Adınız</label>
    <input type="text" class="form-control" name="ad" placeholder="Adınız">
  </div>
  <div class="form-group">
    <label for="soyad">Soyadınız</label>
    <input type="text" class="form-control" name="soyad" placeholder="Soyadınız">
  </div>
  <div class="form-group">
    <label for="tckimlik">TC Kimlik No</label>
    <input type="text" class="form-control" name="tckimlik" placeholder="TC Kimlik No">
  </div>
<div class="form-group">
  <label for="babaadi">Baba Adı:</label>
  <input type="text" class="form-control" name="babaadi" placeholder="Baba Adı">
</div>
 
  <button type="submit" class="btn btn-default">Önkayıt Oluştur</button>
</form>

</div>
</div>
<div class="col-md-3">
<div class="row">
</div>
</div>
</div>
</div>

</body>
</html>
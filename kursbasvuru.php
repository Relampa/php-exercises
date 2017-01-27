<?php 
	include 'header.php';
	include 'config.php';
?>
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
<?php include 'footer.php';?>
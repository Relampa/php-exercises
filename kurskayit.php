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
<h1>Kurs Ekle</h1>
<form name"form1" method="post" action="kursekle.php">

  
  <div class="form-group">
    <label for="Kurs kodu">Kurs Kodu</label>
    <input type="text" class="form-control" name="kurskodu" placeholder="Kurs Kodu">
  </div>
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
<div class="col-md-3">
<div class="row">
</div>
</div>
<?php include 'footer.php'; ?>
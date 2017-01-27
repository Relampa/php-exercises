<?php 
	include 'header.php';
	include 'config.php';
?>
<div class="col-md-1">
<div class="row">
</div>
</div>
<div class="col-md-10">

<div class="row">
<center><h1>Aktif Kurslar</h1></center>
<table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Kurs Adı</th>
		<th>Kurs Kodu</th>
        <th>Kurs Süresi</th>
        <th>Kurs Tarihi</th>
		<th>Kurs Günleri</th>
		<th>Kurs Yeri</th>
		<th>Kurs Açıklama</th>
		<th>Başvuru</th>
      </tr>
    </thead>
    <tbody>
<?php 


$veriler = mysql_query("select * from kurslar");
		if(mysql_num_rows($veriler)!=0){
			while($oku = mysql_fetch_assoc($veriler))
			{
				echo "<tr>";
				echo	"<td>".$oku["kursadi"]."</td>";
				echo	"<td>".$oku["kurskodu"]."</td>";
				
				echo	"<td>".$oku["kurssuresi"]."</td>";
				echo	"<td>".$oku["kurstarihi"]."</td>";
				echo	"<td>".$oku["kursgunleri"]."</td>";
				echo	"<td>".$oku["kursyeri"]."</td>";
				echo	"<td>".$oku["kursaciklama"]."</td>";
				echo	"<td><a href='?kursadi=".$oku["kursadi"]."&kurskodu=".$oku["kurskodu"]."'>Başvur</a></td>";
				echo "</tr>";
			}
		}else{
			echo "Kurs bulunamadi.";
		}
		
	if($_GET['kursadi'] && $_GET['kurskodu']){
		header("Location:kursbasvuru.php?kursadi=".$_GET['kursadi']."&kurskodu=".$_GET['kurskodu']."");
	}
?>

      
      
    </tbody>
  </table>

</div>
</div>
<div class="col-md-1">
<div class="row">
</div>
</div>
<?php include 'footer.php';?>
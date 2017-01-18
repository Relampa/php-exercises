<html>
<head>
<?php 
$baglanti = @mysql_connect('localhost', 'root', 'rootroot');
$veritabani = @mysql_select_db('1');
 

 


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
        <th>Kurs Süresi</th>
        <th>Kurs Tarihi</th>
		<th>Kurs Günleri</th>
		<th>Kurs Yeri</th>
		<th>Kurs Açıklama</th>
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
				echo	"<td>".$oku["kurssuresi"]."</td>";
				echo	"<td>".$oku["kurstarihi"]."</td>";
				echo	"<td>".$oku["kursgunleri"]."</td>";
				echo	"<td>".$oku["kursyeri"]."</td>";
				echo	"<td>".$oku["kursaciklama"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "Kurs bulunamadi.";
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
</div>
</div>
</body>
</html>
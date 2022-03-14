<?php 
$nilai1=["id" => 1, "nim" => "01101","uts" => 80, "uas" => 84,"tugas" => 78];
$nilai2=["id" => 2, "nim" => "01121","uts" => 70, "uas" => 50,"tugas" => 68];
$nilai3=["id" => 3, "nim" => "01130","uts" => 60, "uas" => 86,"tugas" => 70];
$nilai4=["id" => 4, "nim" => "01134","uts" => 90, "uas" => 91,"tugas" => 82];

$kumpulan_nilai=[$nilai1, $nilai2, $nilai3, $nilai4];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Kumpulan nilai</title>
 	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 </head>
 <body>
 <div class="container">
 	<h1 class="text-center">Daftar Nilai Mahasiswa</h1>
 	<table class="table table-bordered">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">NIM</th>
		      <th scope="col">UAS</th>
		      <th scope="col">UTS</th>
		      <th scope="col">Tugas</th>
		      <th scope="col">Nilai Akhir</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $nomor=1; foreach($kumpulan_nilai as $nilai) :?>
		    	<tr>
		    		<?php $nilai_akhir=($nilai["uts"]+$nilai["uas"]+$nilai["tugas"]/3); ?>
		    		<td><?= $nomor; ?></td>
		    		<td><?= $nilai["nim"]; ?></td>
		    		<td><?= $nilai["uas"] ?></td>
		    		<td><?= $nilai["uts"] ?></td>
		    		<td><?= $nilai["tugas"] ?></td>
		    		<td><?= number_format($nilai_akhir, 2,",",".") ?></td>
		    	</tr>
		    <?php $nomor++ ?>
		    <?php endforeach; ?>
		  </tbody>
		</table>

 </div>
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 </body>
 </html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nilai Siswa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php 
$proses=$_POST["kirim"];
$nama_mahasiswa=$_POST["nama"];
$mata_kuliah=$_POST["matkul"];
$nilai_uts=$_POST["nilai_uts"];
$nilai_uas=$_POST["nilai_uas"];
$nilai_tugas=$_POST["nilai_tugas"];

$total_nilai=($nilai_uts+$nilai_uas+$nilai_tugas)/3;
$grade;
$status;
$predikat;
if ($total_nilai >= 85 && $total_nilai <= 100){
	$grade="A";
}elseif($total_nilai >= 70 && $total_nilai < 85){
	$grade="B";
}elseif($total_nilai >= 56 && $total_nilai < 70){
	$grade="C";
}elseif($total_nilai >= 36 && $total_nilai < 56){
	$grade="D";
}elseif ($total_nilai >= 0 && $total_nilai < 36){
	$grade="E";
}else{
	$grade="I";
}

if ($total_nilai >= 55){
	$status="Lulus";
}else{
	$status="Tidak Lulus";
}

switch ($grade) {
	case 'A':
		$predikat="Sangat Memuaskan";
		break;
	case "B":
		$predikat="Memuaskan";
		break;
	case "C":
		$predikat="Cukup";
		break;
	case "D":
		$predikat="Kurang";
		break;
	case "E":
		$predikat="Sangat Kurang";
		break;
	default:
		$predikat="Tidak Ada";
		break;
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Daftar Nilai Mahasiswa</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="form_nilai.php" class="btn btn-primary mb-2" name="kirim"><- Kembali</a>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th>Nama</th>
			      <th>Mata Kuliah</th>
			      <th>Nilai UTS</th>
			      <th>Nilai UAS</th>
			      <th>Nilai Tugas</th>
			      <th>Grade</th>
			      <th>Predikat</th>
			      <th>Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td><?= $nama_mahasiswa; ?></td>
			      <td><?= $mata_kuliah; ?></td>
			      <td><?= $nilai_uts; ?></td>
			      <td><?= $nilai_uas; ?></td>
			      <td><?= $nilai_tugas; ?></td>
			      <td><?= $grade; ?></td>
			      <td><?= $predikat; ?></td>
			      <td><?= $status; ?></td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>